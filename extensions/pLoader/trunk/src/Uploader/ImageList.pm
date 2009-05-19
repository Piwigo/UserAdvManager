# +-----------------------------------------------------------------------+
# | pLoader - a Perl photo uploader for Piwigo                            |
# +-----------------------------------------------------------------------+
# | Copyright(C) 2008      Piwigo Team                  http://piwigo.org |
# +-----------------------------------------------------------------------+
# | This program is free software; you can redistribute it and/or modify  |
# | it under the terms of the GNU General Public License as published by  |
# | the Free Software Foundation                                          |
# |                                                                       |
# | This program is distributed in the hope that it will be useful, but   |
# | WITHOUT ANY WARRANTY; without even the implied warranty of            |
# | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU      |
# | General Public License for more details.                              |
# |                                                                       |
# | You should have received a copy of the GNU General Public License     |
# | along with this program; if not, write to the Free Software           |
# | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, |
# | USA.                                                                  |
# +-----------------------------------------------------------------------+
package Uploader::ImageList;
use strict;
use Carp;
use base qw/Uploader::Object/;
use Image::ExifTool qw(:Public);
use Image::Magick;
use File::Spec;
use Uploader::Image;
use Data::Dumper;
use Storable;
use Digest::MD5::File qw/file_md5_hex md5_hex/;
use Encode qw/encode decode is_utf8/;
use Wx::Locale qw/:default/;

# this class implements a collection of image files with associated data
$|=1;
__PACKAGE__->mk_accessors( 
    qw/
       	        thumb_size
                preview_ratio
                categories
      	        type
      	        filter
      	        blur
      	        quality
      	        prefix
      	        author
      	        count
                resize_w
                resize_h
                new_files
                storable_file
       	        wx_thumb_size
                current_image
                images
                image_selection
                exif_metadata
                wx_thumb_imglist
                wx_thumb_dir
                preview_dir
                site_resized_dir
                site_thumb_dir
                userdata_dir
                progress_msg
                last_error_msg
                default_photo_name
                default_photo_name_method
            	default_name_prefix
                SetNewFilesViewerRefreshCallback
                SetNewFilesProgressCallback
                SetNewFilesDisplayEndInfoCallback
                UploadImagesViewerCallback
                progress_thumbnail_refresh
                progress_msg_refresh
                progressbar_refresh
                progress_endinfo_refresh
                RescaleCallback
                ResizeCallback
                upload_rejects
                pwg
                upload_high
                remove_uploaded_from_selection
                wx_quality
                th_quality
                auto_rotate
                interlace
                create_resized
                use_exif_preview
                image_sums
                sums
                version
                imagelist_version
     /
);


sub Init {
    my ( $self ) = @_;
    
    
}



# save exif preview image if available
# otherwise create a preview image
sub _write_preview_image {
    my ( $self, $imagedata ) = @_;


    # If PreviewImage is available, we use it
    if(defined $imagedata ) {
        print "_write_preview_image, use exif PreviewImage\n";
    	eval {
            open PREVIEW_FILE, ">", $self->current_image->preview_file ;
            binmode PREVIEW_FILE;
            print PREVIEW_FILE $$imagedata;
            close PREVIEW_FILE;
        };
        $self->last_error_msg($@) if $@;
    }
    
}


sub _set_exif_tag {
    my ( $self, $file, $tag, $newValue ) = @_;	

  my $options = {};
  # Create a new Image::ExifTool object
  my $exifTool = new Image::ExifTool;

  # Extract meta information from an image
  $exifTool->ExtractInfo($file, $options);

  # Set a new value for a tag
  $exifTool->SetNewValue($tag, $newValue);

  # Write new meta information to a file
  $exifTool->WriteInfo($file);

}

