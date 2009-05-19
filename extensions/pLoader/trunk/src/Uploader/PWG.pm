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
package Uploader::PWG;
use strict;
use Data::Dumper;
use Uploader::PWG::WebServices;
use Uploader::PWG::Categories;
use base qw/
           Uploader::Object
           Class::Accessor::Fast
           Uploader::PWG::WebServices
           Uploader::PWG::Categories
           /;

__PACKAGE__->mk_accessors( 
    qw/
           site_url
           site_username
           site_password
           http_username
           http_password
           branding
      / 
);

$|=1;


sub Init {
    my ( $self ) = @_;

    # for web services    
    $self->SUPER::Init();
    
    $self->RefreshCategories;	

}

sub RefreshCategories {
    my ( $self ) = @_;

    $self->categories(
        $self->prepare_items(
            $self->GetCategories
        )
    );
}


1;