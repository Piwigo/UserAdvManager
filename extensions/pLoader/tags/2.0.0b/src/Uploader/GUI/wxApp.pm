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
package Uploader::GUI::wxApp;
use strict;
use base qw/Wx::App Class::Accessor::Fast/;    
use Wx qw/
             wxBITMAP_TYPE_GIF 
             wxBITMAP_TYPE_ICO 
             wxBITMAP_TYPE_BMP 
             wxBITMAP_TYPE_PNG 
             wxBITMAP_TYPE_JPEG
             wxIMAGE_QUALITY_NORMAL
             wxIMAGE_QUALITY_HIGH
             wxSPLASH_CENTRE_ON_SCREEN 
             wxSPLASH_TIMEOUT
             wxDefaultPosition 
             wxDefaultSize 
             wxSIMPLE_BORDER 
             wxFRAME_TOOL_WINDOW
             wxFRAME_NO_TASKBAR wxSTAY_ON_TOP
             wxWHITE
             wxICON_EXCLAMATION
             wxOK 
             wxLANGUAGE_ABKHAZIAN   
             wxLANGUAGE_AFAR   
             wxLANGUAGE_AFRIKAANS   
             wxLANGUAGE_ALBANIAN   
             wxLANGUAGE_AMHARIC   
             wxLANGUAGE_ARABIC   
             wxLANGUAGE_ARABIC_ALGERIA   
             wxLANGUAGE_ARABIC_BAHRAIN   
             wxLANGUAGE_ARABIC_EGYPT   
             wxLANGUAGE_ARABIC_IRAQ   
             wxLANGUAGE_ARABIC_JORDAN   
             wxLANGUAGE_ARABIC_KUWAIT   
             wxLANGUAGE_ARABIC_LEBANON   
             wxLANGUAGE_ARABIC_LIBYA   
             wxLANGUAGE_ARABIC_MOROCCO   
             wxLANGUAGE_ARABIC_OMAN   
             wxLANGUAGE_ARABIC_QATAR   
             wxLANGUAGE_ARABIC_SAUDI_ARABIA   
             wxLANGUAGE_ARABIC_SUDAN   
             wxLANGUAGE_ARABIC_SYRIA   
             wxLANGUAGE_ARABIC_TUNISIA   
             wxLANGUAGE_ARABIC_UAE   
             wxLANGUAGE_ARABIC_YEMEN   
             wxLANGUAGE_ARMENIAN   
             wxLANGUAGE_ASSAMESE   
             wxLANGUAGE_AYMARA   
             wxLANGUAGE_AZERI   
             wxLANGUAGE_AZERI_CYRILLIC   
             wxLANGUAGE_AZERI_LATIN   
             wxLANGUAGE_BASHKIR   
             wxLANGUAGE_BASQUE   
             wxLANGUAGE_BELARUSIAN   
             wxLANGUAGE_BENGALI   
             wxLANGUAGE_BHUTANI   
             wxLANGUAGE_BIHARI   
             wxLANGUAGE_BISLAMA   
             wxLANGUAGE_BRETON   
             wxLANGUAGE_BULGARIAN   
             wxLANGUAGE_BURMESE   
             wxLANGUAGE_CAMBODIAN   
             wxLANGUAGE_CATALAN   
             wxLANGUAGE_CHINESE   
             wxLANGUAGE_CHINESE_SIMPLIFIED   
             wxLANGUAGE_CHINESE_TRADITIONAL   
             wxLANGUAGE_CHINESE_HONGKONG   
             wxLANGUAGE_CHINESE_MACAU   
             wxLANGUAGE_CHINESE_SINGAPORE   
             wxLANGUAGE_CHINESE_TAIWAN   
             wxLANGUAGE_CORSICAN   
             wxLANGUAGE_CROATIAN   
             wxLANGUAGE_CZECH   
             wxLANGUAGE_DANISH   
             wxLANGUAGE_DUTCH   
             wxLANGUAGE_DUTCH_BELGIAN   
             wxLANGUAGE_ENGLISH   
             wxLANGUAGE_ENGLISH_UK   
             wxLANGUAGE_ENGLISH_US   
             wxLANGUAGE_ENGLISH_AUSTRALIA   
             wxLANGUAGE_ENGLISH_BELIZE   
             wxLANGUAGE_ENGLISH_BOTSWANA   
             wxLANGUAGE_ENGLISH_CANADA   
             wxLANGUAGE_ENGLISH_CARIBBEAN   
             wxLANGUAGE_ENGLISH_DENMARK   
             wxLANGUAGE_ENGLISH_EIRE   
             wxLANGUAGE_ENGLISH_JAMAICA   
             wxLANGUAGE_ENGLISH_NEW_ZEALAND   
             wxLANGUAGE_ENGLISH_PHILIPPINES   
             wxLANGUAGE_ENGLISH_SOUTH_AFRICA   
             wxLANGUAGE_ENGLISH_TRINIDAD   
             wxLANGUAGE_ENGLISH_ZIMBABWE   
             wxLANGUAGE_ESPERANTO   
             wxLANGUAGE_ESTONIAN   
             wxLANGUAGE_FAEROESE   
             wxLANGUAGE_FARSI   
             wxLANGUAGE_FIJI   
             wxLANGUAGE_FINNISH   
             wxLANGUAGE_FRENCH   
             wxLANGUAGE_FRENCH_BELGIAN   
             wxLANGUAGE_FRENCH_CANADIAN   
             wxLANGUAGE_FRENCH_LUXEMBOURG   
             wxLANGUAGE_FRENCH_MONACO   
             wxLANGUAGE_FRENCH_SWISS   
             wxLANGUAGE_FRISIAN   
             wxLANGUAGE_GALICIAN   
             wxLANGUAGE_GEORGIAN   
             wxLANGUAGE_GERMAN   
             wxLANGUAGE_GERMAN_AUSTRIAN   
             wxLANGUAGE_GERMAN_BELGIUM   
             wxLANGUAGE_GERMAN_LIECHTENSTEIN   
             wxLANGUAGE_GERMAN_LUXEMBOURG   
             wxLANGUAGE_GERMAN_SWISS   
             wxLANGUAGE_GREEK   
             wxLANGUAGE_GREENLANDIC   
             wxLANGUAGE_GUARANI   
             wxLANGUAGE_GUJARATI   
             wxLANGUAGE_HAUSA   
             wxLANGUAGE_HEBREW   
             wxLANGUAGE_HINDI   
             wxLANGUAGE_HUNGARIAN   
             wxLANGUAGE_ICELANDIC   
             wxLANGUAGE_INDONESIAN   
             wxLANGUAGE_INTERLINGUA   
             wxLANGUAGE_INTERLINGUE   
             wxLANGUAGE_INUKTITUT   
             wxLANGUAGE_INUPIAK   
             wxLANGUAGE_IRISH   
             wxLANGUAGE_ITALIAN   
             wxLANGUAGE_ITALIAN_SWISS   
             wxLANGUAGE_JAPANESE   
             wxLANGUAGE_JAVANESE   
             wxLANGUAGE_KANNADA   
             wxLANGUAGE_KASHMIRI   
             wxLANGUAGE_KASHMIRI_INDIA   
             wxLANGUAGE_KAZAKH   
             wxLANGUAGE_KERNEWEK   
             wxLANGUAGE_KINYARWANDA   
             wxLANGUAGE_KIRGHIZ   
             wxLANGUAGE_KIRUNDI   
             wxLANGUAGE_KONKANI   
             wxLANGUAGE_KOREAN   
             wxLANGUAGE_KURDISH   
             wxLANGUAGE_LAOTHIAN   
             wxLANGUAGE_LATIN   
             wxLANGUAGE_LATVIAN   
             wxLANGUAGE_LINGALA   
             wxLANGUAGE_LITHUANIAN   
             wxLANGUAGE_MACEDONIAN   
             wxLANGUAGE_MALAGASY   
             wxLANGUAGE_MALAY   
             wxLANGUAGE_MALAYALAM   
             wxLANGUAGE_MALAY_BRUNEI_DARUSSALAM   
             wxLANGUAGE_MALAY_MALAYSIA   
             wxLANGUAGE_MALTESE   
             wxLANGUAGE_MANIPURI   
             wxLANGUAGE_MAORI   
             wxLANGUAGE_MARATHI   
             wxLANGUAGE_MOLDAVIAN   
             wxLANGUAGE_MONGOLIAN   
             wxLANGUAGE_NAURU   
             wxLANGUAGE_NEPALI   
             wxLANGUAGE_NEPALI_INDIA   
             wxLANGUAGE_NORWEGIAN_BOKMAL   
             wxLANGUAGE_NORWEGIAN_NYNORSK   
             wxLANGUAGE_OCCITAN   
             wxLANGUAGE_ORIYA   
             wxLANGUAGE_OROMO   
             wxLANGUAGE_PASHTO   
             wxLANGUAGE_POLISH   
             wxLANGUAGE_PORTUGUESE   
             wxLANGUAGE_PORTUGUESE_BRAZILIAN   
             wxLANGUAGE_PUNJABI   
             wxLANGUAGE_QUECHUA   
             wxLANGUAGE_RHAETO_ROMANCE   
             wxLANGUAGE_ROMANIAN   
             wxLANGUAGE_RUSSIAN   
             wxLANGUAGE_RUSSIAN_UKRAINE   
             wxLANGUAGE_SAMI   
             wxLANGUAGE_SAMOAN   
             wxLANGUAGE_SANGHO   
             wxLANGUAGE_SANSKRIT   
             wxLANGUAGE_SCOTS_GAELIC   
             wxLANGUAGE_SERBIAN   
             wxLANGUAGE_SERBIAN_CYRILLIC   
             wxLANGUAGE_SERBIAN_LATIN   
             wxLANGUAGE_SERBO_CROATIAN   
             wxLANGUAGE_SESOTHO   
             wxLANGUAGE_SETSWANA   
             wxLANGUAGE_SHONA   
             wxLANGUAGE_SINDHI   
             wxLANGUAGE_SINHALESE   
             wxLANGUAGE_SISWATI   
             wxLANGUAGE_SLOVAK   
             wxLANGUAGE_SLOVENIAN   
             wxLANGUAGE_SOMALI   
             wxLANGUAGE_SPANISH   
             wxLANGUAGE_SPANISH_ARGENTINA   
             wxLANGUAGE_SPANISH_BOLIVIA   
             wxLANGUAGE_SPANISH_CHILE   
             wxLANGUAGE_SPANISH_COLOMBIA   
             wxLANGUAGE_SPANISH_COSTA_RICA   
             wxLANGUAGE_SPANISH_DOMINICAN_REPUBLIC   
             wxLANGUAGE_SPANISH_ECUADOR   
             wxLANGUAGE_SPANISH_EL_SALVADOR   
             wxLANGUAGE_SPANISH_GUATEMALA   
             wxLANGUAGE_SPANISH_HONDURAS   
             wxLANGUAGE_SPANISH_MEXICAN   
             wxLANGUAGE_SPANISH_MODERN   
             wxLANGUAGE_SPANISH_NICARAGUA   
             wxLANGUAGE_SPANISH_PANAMA   
             wxLANGUAGE_SPANISH_PARAGUAY   
             wxLANGUAGE_SPANISH_PERU   
             wxLANGUAGE_SPANISH_PUERTO_RICO   
             wxLANGUAGE_SPANISH_URUGUAY   
             wxLANGUAGE_SPANISH_US   
             wxLANGUAGE_SPANISH_VENEZUELA   
             wxLANGUAGE_SUNDANESE   
             wxLANGUAGE_SWAHILI   
             wxLANGUAGE_SWEDISH   
             wxLANGUAGE_SWEDISH_FINLAND   
             wxLANGUAGE_TAGALOG   
             wxLANGUAGE_TAJIK   
             wxLANGUAGE_TAMIL   
             wxLANGUAGE_TATAR   
             wxLANGUAGE_TELUGU   
             wxLANGUAGE_THAI   
             wxLANGUAGE_TIBETAN   
             wxLANGUAGE_TIGRINYA   
             wxLANGUAGE_TONGA   
             wxLANGUAGE_TSONGA   
             wxLANGUAGE_TURKISH   
             wxLANGUAGE_TURKMEN   
             wxLANGUAGE_TWI   
             wxLANGUAGE_UIGHUR   
             wxLANGUAGE_UKRAINIAN   
             wxLANGUAGE_URDU   
             wxLANGUAGE_URDU_INDIA   
             wxLANGUAGE_URDU_PAKISTAN   
             wxLANGUAGE_UZBEK   
             wxLANGUAGE_UZBEK_CYRILLIC   
             wxLANGUAGE_UZBEK_LATIN   
             wxLANGUAGE_VALENCIAN   
             wxLANGUAGE_VIETNAMESE   
             wxLANGUAGE_VOLAPUK   
             wxLANGUAGE_WELSH   
             wxLANGUAGE_WOLOF   
             wxLANGUAGE_XHOSA   
             wxLANGUAGE_YIDDISH   
             wxLANGUAGE_YORUBA   
             wxLANGUAGE_ZHUANG   
             wxLANGUAGE_ZULU  
         /;
