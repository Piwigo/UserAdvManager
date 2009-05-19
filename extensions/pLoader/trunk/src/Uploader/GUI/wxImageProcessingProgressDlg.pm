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
package Uploader::GUI::wxImageProcessingProgressDlg;
use strict;
use Wx qw/
             wxDefaultSize
             wxDefaultPosition
             wxID_CANCEL
             wxID_OK
             wxGREEN
         /;
use base qw/Wx::Dialog Class::Accessor::Fast/;
use Wx::Event qw/
                    EVT_UPDATE_UI
                    EVT_BUTTON
                /;

__PACKAGE__->mk_accessors( 
    qw/
           btok
           gauge
           progress
           processing
           txtprocessing
           image
           cancelled
      / 
);
use Carp;

sub new {
    my ($this, $params) = @_;
    #on recupere le nom de la classe en fonction du type d'appel de la méthode.
    my $class = ref($this) || $this;


    my $self = $class->SUPER::new( undef, -1, $params->{title}, wxDefaultPosition, wxDefaultSize);
    # load controls
    eval {
      &main::ProcessingProgress($self, 1);

    $self->_initEventHandlers();
    
    $self->btok( $self->FindWindow($main::ID_PROGRESS_OK) );
    $self->gauge( $self->FindWindow($main::ID_PROGRESS_GAUGE) );
    $self->txtprocessing( $self->FindWindow($main::ID_PROGRESS_TXT) );
    $self->image( $self->FindWindow($main::ID_STATICBITMAP) );
    $self->gauge->SetForegroundColour(wxGREEN);
    };

    $self->btok->SetLabel(
        $params->{bt_label}||'Cancel'
    );

    if($@){
        Wx::LogMessage("Error during dialogbox initialization");
    }
    $self;    
}


sub _initEventHandlers {
    my ( $self ) = @_;
    
    EVT_BUTTON( $self, $main::ID_PROGRESS_OK, \&OnOK );
    
	
}

# Update progress information
sub LogProgress {
    my ( $self ) = @_;
    
    croak "Cancelled by user\n" if $self->cancelled;    
   
    $self->txtprocessing->SetLabel(
        $self->processing
    );
    $self->gauge->SetValue(
        $self->progress
    );
}

sub DisplayEndInfo {
    my ( $self, $msg ) = @_;

    $self->txtprocessing->SetLabel(
        $msg
    );
    $self->image->Show(0);
    $self->gauge->Show(0);

    $self->btok->SetLabel(
        'Close'
    );
	
}

sub OnOK {
    my ( $self, $event ) = @_;
    
    $self->cancelled(1);
    $self->Destroy;
 
}


1;