sub _set_current_image_filepaths__ {
    my ( $self ) = @_;

    my ( $vol, $dir, $file ) = File::Spec->splitpath(
        $self->current_image->file
    );

    my ( $filename, $ext ) = split /\./, $file ;
    

    $self->current_image->wx_thumb_file( 
        File::Spec->catfile(
            $self->wx_thumb_dir,
            sprintf(
                "%s.%s",
                $filename,
                $self->type,
            )
        )
    );

    $self->current_image->preview_file( 
        File::Spec->catfile(
            $self->preview_dir,
            sprintf(
                "%s.%s",
                $filename,
                $self->type,
            )
        )
    );
    $self->current_image->preview_file( 
        encode('iso-8859-1', $self->current_image->preview_file)
    );

    $self->current_image->site_thumb_file( 
        File::Spec->catfile(
            $self->site_thumb_dir,
            sprintf(
                "%s.%s",
                $filename,
                $self->type,
            )
        )
    );

}

sub _set_current_image_filepaths {
    my ( $self ) = @_;

    my $filename = sprintf(
        "%s.%s",
        $self->current_image->file_sum,
        $self->type,
    );


    $self->current_image->wx_thumb_file( 
        File::Spec->catfile(
            $self->wx_thumb_dir,
            $filename
        )
    );

    $self->current_image->preview_file( 
        File::Spec->catfile(
            $self->preview_dir,
            $filename
        )
    );
    $self->current_image->preview_file( 
        encode('iso-8859-1', $self->current_image->preview_file)
    );

    $self->current_image->site_thumb_file( 
        File::Spec->catfile(
            $self->site_thumb_dir,
            $filename
        )
    );

}


sub SetCurrentImage {
    my ( $self, $indx ) = @_;	

    $self->current_image(
        $self->GetImage($indx)
    );
}


sub SetNewFiles {
    my ( $self, $files ) = @_;

    $self->new_files( $files );

    # if some files have been previously selected 
    my $i = scalar @{$self->sums};
    my $count = 0;
    $self->count($count);
    my $errors = 0;

    map {
    	my $info = $self->_read_exif_metatdata($_);
       	my $is_new_image = $self->_add_image($_, $info, $i);	
        $self->SetCurrentImage($i);
    	$self->_set_current_image_filepaths();

        if($is_new_image){
    	    my $use_wx_resize = $self->_create_gui_preview($info);
    	    $self->_create_gui_thumbnail($use_wx_resize);

            # ok
            if(!$@){
                $self->progress_msg("Thumbnail and preview created for %s");
            }
            else {
                $self->progress_msg("An error has occured when processing %s\n$@");
                # remove from list
                splice @{$self->sums}, $i, 1;
                $errors++;
            }
        
            $self->SetNewFilesProgressCallback->();
        }
        $i++;
        $count++;
        $self->count($count);
        $self->SetNewFilesViewerRefreshCallback->();
    }
    @{$files};
    $self->SetNewFilesDisplayEndInfoCallback->(
        sprintf(
            "%s images added to the selection\n\n%s errors",
            $self->count,
            $errors
            
        )
    );
    
    $self->Store;
    
}

sub _read_exif_metatdata {
    my ( $self, $file ) = @_;
    
    # read exif metadata
    my $info;
    eval {
        $info = ImageInfo( $file );
    };
    $info = {} if($@);
    
    $info;
}

# key is file path
sub _add_image {
    my ( $self, $file, $info, $i ) = @_;	

    my $is_new_image;

    # for legacy imagelist that do not have image_sums property
    $self->image_sums(
        {}
    ) if !$self->image_sums;

    my $sum = file_md5_hex($file);

    my $image;
    if ( !exists $self->image_sums->{$sum} ){
print "_add_image ", $file, "\n";
        # append to image list
        $image = Uploader::Image->new(
        {
                file              => $file,
                file_sum          => $sum,
                site_name         => $self->_default_photo_name($file, $info, $i),
                site_author       => $self->author,
                exif_metadata     => $self->_select_exif_data($info),
                add_rank          => $i,
                site_categories   => [],
                site_tags         => [],
                site_high_file    => $_,
            }
        );

        $self->image_sums->{$sum} = $image ;
        $is_new_image = 1;
    } else {
        $image = $self->image_sums->{$sum};
    }

        
    $self->sums->[$i] = $sum ;

    $is_new_image;
}


