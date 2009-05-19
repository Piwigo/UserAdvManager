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
package Uploader::GUI::wxPhotoPropertiesPanel;
use strict;
use Wx qw/
             wxDefaultSize
             wxDefaultPosition
             wxID_CANCEL
             wxID_OK
             wxGREEN
         /;

use base qw/Wx::Panel Uploader::Object2/;

use Wx::Event qw/
                    EVT_TEXT
                /;





sub new {
    my ($this, $params) = @_;
    #on recupere le nom de la classe en fonction du type d'appel de la méthode.
    my $class = ref($this) || $this;


    my $self = $class->SUPER::new( $params->{parentwnd}, -1, wxDefaultPosition, wxDefaultSize );


    
    $self->accessors( $params->{accessors} );
    $self->frame_callbacks(
        $params->{frame_callbacks}
    );
    
    # load controls
    &main::PhotoProperties($self, 1);
 

    $self->_initEventHandlers();
    
      
    $self;    
}



sub _initEventHandlers {
    my ( $self ) = @_;
    
       
    map {
        my $ctrl = $self->FindWindow($_);
        EVT_TEXT($self, $ctrl, sub { OnTextChanged(@_) });
    }
    keys %{$self->accessors};	
}



sub OnTextChanged {
    my ( $self, $event ) = @_;
    
    my $control_id = $event->GetId ;

    $self->accessors->{$control_id}->(
        $event->GetString
    );
        
    my $frame_callback = $self->frame_callbacks->{$control_id};

    eval{
        $frame_callback->();
    };
}



1;