use Uploader::GUI::wxFrameAUI;
use File::Slurp ;
use Data::Dumper;
use Storable;
use File::HomeDir;
use File::Spec;
use Uploader::PWG;
use Uploader::ImageList;
use Uploader::GUI::wxLoginDlg;
use Wx::Locale qw/:default/;


$|=1;

__PACKAGE__->mk_accessors( 
    qw/
          pwg
          site_url
          site_username
          site_password
          rejects
          imagelist
          storable_file
          wx_thumb_dir
          resized_dir
          preview_dir
          userdata_dir
          resized_dir
          thumb_dir
          conf_file
          locale
          current_language
      / 
);

sub FilterEvent {
    my( $self, $event ) = @_;
    
    Wx::LogMessage "EventType %s", $event->GetEventType();
    
    return -1;
}

sub OnInit {
    my( $self ) = @_;

    Wx::InitAllImageHandlers();
    my $applicationName = "pLoader" ;
    $self->SetAppName( $applicationName );
    $self->SetVendorName( "Piwigo Team" );

    $self->{IMGTYPE} = {
        'jpg' => wxBITMAP_TYPE_JPEG,
        'gif' => wxBITMAP_TYPE_GIF,
        'png' => wxBITMAP_TYPE_PNG,
    };

    $self->_readParams2( 'locale.ini' ) ;

    $self->_init_userdir;


    my $conf = retrieve $self->conf_file if -e $self->conf_file;	

    if(defined $conf ){
        $self->SetKeyValues($conf);
    }
    else {
        $self->_readParams( 'pLoader.ini' ) unless defined $conf ;
    }


    $self->site_url(
        $self->{site_url}
    );

    $self->site_username(
        $self->{site_username}
    );
    $self->site_password(
        $self->{site_password}
    );
    $self->current_language(
        $self->{current_language}||wxLANGUAGE_ENGLISH
    );

    
    $self->init_locale;
    


    my $ok = $self->Login();
    # user pressed OK
    if($ok){
        $self->pwg(
            # get these parameters from dialog or from file
            Uploader::PWG->new(
                {
                    site_url       => $self->site_url,
                    site_username  => $self->site_username,
                    site_password  => $self->site_password,
                }
            )
        );
      
    
        $self->_init_imagelist;
        $self->_init_thumbimagelist;
        
        $self->_init_frame;
    }

    $ok;
}