sub _default_photo_name {
    my ( $self, $file, $info, $i ) = @_;
    
    $file = encode('iso-8859-1', $file);
    
    my $name;
    my $create_date = $info->{CreateDate};
    my $ext;
    my ( $vol, $path, $filename ) = File::Spec->splitpath($file);
    ( $filename, $ext ) = split /\.\w+$/, $filename;
    
    my ( $yyyy, $mm, $dd, $hh, $mi, $ss ) = split /[:\s]/, $create_date ;
  
    my $chrono = join('', $yyyy, $mm, $dd);
    if(gettext('Prefix') eq $self->default_photo_name){
    	$name = $self->default_name_prefix
    }
    elsif(gettext('File name') eq $self->default_photo_name){
    	$name = $filename
    }
    elsif(gettext('File path and name') eq $self->default_photo_name){
        $name = sprintf(
            "%s", 
            File::Spec->catfile($path, $filename), 
        )    	
    }	
    elsif(gettext('Prefix + rank number') eq $self->default_photo_name){
        $name = sprintf(
            "%s%s", 
            $self->default_name_prefix, 
            1+$i,
        )    	
    }	
    elsif(gettext('Rank number + prefix') eq $self->default_photo_name){
        $name = sprintf(
            "%s%s", 
            1+$i,
            $self->default_name_prefix, 
        )    	
    }	
    elsif(gettext('Prefix + create date chrono') eq $self->default_photo_name){
        $name = sprintf(
            "%s%s", 
            $self->default_name_prefix, 
            $chrono,
        )    	
    }	
    elsif(gettext('Create date chrono + prefix') eq $self->default_photo_name){
        $name = sprintf(
            "%s%s", 
            $chrono,
            $self->default_name_prefix, 
        )    	
    }	

    $name;	
}

sub _create_gui_preview {
    my ( $self, $info ) = @_;

    my $create_gui_preview;
    my $use_wx_resize;
    if($self->use_exif_preview){        
        # an exif preview is available. we try to use it
        if(defined $info->{PreviewImage} ){
            printf("use preview\n");
            $self->_write_preview_image( $info->{PreviewImage} );
            my $image = new Image::Magick;
            eval {
                $create_gui_preview = $image->ReadImage(
                    $self->current_image->preview_file
                );
            };
            unlink $self->current_image->preview_file if $create_gui_preview;
        }
        else {
            $create_gui_preview = 1;
        }
    }
    else {
        $create_gui_preview = 1;
    }
    print "create gui preview", $create_gui_preview, "\n";
    # have to create a preview file
    if($create_gui_preview) {
        eval {
            if(!$self->CreateGUIPreview()){
                # use method provided by the caller
                # source, target, type, ratio
                print "CreateGUIPreview failed, use callback\n";
                $self->RescaleCallback->(
                    $self->current_image->file,
                    $self->current_image->preview_file,
                    $self->type,
                    $self->preview_ratio,
                    undef,
                    undef,
                    $self->quality,
                );
                $use_wx_resize = 1;
            }
        };# create a preview file
    }    

    $self->RotateImage(
        $self->current_image->preview_file,
    ) if $self->auto_rotate;

    $self->_set_exif_tag(
        $self->current_image->preview_file,
        'Orientation',
        'Horizontal (normal)',
    ) if $self->auto_rotate;
    
    $use_wx_resize;    	
}

sub _create_gui_thumbnail {
    my ( $self, $use_wx_resize ) = @_;

    # Now, we should have a valid preview image.
    # try to thumbnail it
     eval {
        printf("create gui thumbnail\n");
        # use the preview image to create a gui display thumbnail
        if($use_wx_resize)
        {
                print "CreateGUIThumbnail failed, use callback\n";
                $self->ResizeCallback->(
                    $self->current_image->preview_file,
                    $self->current_image->wx_thumb_file,
                    $self->type,
                    $self->wx_thumb_size,
                    $self->wx_thumb_size,
                    $self->wx_quality,
                );
        	
        } else {
            $self->CreateGUIThumbnail();            	
        }
     };
}

