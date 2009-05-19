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
package Uploader::GUI::wxGlobalSettingsPanel;
use strict;
use Wx qw/
             wxDefaultSize
             wxDefaultPosition
             wxID_CANCEL
             wxID_OK
             wxGREEN
         /;

use base qw/Wx::Panel Uploader::Object2/;
use Wx::Perl::TextValidator;

use Wx::Event qw/
                    EVT_TEXT
                    EVT_RADIOBOX
                /;


__PACKAGE__->mk_accessors(     
    qw/
        accessors
        frame_callback
      /
);



sub new {
    my ($this, $params) = @_;
    #on recupere le nom de la classe en fonction du type d'appel de la méthode.
    my $class = ref($this) || $this;


    my $self = $class->SUPER::new( $params->{parentwnd}, -1, wxDefaultPosition, wxDefaultSize );


    
    $self->accessors( $params->{accessors} );
    $self->frame_callbacks(
        $params->{frame_callbacks}
    );
    
    $self->Initialize;
      
    $self;    
}

sub Initialize {
    my ( $self ) = @_;	

    # load controls
    &main::GlobalSettings($self, 1);

    $self->_set_validators;    
    $self->SetControlValues;
    $self->_initEventHandlers();
}

sub _set_validators {
    my ( $self ) = @_;	

    map {
        my $numval = Wx::Perl::TextValidator->new( '\d' );
        $self->FindWindow($_)->SetValidator(
            $numval
        );    	
    }
    (
        $main::ID_GLOBAL_THUMB_SIZE,
        $main::ID_GLOBAL_RESIZED_W,
        $main::ID_GLOBAL_RESIZED_H,
    );
}

sub _initEventHandlers {
    my ( $self ) = @_;
    
   
    map {
        my $ctrl = $self->FindWindow($_);
        if('Wx::TextCtrl' eq ref $ctrl){
            EVT_TEXT($self, $ctrl, sub { OnControlChanged(@_) });
        }
        elsif('Wx::RadioBox' eq ref $ctrl){
            EVT_RADIOBOX($self, $ctrl, sub { OnControlChanged(@_) });
        }
    }
    keys %{$self->accessors};	

}

sub OnControlChanged {
    my ( $self, $event ) = @_;
    
    my $control_id = $event->GetId ;

    $self->GetControlValue(
        $control_id
    );
    
    
    my $frame_callback = $self->frame_callbacks->{$control_id};

    eval{
        $frame_callback->() if defined $frame_callback;
    };
}



1;