my $locale;
sub init_locale {
    my ( $self, $language ) = @_;
    
    $self->current_language(
        $language
    ) if defined $language;

    undef $locale;
    $locale = Wx::Locale->new(
        $self->current_language
    );
    $locale->AddCatalogLookupPathPrefix( '../locale');
    if(!$locale->AddCatalog( 'pLoader' )){
        print "Cannot find translation catalog files. Use default language\n";
    }
	
}

sub StoreConnectionProperties {
    my ( $self ) = @_;

    eval {    
        store( 
            {
                map{
                   $_ => $self->{$_},
                }
                qw/
                    site_url
                    site_username
                    site_password
                    current_language
                /
            },
            $self->conf_file
        );
    };
}

sub _init_imagelist {
    my ( $self ) = @_;	

    my $stored_imagelist;
    
    if( -e $self->storable_file ){
        eval {
            $stored_imagelist = retrieve $self->storable_file;
        };
        if($@){
            Wx::LogMessage(
                "An error has occured. Can not read %s\n%s",
                $self->storable_file,
                $@
            );
            $stored_imagelist = $self->_default_imagelist_params ;
        }
    }
    else{
        $stored_imagelist = $self->_default_imagelist_params ;
    }

    $self->imagelist(
        Uploader::ImageList->new(
            $stored_imagelist
        )
    );

    $self->imagelist->ResizeCallback(
        sub { $self->ResizeImage(@_) }
    );
}