sub RemoveImageSelection {
    my ( $self ) = @_;
    
    return if (! scalar @{$self->sums} );
    return if (! defined $self->image_selection );
    
    # higher first, to keep same indexes during remove
    my @images = reverse @{$self->image_selection};     
    map {
        my $image = $self->GetImage($_)->file;
        splice @{$self->sums}, $_, 1 ;
        $self->wx_thumb_imglist->Remove($_);
        shift @images;
    }
    @images;
    
    # clear image selection
    $self->image_selection([]);
}

# used for display in GUI. has to fit a square box ( wxImageList )
sub CreateGUIThumbnail {
    my ( $self ) = @_;

    return 1 if( -e $self->current_image->wx_thumb_file );
    my $rval = 0;
    print "CreateGUIThumbnail ", $self->current_image->wx_thumb_file, "\n";
    my $image = new Image::Magick;

    my $size = $self->wx_thumb_size;

    my $status = $image->Set(size=>sprintf("%sx%s", 3*$size, 3*$size));
    warn "$status" if $status ;

    $status = $image->ReadImage(
        $self->current_image->preview_file
    );
    warn "$status" if $status;
    return $rval if $status;

    $self->current_image->preview_w(
        $image->Get('width')
    );
    $self->current_image->preview_h(
        $image->Get('height')
    );


    $status = $image->Thumbnail(
        geometry=>sprintf("%s%s>", $size*$size, '@')
    );
    warn "$status" if $status;
    return $rval if $status;

#    causes strange behaviour with i18n -> yellow borders when local is other than EN
#    $status = $image->Set(background=>"white");
#    warn "$status" if $status ;

    $status = $image->Set(Gravity=>"Center");
    warn "$status" if $status ;

    $image->Extent(
        geometry=>sprintf("%sx%s", $size, $size),
        gravity=>'center',
    );

    $image->Set(
        quality=>$self->wx_quality
    );

    $status = $image->Strip();
    warn "$status" if $status ;
    

    $image->Write(
        sprintf(
            "%s:%s",
            $self->type,
            encode('iso-8859-1', $self->current_image->wx_thumb_file),
        )
    );

    undef $image;
    
    $rval = 1;
    
    return $rval;
}


sub CreateGUIPreview {
    my ( $self ) = @_;
    printf("CreateGUIPreview %s\n", $self->current_image->preview_file );
    return 1 if( -e $self->current_image->preview_file );
    
    my $rval = 1;

    my $image = Image::Magick->new();

    my $ratio = $self->preview_ratio;


    my $status = $image->Read(
        sprintf(
            "%s",
            $self->current_image->file,
        )
    );
    warn "$status ", $self->current_image->file, "\n" if $status ;
    return 0 if $status;

    $status = $image->Thumbnail(
        geometry=>sprintf(
                              "%s%%x%s%%>", 
                              $ratio, 
                              $ratio
                         )
    );
    warn "$status" if $status ;
    return 0 if $status;


    $status = $image->Set(background=>"white");
    warn "$status" if $status ;

    $status = $image->Set(Gravity=>"Center");
    warn "$status" if $status ;


    $image->Set(quality=>$self->wx_quality);


    $status = $image->Write(
        sprintf(
            "%s:%s",
            $self->type,
            encode('iso-8859-1', $self->current_image->preview_file),
        )
    );
    warn "$status" if $status ;
    return 0 if $status;
    
    undef $image;

    return $rval;
}


