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
package Uploader::GUI::wxExportProgressDlg;
use strict;
use Carp;
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
           cancelled
      / 
);


sub new {
    my ($this, $params) = @_;
    #on recupere le nom de la classe en fonction du type d'appel de la méthode.
    my $class = ref($this) || $this;


    my $self = $class->SUPER::new( undef, -1, $params->{title}, wxDefaultPosition, wxDefaultSize);
    # load controls
    &main::ProcessingProgress($self, 1);

    $self->_initEventHandlers();
    
    $self->btok( $self->FindWindow($main::ID_PROGRESS_OK) );
    $self->gauge( $self->FindWindow($main::ID_PROGRESS_GAUGE) );
    $self->txtprocessing( $self->FindWindow($main::ID_PROGRESS_TXT) );
    $self->gauge->SetForegroundColour(wxGREEN);
      
    $self;    
}


sub _initEventHandlers {
    my ( $self ) = @_;
    
    EVT_BUTTON( $self, $main::ID_PROGRESS_OK, \&OnExportOK );
    
	
}

# Update progress information
sub LogProgress {
    my ( $self ) = @_;

printf("$self cancelled %s \n", $self->cancelled);
    die if $self->cancelled;    
    $self->txtprocessing->SetLabel(
        $text || $self->processing
    );
    $self->gauge->SetValue(
        $value || $self->progress
    );

}

# Close the dialog. cancel export
sub OnExportOK {
    my ( $self, $event ) = @_;
    
    $self->cancelled(1);
    $self->Destroy;
 
}


1;