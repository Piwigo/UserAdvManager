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
package Uploader::GUI::wxLoginDlg;
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
           url
           username
           password
      / 
);


sub new {
    my ($this, $params) = @_;
    #on recupere le nom de la classe en fonction du type d'appel de la méthode.
    my $class = ref($this) || $this;


    my $self = $class->SUPER::new( undef, -1, $params->{title}, wxDefaultPosition, wxDefaultSize);
    # load controls
    &main::Login($self, 1);
    
    $self->url(
        $params->{site_url}
    );

    $self->username(
        $params->{site_username}
    );

    $self->password(
        $params->{site_password}
    );

    $self->_initEventHandlers();
    
    $self->btok( $self->FindWindow($main::ID_PWG_OK) );

    $self->FindWindow($main::ID_PWG_URL)->SetValue(
        $self->url->()
    );
    
    
    $self->FindWindow($main::ID_PWG_USERNAME)->SetValue(
        $self->username->() 
    );
    
    $self->FindWindow($main::ID_PWG_PASSWORD)->SetValue( 
        $self->password->() 
    );
      
    $self;    
}


sub _initEventHandlers {
    my ( $self ) = @_;
    
    EVT_BUTTON( $self, $main::ID_PWG_OK, \&OnLoginOK );
    EVT_BUTTON( $self, $main::ID_PWG_CANCEL, \&OnLoginCancel );
    
	
}



sub OnLoginOK {
    my ( $self, $event ) = @_;
    
    $self->url->(
        $self->FindWindow($main::ID_PWG_URL)->GetValue    
    );

    $self->username->(
        $self->FindWindow($main::ID_PWG_USERNAME)->GetValue
    );
    
    $self->password->(
        $self->FindWindow($main::ID_PWG_PASSWORD)->GetValue
    );

    $self->EndModal(1);
}

sub OnLoginCancel {
    my ( $self, $event ) = @_;
    
    
    $self->EndModal(0);
 
}


1;