sub CreateResized {
    my ( $self ) = @_;
    
    my $rval = 1 ;
    return $rval if( -e $self->current_image->site_resized_file );

    printf(
        "Create resized %s\n",
        $self->current_image->file,
    );     

    my $image = new Image::Magick;

    my $status = $image->ReadImage(
        $self->current_image->file
    );
    warn "$status" if $status ;
    return 0 if $status;

    my $w = $image->Get('width');
    my $h = $image->Get('height');
        
    # should calculate the aspect ratio
    my $resize_w = $self->resize_w;
    my $resize_h = $self->resize_h;
        
    if( $w < $h ){
        my $resize_w_ = $resize_w;
        $resize_w = $resize_h;
        $resize_h = $resize_w_;
    }
    
    $status = $image->Resize(
        geometry => sprintf("%sx%s>", $resize_w, $resize_h), 
        filter => sprintf("%s", $self->filter), 
        blur => $self->blur
    );
    warn "$status" if $status ;
    return 0 if $status;

    $status = $image->Set(Gravity=>"Center");
    warn "$status" if $status ;

    # exif from original image
    my $orientation = $self->current_image->exif_metadata->{Orientation};
    
    # Valid for Rotate 180, Rotate 90 CW, Rotate 270 CW
    if( $orientation =~ m/Rotate (\d+)/ ){
        printf(
            "Rotate %s\n",
            $1
        );
    
        $image->Rotate( degrees=>$1 );	
    }

    $status = $image->Set(quality=>$self->quality);
    warn "$status" if $status ;

    $status = $image->Set(interlace=>$self->interlace);
    warn "$status" if $status ;

    $image->Write(
        sprintf(
            "%s:%s",
            $self->type,
            encode('iso-8859-1', $self->current_image->site_resized_file),
        )
    );
    warn "$status" if $status ;
    return 0 if $status;
    
    undef $image;

   
    $rval = 0 if $status;

    return $rval;
}

sub CreateThumbnail {
    my ( $self ) = @_;
    
    return 1 if( -e $self->current_image->site_thumb_file );
    
    my $rval = 1;

    my $image = new Image::Magick;

    my $status = $image->ReadImage(
        encode('iso-8859-1', $self->current_image->site_resized_file)
    );
    warn "$status" if $status ;

    
    $status = $image->Resize(
        geometry => sprintf(
                                "%sx%s>", 
                                $self->thumb_size, 
                                $self->thumb_size
                           ),
    );
    warn "$status" if $status ;

    $status = $image->Set(Gravity=>"Center");
    warn "$status" if $status ;

    $status = $image->Set(quality=>$self->th_quality);
    warn "$status" if $status ;

    $status = $image->Strip();
    warn "$status" if $status ;


    $image->Write(
        sprintf(
            "%s:%s",
            $self->type,
            encode('iso-8859-1', $self->current_image->site_thumb_file),
        )
    );
    
    undef $image;


    $rval = 0 if $status;

    return $rval;
}



sub _select_exif_data {
    my ( $self, $exif ) = @_;

    return {
        map {
    	    $_ => $exif->{$_},
        }
        qw/
            CreateDate
            ImageWidth
            ImageHeight
            Orientation
            DateTimeOriginal
            ISO
            ExposureTime
            ApertureValue
            FocalLength
            Lens
            Exposure
            Make
            Model
        /
    };    
}

sub Store {
    my ( $self ) = @_;
    
    my $data = $self->get_storable(
        [ 
            qw/
                images
       	        thumb_size
                preview_ratio
      	        type
      	        filter
      	        blur
      	        quality
      	        wx_quality
      	        th_quality
      	        prefix
      	        author
      	        count
                resize_w
                resize_h
                new_files
                storable_file
       	        wx_thumb_size
                current_image
                exif_metadata
                wx_thumb_dir
                preview_dir
                site_resized_dir
                site_thumb_dir
                userdata_dir
                progress_msg
                default_photo_name
            	default_name_prefix
            	upload_high
            	remove_uploaded_from_selection
            	auto_rotate
            	interlace
            	create_resized
            	use_exif_preview
            	image_sums
            	sums
                version
                imagelist_version
            /
        ] 
    
    );
    eval {
        store $data, $self->storable_file;
    };
    if($@){
        print $@, "\n";	
    }
}



