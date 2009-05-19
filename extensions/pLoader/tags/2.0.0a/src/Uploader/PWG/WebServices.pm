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
package Uploader::PWG::WebServices;
 
use strict;
use warnings;
use MIME::Base64; 
use JSON;
use LWP::UserAgent;
use Data::Dumper;
use Digest::MD5::File qw/file_md5_hex md5_hex/;
use File::Slurp;
use Encode qw/encode decode/;
use base qw/
           Uploader::Object
           Class::Accessor::Fast
           /;

__PACKAGE__->mk_accessors( 
    qw/
           uagent
           urlbase
           username
           password
           qry_list_categories
           qry_add_categories
           items
           tags
           categories
           site_high_file
           site_resized_file
           site_thumb_file
           site_image_name
           rank
           site_author
           site_comment
           site_img_date_creation
           uagent_response
           login_result
           action_result
           upload_high
      / 
);

$|=1;

sub Init {
    my ( $self ) = @_ ;
 
    $self->uagent(
        LWP::UserAgent->new
    );
    
    $self->uagent->cookie_jar({});	

    $self->urlbase(
        $self->{site_url}
    );
    
    $self->username(
        $self->{site_username}
    );
    
    $self->password(
        $self->{site_password}
    );
    
    $self->qry_list_categories( sprintf
        "%s/ws.php?format=json&method=%s&recursive=%s",
        $self->urlbase,
        'pwg.categories.getAdminList',
        'true',
    );

    my $form = {
        method => 'pwg.session.login',
        username => $self->username,
        password => $self->password,
    };
 
    $self->uagent_response(
        $self->uagent->post(
            $self->urlbase.'/ws.php?format=json',
            $form
        )
    );
    
    my $hresult = {} ;

    if($self->uagent_response->is_success){
        eval {
            $hresult = from_json(
                $self->uagent_response->content
            );
        };
    }
    else{
        $hresult = {
            'message' => $self->uagent_response->message,
            'stat'    => 'fail',
        };
    }
        
    $self->login_result(
        $hresult
    );

}

sub GetCategories {
    my ( $self ) = @_;

    my $result;
    eval {
        $result = $self->uagent->get(
            $self->qry_list_categories
        );
    };

    if($@){
        printf("An error occured in query execution %s\n%s",
            $self->qry_list_categories,
            $@,
        );	
    }
    my $hresult;
    
    eval {
    	$hresult = from_json(
            $result->content
        );
    };
    
    $hresult ||= {};
    my $categories = $hresult->{result}{categories};


    $categories;	
}

sub UploadImage {
    my ( $self ) = @_;
    


    my $file_content = encode_base64(
        read_file(
            $self->site_resized_file,
            binmode => ':raw',
        )
    );

    my $file_sum = file_md5_hex(
        $self->site_resized_file
    );
 
    my $thumbnail_content = encode_base64(
        read_file(
            $self->site_thumb_file,
            binmode => ':raw',
        )
    );

    my $thumbnail_sum = file_md5_hex(
        $self->site_thumb_file,
    );

    my $original_sum = file_md5_hex(
        $self->site_high_file
    );

    
    my $form = {
        method            => 'pwg.images.add',
        original_sum      => $original_sum,
        file_sum          => $file_sum,
        file_content      => $file_content,
        thumbnail_sum     => $thumbnail_sum,
        thumbnail_content => $thumbnail_content,
        categories        => $self->categories,
        name              => $self->site_image_name,
        rank              => $self->rank,
        author            => $self->site_author,
        comment           => $self->site_comment,
        date_creation     => $self->site_img_date_creation,
        
    };

    if($self->upload_high){
    	$form->{high_content} = encode_base64(
    	                             read_file(
    	                                 $self->site_high_file,
                                         binmode => ':raw',
    	                             )
    	                         );

    	$form->{high_sum}     = $original_sum;
    }


    my $result = $self->uagent->post(
        $self->urlbase.'/ws.php?format=json',
        $form
    );



    return ( $result->is_success, $result->status_line );
}
 

sub AddCategories{
    my ( $self, $name, $parentid ) = @_;

    my $form = {
        method            => 'pwg.categories.add',
        name              => $name,
        parent            => $parentid,
        
    };

    my $result = $self->uagent->post(
        $self->urlbase.'/ws.php?format=json',
        $form
    );

    return ( $result->is_success, $result->status_line );
	
} 
1;
    