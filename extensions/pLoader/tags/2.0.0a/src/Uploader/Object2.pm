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
package Uploader::Object2;
use strict;

use Data::Dumper;
use base qw/
               Class::Accessor::Fast
           /; 

__PACKAGE__->mk_accessors(     
    qw/
        accessors
        frame_callbacks
      /
);






# Set control values with accessor
sub SetControlValues {
    my ( $self ) = @_;
    
    my $accessors = $self->accessors;
    
    # accessor_name => [ sub {}, control_id ]
    map {
    	my $control_id = $_;
        $self->SetControlValue($control_id);
   }
    keys %$accessors;
}



sub GetControlValue {
    my( $self, $control_id ) = @_;

    my $ctrl = $self->FindWindow($control_id) ;
    my $accessor = $self->accessors->{$control_id};

    # to execute the right method
    my $method = {
        'Wx::TextCtrl' => sub { 
        	              $accessor->(
        	                  $ctrl->GetValue()
        	              );
                          },	
        'Wx::StaticText' => sub { 
        	              $accessor->(
        	                  $ctrl->GetLabel()
        	              );
                          },	
        'Wx::StaticBitmap' => sub { 
        	              $accessor->(
        	                  $ctrl->GetBitmap()
        	              );
                          },	
        'Wx::RadioBox' => sub { 
        	              $accessor->(
        	                  $ctrl->GetSelection()
        	              );
                          },	
    };


    eval {
        $method->{ref $ctrl }->();
    };
}



sub SetControlValue {
    my( $self, $control_id ) = @_;

    my $ctrl = $self->FindWindow($control_id) ;
    my $accessor = $self->accessors->{$control_id};


    # to execute the right method
    my $method = {
        'Wx::TextCtrl' => sub { 
        	              $ctrl->ChangeValue(
        	                  $accessor->()
        	              );
                          },	
        'Wx::StaticText' => sub { 
        	              $ctrl->SetLabel(
        	                  $accessor->()
        	              );
                          },	
        'Wx::StaticBitmap' => sub { 
        	              $ctrl->SetBitmap(
        	                  $accessor->()
        	              );
                          },	
        'Wx::RadioBox' => sub { 
        	              $ctrl->SetSelection(
        	                  $accessor->()
        	              );
                          },	
    };
    eval {
        $method->{ref $ctrl }->();
    };
}
1;