sub UploadSelection {
    my ( $self ) = @_;	

    my $viewer_callback = $self->UploadImagesViewerCallback ;


    $self->upload_rejects(
        []
    );

    my $count = 1;
    my $msg;
    $self->count(
        $count
    );
    my $uploaded = 0;
    my $rejected = 0;
    my $time_begin = time;
    my $last_error;
    map {
        # current image object    	
    	$self->current_image(
    	    $self->GetImage($_)
    	);

        my ( $vol, $dir, $file ) = File::Spec->splitpath(
            $self->current_image->file
        );
        
        my $site_name = $self->current_image->site_name;
    
#        my ( $filename, $ext ) = split /\./, $file ;
        my $filename = $self->current_image->file_sum ;

        # lately defined to make sure we have the last global properties ( resize_w, resize_h )
        $self->current_image->site_resized_file( 
            File::Spec->catfile(
                $self->site_resized_dir,
                sprintf(
                    "%s_%sx%s.%s",
                    $filename,
                    $self->resize_w,
                    $self->resize_h,
                    $self->type,
                )
            )
        );
        
        $msg = sprintf(
            "Preparing resized image for %s - %s",
            $site_name,
            $file,
        ); 

    	eval {
            # set current image thumbnail
            $self->progress_thumbnail_refresh->();

            $self->progress_msg_refresh->($msg);
    
      	    # update upload progress dialog
            $self->progressbar_refresh->(0.25);
        };
        # user cancelled : dialog box is destroyed
        croak "Upload cancelled. ", $@ if $@ ;

        if( $self->create_resized ){
            eval {
                if(!$self->CreateResized()){
                    printf("CreateResized failed %s. Use ResizeCallback\n", $@);
                    # use method provided by the caller
                    # source, target, type, ratio, width, $height
                    $self->ResizeCallback->(
                        $self->current_image->file,
                        $self->current_image->site_resized_file,
                        $self->type,
                        undef,
                        $self->resize_w,
                        $self->resize_h,
                        $self->quality,
                    );
                
                    $self->RotateImage(
                        $self->current_image->site_resized_file,
                    ) if $self->auto_rotate;
                }
            };
            $self->_set_exif_tag(
                $self->current_image->site_resized_file,
                'Orientation',
                'Horizontal (normal)',
            ) if $self->auto_rotate;
        }
        # the original is at the right size, no need to create a resize
        else {
            $self->current_image->site_resized_file(
                $self->current_image->file,
            );
        }



        # if upload high, rotate a copy of original file
        if($self->upload_high){
            $self->CreateHigh();
        }

        $msg = sprintf(
            "Preparing thumbnail for %s - %s",
            $site_name,
            $file,
        );

    	eval {
            $self->progress_msg_refresh->($msg);
        };
        croak "Upload cancelled. ", $@ if $@ ;

    	eval {
            $self->CreateThumbnail();
        };

        if($@){
            $msg = sprintf(
                "An error has occured %s - %s\n$@",
                $site_name,
                $file
            );
        }
        else{
            $msg = sprintf(
                "Uploading %s - %s",
                $site_name,
                $file
            );
        }
    	eval {
            $self->progress_msg_refresh->($msg);
       	    $self->progressbar_refresh->(0.50);
        };
        croak "Upload cancelled. ", $@ if $@ ;

        # photo metadata
        $self->_prepare_upload_properties();    	
        my ( $status, $status_msg ) = $self->pwg->UploadImage();

        if ( $status ){
            $msg = sprintf(
                "%s : %s upload succcessful.",
                $site_name,
                $file
            );

            $uploaded++;
        } else {
            $msg = sprintf(
                "An error has occured.\n%s : %s upload is cancelled.\n$status_msg",
                $site_name,
                $file
            );
            $rejected++;
            $last_error = $status_msg;
        }	
        
        $count++;
        $self->count(
            $count
        );
    	# update upload progress dialog
    	eval {
            $self->progress_msg_refresh->($msg);
       	    $self->progressbar_refresh->(1);
        };
        croak "Upload cancelled. ", $@ if $@ ;
        
    }
    @{$self->image_selection} if defined 
        $self->image_selection;

    my $time_end = time;
    my $duration = $time_end - $time_begin;
    $msg = sprintf(
        "%s images processed\n\n%s images uploaded\n\n%s images in errors and not uploaded - $last_error\n\nDuration : %s seconds",
        $self->count - 1,
        $uploaded,
        $rejected,
        $duration,
    );
    $self->progress_endinfo_refresh->($msg);
}