sub _default_imagelist_params {
    my ( $self ) = @_ ;

    my $params = {
       	thumb_size       => 120,
        site_thumb_dir   => $self->thumb_dir,
       	wx_thumb_size    => 120,
        wx_thumb_dir     => $self->wx_thumb_dir,
        preview_ratio    => 25, 
        preview_dir      => $self->preview_dir,
        resize_w         => 800,
        resize_h         => 600,
        site_resized_dir => $self->resized_dir,
      	type             => 'jpg',
      	filter           => 'Lanczos',
      	blur             => 0.9,
      	quality          => 100,
      	prefix           => 'TN',
      	count            => 0,
        storable_file    => $self->storable_file,
        images           => [],
        userdata_dir     => $self->userdata_dir,
        default_name_prefix => 'Photo',
        upload_rejects  =>  [],
        ResizeCallback  => sub { $self->ResizeImage(@_) },
    };

    return $params;
}

sub Login {
    my ( $self ) = @_;	

    my $dlg = Uploader::GUI::wxLoginDlg->new(
        {
            title         => gettext("Piwigo login"),
            site_url      => sub { $self->site_url(@_) },
            site_username => sub { $self->site_username(@_) },	
            site_password => sub { $self->site_password(@_) },	
        }
    );

    my $icon = Wx::Icon->new();
    $icon->LoadFile('../res/favicon.ico', wxBITMAP_TYPE_ICO);
    $dlg->SetIcon($icon);	

    
    my $rval = $dlg->ShowModal();
    $dlg->Destroy;
    
    $rval;
}

