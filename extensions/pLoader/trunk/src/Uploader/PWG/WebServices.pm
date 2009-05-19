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
use MIME::Base64 qw(encode_base64); 
use JSON;
use LWP::UserAgent;
use Data::Dumper;
use Digest::MD5::File qw/file_md5_hex md5_hex/;
use File::Slurp;
use Encode qw/encode decode is_utf8/;
use POSIX qw(ceil floor);
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
           chunk_size
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

    
    $self->uagent->default_headers->authorization_basic(
        $self->{http_username}||$self->username, 
        $self->{http_password}||$self->password
    );
    
    $self->chunk_size(
        $self->{chunk_size}||500_000
    );
    
    $self->qry_list_categories( sprintf
        "%s/ws.php?format=json&method=%s&recursive=%s",
        $self->urlbase,
#        'pwg.categories.getAdminList',
        'pwg.categories.getList',
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

    my $file_sum;

    eval {
        $file_sum = file_md5_hex(
            encode('iso-8859-1', $self->site_resized_file)
        );
    };
 

    my $thumbnail_sum = file_md5_hex(
        encode('iso-8859-1', $self->site_thumb_file),
    );

    my $original_sum = file_md5_hex(
        encode('iso-8859-1', $self->site_high_file)
    );

    my $form = {
        method            => 'pwg.images.exist',
        md5sum_list       => $original_sum,
    };

    my $result = $self->uagent->post(
        $self->urlbase.'/ws.php?format=json',
        $form
    );

    my $hresult = {};
        eval {
            $hresult = from_json(
                $result->{_content}
            );
        };

    my $image_id = $hresult->{result}{$original_sum};
    if(!defined($image_id)){
    	$self->send_chunks(
    	    {
                filepath => encode('iso-8859-1', $self->site_resized_file),
                type => 'file',
                original_sum => $original_sum,
    	    }
    	);

    	$self->send_chunks(
    	    {
                filepath => encode('iso-8859-1', $self->site_thumb_file),
                type => 'thumb',
                original_sum => $original_sum,
    	    }
    	);
    	
    	
        $form = {
            method            => 'pwg.images.add',
            original_sum      => $original_sum,
            file_sum          => $file_sum,
            thumbnail_sum     => $thumbnail_sum,
            categories        => $self->categories,
            name              => $self->site_image_name,
            rank              => $self->rank,
            author            => $self->site_author,
            comment           => $self->site_comment,
            date_creation     => $self->site_img_date_creation,
            
        };
    
        if($self->upload_high){
            $self->send_chunks(
    	        {
                    filepath => encode('iso-8859-1', $self->site_high_file),
                    type => 'high',
                    original_sum => $original_sum,
    	        }
    	    );

            $form->{high_sum}     = $original_sum;
        }
    }
    else {
        $form = {
            method            => 'pwg.images.setInfo',
            image_id          => $image_id,
            categories        => $self->categories,
            name              => $self->site_image_name,
            rank              => $self->rank,
            author            => $self->site_author,
            comment           => $self->site_comment,
            date_creation     => $self->site_img_date_creation,
        };
    }

    $result = $self->uagent->post(
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


sub send_chunks {
    my ( $self, $params ) = @_;

    my $content = read_file(
        $params->{filepath},
        binmode => ':raw',
    );

    my $content_length = length($content);
    my $nb_chunks = ceil($content_length / $self->chunk_size);

    my $chunk_pos = 0;
    my $chunk_id = 1;
    while ($chunk_pos < $content_length) {
        my $chunk = substr(
            $content,
            $chunk_pos,
            $self->chunk_size
        );
        $chunk_pos += $self->chunk_size;

        my $response = $self->uagent->post(
            $self->urlbase.'/ws.php?format=json',
            {
                method       => 'pwg.images.addChunk',
                data         => encode_base64($chunk),
                original_sum => $params->{original_sum},
                position     => $chunk_id,
                type         => $params->{type},
            }
        );

        #printf(
        #    'chunk %05u of %05u for %s "%s"'."\n",
        #    $chunk_id,
        #    $nb_chunks,
        #    $params->{type},
        #    $params->{filepath}
        #);
        if ($response->code != 200) {
            printf("response code    : %u\n", $response->code);
            printf("response message : %s\n", $response->message);
        }

        $chunk_id++;
    }
}

 
1;
    