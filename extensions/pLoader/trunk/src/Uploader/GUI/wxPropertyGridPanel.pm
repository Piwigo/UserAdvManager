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
package Uploader::GUI::wxPropertyGridPanel;
use strict;
use Wx qw/
             wxDefaultSize
             wxDefaultPosition
         /;

use base qw/Wx::Grid Uploader::Object2/;

use Wx::Event qw/
   EVT_GRID_CMD_CELL_CHANGE
/;
use Data::Dumper;

__PACKAGE__->mk_accessors(     
    qw/
        frame_callbacks
        renderer
        editor
        properties
      /
);



sub new {
    my ($this, $params) = @_;
    #on recupere le nom de la classe en fonction du type d'appel de la méthode.
    my $class = ref($this) || $this;


    my $self = $class->SUPER::new( $params->{parentwnd}, -1, wxDefaultPosition, wxDefaultSize );

    $self->renderer(
        {
            Bool     => sub { Wx::GridCellBoolRenderer->new },
            Number   => sub { Wx::GridCellNumberRenderer->new },
            LongText => sub { Wx::GridCellAutoWrapStringRenderer->new },
        }
    );

    $self->editor(
        {
            Bool   => sub { Wx::GridCellBoolEditor->new },
            Number => sub { Wx::GridCellNumberEditor->new },
            Choice => sub { Wx::GridCellChoiceEditor->new(@_) },
            LongText => sub { Wx::GridCellAutoWrapStringEditor->new },
        }
    );

    $self->properties(
        $params->{properties}
    );
    
    # a frame callback for each property
    $self->frame_callbacks(
        $params->{frame_callbacks}
    );
    
    $self->Initialize;
      
    EVT_GRID_CMD_CELL_CHANGE( $self, $self, \&OnCellChanged );
    $self;    
}

sub Initialize {
    my ( $self ) = @_;	


  $self->CreateGrid( scalar @{$self->properties}, 2 );
  

  $self->SetRowLabelSize(0);
  $self->SetColLabelSize(0);
  $self->SetColSize( 0, 200 );
  $self->SetColSize( 1, 200 );
  
  $self->_init_property_grid();

}

sub Refresh {
    my ( $self ) = @_;
    
    $self->ClearGrid;

    my $row = 0;
    map {
    	eval {

    	    $self->SetCellValue(
    	        $row,
    	        0,
    	        $_->{label},
    	    );	


    	    $self->SetCellValue(
    	        $row,
    	        1,
    	        $_->{value}->(),
    	    );	



    	};
    	$row++;
    }@{$self->properties};
	
}

sub _init_property_grid {
    my ( $self ) = @_;

    my $row = 0;
    #print Dumper $self->properties;
    map {
    	eval {
    	    $self->SetCellEditor(
    	        $row,
    	        1,
                &{
                    sub { $self->editor->{
                        $_->{type}
                    }->( $_->{choice} ) },
                },    	    
    	    ) if $self->editor->{$_->{type}};

    	    $self->SetCellRenderer(
    	        $row,
    	        1,
                &{
                    $self->renderer->{
                        $_->{type}
                    }
                },    	    
    	    ) if $self->renderer->{$_->{type}};

    	    $self->SetReadOnly(
    	        $row,
    	        0,
            );

    	    $self->SetCellValue(
    	        $row,
    	        0,
    	        $_->{label},
    	    );	

    	    $self->SetCellValue(
    	        $row,
    	        1,
    	        $_->{value}->(),
    	    );	

    	    $self->SetReadOnly(
    	        $row,
    	        1,
    	    ) if $_->{readonly};	


    	};
    	$row++;
    }@{$self->properties};
	
}

sub OnCellChanged {
    my ( $self, $event ) = @_;

    my( $row, $col ) = ( 
        $event->GetRow,
        $event->GetCol,
    );
    
    my $value = $self->GetCellValue(
        $row,
        $col,
    );
    
    # set property
    $self->properties->[$row]->{value}->($value);

    
    # execute the corresponding frame callback
    $self->frame_callbacks->[$row]->() if defined $self->frame_callbacks->[$row];
}


1;