sub _init_userdir {
    my ( $self ) = @_;
    
    my $applicationName = $self->GetAppName ;
    my $userdatadir = File::Spec->canonpath(
        File::Spec->catfile(
            File::HomeDir->my_data(), 
            "\.$applicationName"
        )
    );

    if(! -d $userdatadir){
        if(! mkdir $userdatadir){
            Wx::MessageBox( 
                sprintf(
                    "%s directory creation failed",
                    $userdatadir,
                ),
                "pLoader working directory creation error",
                wxOK | wxICON_EXCLAMATION, 
            );

            $userdatadir = File::Spec->canonpath(
                File::Spec->catfile(
                    File::Spec->tmpdir(), 
                    "\.$applicationName"
                )
            );
            mkdir $userdatadir;
        }	
    }

    $self->userdata_dir($userdatadir);
    
    $self->conf_file(
        File::Spec->catfile(
            $self->userdata_dir, 
            ".$applicationName.conf"
        )
    );

    

    $self->storable_file(
        File::Spec->catfile($self->userdata_dir, 'pLoader.dat')
    );
    
    my $thumbdir = File::Spec->catfile($self->userdata_dir, 'thumbnails');
    mkdir $thumbdir unless -d $thumbdir ;
    $self->thumb_dir($thumbdir);

    my $wxthumbdir = File::Spec->catfile($self->userdata_dir, 'wxthumbnails');
    mkdir $wxthumbdir unless -d $wxthumbdir ;
    $self->wx_thumb_dir($wxthumbdir);


    my $resizedir = File::Spec->catfile($self->userdata_dir, 'resize');
    mkdir $resizedir unless -d $resizedir ;
    $self->resized_dir($resizedir);

    my $previewdir = File::Spec->catfile($self->userdata_dir, 'preview');
    mkdir $previewdir unless -d $previewdir ;
    $self->preview_dir($previewdir);

	
}

sub _init_thumbimagelist {
    my ( $self ) = @_;

    
    $self->imagelist->wx_thumb_imglist(
        Wx::ImageList->new( 
            $self->imagelist->wx_thumb_size, 
            $self->imagelist->wx_thumb_size, 
            1,
            0
        )
    );
    
    # reload images 
    $self->_reload_thumb_images;
}


sub _reload_thumb_images {
    my ( $self ) = @_;
    
    my $wximagelist = $self->imagelist->wx_thumb_imglist;
    my $images = $self->imagelist->images;

    map {
        $wximagelist->Add(
            Wx::Bitmap->new( 
                $_->wx_thumb_file, 
                $self->GetWxBitmapType($self->imagelist->type), 
            )
        );
    }
    @$images ;

}

sub GetWxBitmapType {
    my ( $self, $type ) = @_;
    
    $self->{IMGTYPE}->{$type};
}


