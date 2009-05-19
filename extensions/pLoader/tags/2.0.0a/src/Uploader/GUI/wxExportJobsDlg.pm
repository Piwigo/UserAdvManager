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
package Uploader::GUI::wxExportJobsDlg;
use strict;
use Wx qw/
             wxDefaultSize
             wxDefaultPosition
             wxID_CANCEL
             wxID_OK
         /;
use base qw/Wx::Dialog Class::Accessor::Fast/;
#use TDSC::GUI::export_dlg;
use Wx::Event qw/
                    EVT_CHECKLISTBOX
                    EVT_RADIOBOX
                    EVT_BUTTON
                    EVT_UPDATE_UI
                /;

__PACKAGE__->mk_accessors( 
    qw/
           clbjobs
           rbolanguage
           output_path
           language
           btok
           jobs
      / 
);

sub new {
    my ($this, $params) = @_;
    #on recupere le nom de la classe en fonction du type d'appel de la méthode.
    my $class = ref($this) || $this;


    my $self = $class->SUPER::new( undef, -1, $params->{title}, wxDefaultPosition, wxDefaultSize);
    # load controls
    &main::DSExportJobs($self, 1);

    $self->_initEventHandlers();
    
    $self->clbjobs( $self->FindWindow($main::ID_EXPORT_JOBS) );
    $self->rbolanguage( $self->FindWindow($main::ID_LANGUAGE) );
    $self->btok( $self->FindWindow($main::ID_EXPORT_OK) );
    

    # Undefined is default and hidden : no default language choice
    $self->rbolanguage->SetSelection(2);
    $self->rbolanguage->Show(2, 0);
    
    

    $self->clbjobs->InsertItems( $params->{jobs}, 0 );
    $self->_restorePrevValues( $params );
    
    $self;    
}

sub _restorePrevValues {
    my ( $self, $params ) = @_;
    
    if ( defined( $params->{prevjobs} ) ){
        my $selected = {};
        map {
            $selected->{$_} = 1;
        }
        @{$params->{prevjobs}};
        
        # restore prev export selection
        for( my $i=0;$i<$self->clbjobs->GetCount;$i++){
          if($selected->{$self->clbjobs->GetString($i)}){
              $self->clbjobs->Check($i, 1);
          }
        }    	
        $self->jobs( $params->{prevjobs} );
    }
    else {
        $self->jobs( [] );	
    }
    
    if ( defined( $params->{output_path} ) ){
        $self->output_path( $params->{output_path} );
    }	

    if ( defined( $params->{language} ) ){
        $self->language( $params->{language} );
    }
    else {
    	# Undefined
        $self->language( 2 );
    }

}

sub _initEventHandlers {
    my ( $self ) = @_;
    
    EVT_BUTTON( $self, $main::ID_SELECT_ALL, \&OnSelectAll );
    EVT_BUTTON( $self, $main::ID_REVERSE_SEL, \&OnReverseSelection );
    EVT_BUTTON( $self, $main::ID_EXPORT_OK, \&OnExportOK );
    EVT_BUTTON( $self, $main::ID_EXPORT_CANCEL, \&OnExportCancel );
    EVT_BUTTON( $self, $main::ID_EXPORT_DIRDIALOG, \&OnExportDirDialog );
    EVT_CHECKLISTBOX($self, $main::ID_EXPORT_JOBS, \&OnCheckListBox ) ;
    EVT_RADIOBOX($self, $main::ID_LANGUAGE, \&OnRadioBox ) ;
    
    EVT_UPDATE_UI( $self, $self, \&OnUpdateUI ) ;   
	
}

# UI context management
sub OnUpdateUI {
    my ( $self, $event ) = @_;
    
    $self->FindWindow($main::ID_EXPORT_DIRECTORY)->SetValue( $self->output_path );
    $self->FindWindow($main::ID_LANGUAGE)->SetSelection( $self->language );
    
    # Enable OK if required properties are set
    $self->btok->Enable(1) if (
        defined $self->output_path &&
        2 != $self->rbolanguage->GetSelection &&
        scalar @{$self->jobs}
    );
	
}

sub OnRadioBox {
    my ( $self, $event ) = @_;

    $self->language($event->GetInt);
}

sub OnCheckListBox {
    my ( $self, $event ) = @_;
    
    $self->SelectedJobs();
}

sub OnExportDirDialog {
    my ( $self, $event ) = @_;

    my $dialog = Wx::DirDialog->new( $self );

    if( $dialog->ShowModal == wxID_CANCEL ) {
        Wx::LogMessage( "User cancelled the dialog" );
    } else {
        Wx::LogMessage( "Export directory: %s", $dialog->GetPath );
        $self->output_path( $dialog->GetPath );
    }

    $dialog->Destroy;
	
}

sub OnExportOK {
    my ( $self, $event ) = @_;
    
    $self->EndModal(wxID_OK);
 
}

sub OnExportCancel {
    my ( $self, $event ) = @_;
    
    $self->EndModal(wxID_CANCEL);
}

sub OnSelectAll {
    my ( $self, $event ) = @_;
    
    for( my $i=0;$i<$self->clbjobs->GetCount;$i++){
      $self->clbjobs->Check($i, 1) if !$self->clbjobs->IsChecked($i);	
    }	
    $self->SelectedJobs();
}

sub OnReverseSelection {
    my ( $self, $event ) = @_;
    
    for( my $i=0;$i<$self->clbjobs->GetCount;$i++){
      if($self->clbjobs->IsChecked($i)){
          $self->clbjobs->Check($i, 0);
      }
      else{
          $self->clbjobs->Check($i, 1);
      }	
    }
    $self->SelectedJobs();
}


sub SelectedJobs {
    my ( $self ) = @_;

    my $jobs = [];
    for( my $i=0;$i<$self->clbjobs->GetCount;$i++){
        if($self->clbjobs->IsChecked($i)){
            push @$jobs, $self->clbjobs->GetString($i);
        }
    }
    $self->jobs( $jobs );	
}

1;