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
package Uploader::GUI::wxPhotoExifPanel;
use strict;
use Wx qw/
             wxDefaultSize
             wxDefaultPosition
             wxID_CANCEL
             wxID_OK
             wxGREEN
         /;
#use base qw/Wx::Panel Class::Accessor::Fast/;

use base qw/Wx::Panel Uploader::Object2/;

use Wx::Event qw/
                    EVT_BUTTON
                /;


    __PACKAGE__->mk_accessors(     
        qw/accessors/
    );



sub new {
    my ($this, $params) = @_;
    #on recupere le nom de la classe en fonction du type d'appel de la méthode.
    my $class = ref($this) || $this;


    my $self = $class->SUPER::new( $params->{parentwnd}, -1, wxDefaultPosition, wxDefaultSize );


    
    $self->accessors( $params->{accessors} );
    
    # load controls
    &main::PhotoExif($self, 1);
    

    
      
    $self;    
}








1;