sub ResizeImage {
    my ( $self, $image_file, $image_file_out, $type, $ratio, $width, $height, $quality ) = @_;
   

    my $image = Wx::Image->new(
            $image_file, 
            $self->GetWxBitmapType($type),
            0
    );
    
    my $w;
    my $h;

    my $img_w = $image->GetWidth;
    my $img_h = $image->GetHeight;
    
    # use a ratio ( 25% default ) if defined
    # default ratio is used for preview.
    if($ratio){
    	$w = $ratio*$img_w/100 ;
        $h = $ratio*$img_h/100 ;
    }
    # use specified width and height
    else{
        # portrait
        if( $img_w < $img_h ){
            $w = $height;
        }
        else{
            $w = $width;
        }
        # to respect aspect ratio
        $h = sprintf(
            "%.0f",
            ($w*$img_h)/$img_w
        );
    }

    $image->Rescale(
        $w,
        $h,
        wxIMAGE_QUALITY_HIGH
    );
    
    $quality ||= 90;
    
    $image->SetOption( 
        "quality", 
        $quality 
    );
    
    if(!$image->SaveFile(
        $image_file_out,
        $self->GetWxBitmapType($type),
    )){
    	Wx::LogMessage(
    	    "An error has occured. Can not save file %s",
    	    $image_file_out,
    	)
    };
}

sub _init_frame {
    my ( $self ) = @_ ;	

    my $config = Wx::ConfigBase::Get;

    my $x = $config->ReadInt( "X", 50 );
    my $y = $config->ReadInt( "Y", 50 );
    my $w = $config->ReadInt( "Width", 1024 );
    my $h = $config->ReadInt( "height", 768 );
    my $sv = $config->ReadInt( "splitVertical", 150 );
    my $sh = $config->ReadInt( "splitHorizontal", 300 );
	
    my $url;
    if($self->pwg->login_result->{stat} eq 'ok'){
        $url = $self->site_url;    
    }
    else{
        $url = gettext("Not connected");
        Wx::MessageBox( 
            sprintf(
                "%s\n\n%s %s %s",
                $self->pwg->login_result->{message},
                gettext("Connection to"),
                $self->site_url,
                gettext("failed"),
            ),
            gettext("Piwigo login error"),
            wxOK | wxICON_EXCLAMATION, 
        );
    }	
    	

    my ( $frame ) = Uploader::GUI::wxFrameAUI->new( 
        {
            x         => $x,
            y         => $y,
            width     => $w,
            height    => $h,
            title     => "pLoader - Piwigo uploader 2.0.0b - [$url]" ,
            pwg       => $self->pwg,
            imagelist => $self->imagelist,
        }
    );
	
	#printf("Config x %s, y %s, w %s, h %s\n", $x, $y, $w, $h);
	#$frame->SetSize( $x, $y, $w, $h );
    $frame->Show( 1 );
    $self->SetTopWindow( $frame );

    my $icon = Wx::Icon->new();
    $icon->LoadFile('../res/favicon.ico', wxBITMAP_TYPE_ICO);
    $frame->SetIcon($icon);	


    return 1;
}


sub _readParams {
	my( $self, $file ) = @_ ;


	my $expr_params ;
	eval { $expr_params = read_file( $file ); } ;
	
	my $paramValues = [] ;
	if($expr_params){
		my $expr = '$paramValues = ' ;
		$expr .=  "$expr_params ; " ;
		eval $expr ;
	}
	
	return unless 'ARRAY' eq ref $paramValues ;
	
	if(scalar(@$paramValues )){
	    my $params = $paramValues->[0] ;
	    $self->SetKeyValues($params);
	}
}

sub _readParams2 {
	my( $self, $file ) = @_ ;


	my $expr_params ;
	eval { $expr_params = read_file( $file ); } ;
	
	my $paramValues = [] ;
	if($expr_params){
		my $expr = '$paramValues = ' ;
		$expr .=  "$expr_params ; " ;
		eval $expr ;
	}
	
	return unless 'HASH' eq ref $paramValues ;
	
	$self->SetKeyValues($paramValues);
}


sub SetKeyValues {
    my ( $self, $params )= @_;	

    foreach( keys %$params ) {
        $self->{$_} = $params->{$_} ;
    }
}


1;