# if we need to rotate
sub CreateHigh {
    my ( $self ) = @_;

    my $orientation = $self->current_image->exif_metadata->{Orientation};
    
    # Valid for Rotate 180, Rotate 90 CW, Rotate 270 CW
    if( $self->auto_rotate and $orientation =~ m/Rotate (\d+)/ ){

        my ( $vol, $dir, $file ) = File::Spec->splitpath(
            $self->current_image->file
        );
    
        my ( $filename, $ext ) = split /\./, $file ;
    
        # high_file is a copy of original
        $self->current_image->site_high_file( 
            File::Spec->catfile(
                $self->site_resized_dir,
                sprintf(
                    "%s_high.%s",
                    $filename,
                    $self->type,
                )
            )
        );

        my $image = Image::Magick->new();
        # we read original
        my $status = $image->Read(
            $self->current_image->file
        );
        warn "$status ", $self->current_image->file, "\n" if $status ;
        return 0 if $status;

        $image->Rotate( degrees=>$1 );	
        
        $image->Write(
            filename=>encode('iso-8859-1', $self->current_image->site_high_file)
        );
        warn "$status ", $self->current_image->site_high_file, "\n" if $status ;
        return 0 if $status;
        
        undef $image;

        $self->_set_exif_tag(
            $self->current_image->site_high_file,
            'Orientation',
            'Horizontal (normal)',
        );

        # Now all images that need to be rotated are done. Update exif
        $self->current_image->exif_metadata->{Orientation} = 'Horizontal (normal)';
    }
    else{
        # high file is the original file
        $self->current_image->site_high_file(
            $self->current_image->file
        );
    }

    return 1;
}

sub _prepare_upload_properties {
    my ( $self ) = @_;
    
    $self->pwg->upload_high(
        $self->upload_high
    );

    $self->pwg->site_high_file(
        $self->current_image->site_high_file
    );

    $self->pwg->site_resized_file(
        $self->current_image->site_resized_file
    );

    $self->pwg->site_thumb_file(
        $self->current_image->site_thumb_file
    );

    $self->pwg->site_author(
        $self->current_image->site_author
    );

    $self->pwg->site_comment(
        $self->current_image->site_comment
    );

    $self->pwg->site_image_name(
        $self->current_image->site_name
    );

    $self->pwg->site_img_date_creation(
        $self->current_image->create_date
    );

    $self->current_image->site_categories(
        $self->categories
    );

    $self->pwg->categories(
        sprintf(
            "%s",
            join(';', @{$self->categories})
        )
    );

    $self->pwg->tags(
        #join(',', @{$self->current_image->site_tags})
    );
	
}

# read Orientation exif tag from original image
# apply rotation to image ( preview or resize )
sub RotateImage {
    my ( $self, $file ) = @_;
    
    # exif from original image
    my $orientation = $self->current_image->exif_metadata->{Orientation};
    
    # Valid for Rotate 180, Rotate 90 CW, Rotate 270 CW
    if( $orientation =~ m/Rotate (\d+)/ ){
        printf(
            "Rotate %s\n",
            $1
        );

        my $image = Image::Magick->new();
        
        # read resized file
        my $status = $image->Read(
            $file
        );
        warn "$status ", $file, "\n" if $status ;
        return 0 if $status;
    
        $image->Rotate( degrees=>$1 );	
        
        # write resizd file
        $image->Write(
            filename=>encode('iso-8859-1', $file)
        );
        warn "$status ", $file, "\n" if $status ;
        return 0 if $status;
        
        undef $image;
    
    }	
    return 1;
}

sub GetImage {
    my ( $self, $indx ) = @_;
    
    my $sum = $self->sums->[$indx];

    $self->image_sums->{$sum};
}

1;