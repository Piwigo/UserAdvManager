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
package Uploader::GUI::wxImageGrid;

use strict;
use base qw(Wx::Grid);

sub new {
  my $class = shift;
  my $this = $class->SUPER::new( $_[0], -1 );

  $this->CreateGrid( 3, 7 );
  # set every cell read-only
  for my $x ( 1 .. 7 ) {
    for my $y ( 1 .. 3 ) {
      $this->SetReadOnly( $y, $x, 1 ); # rows, cols
    }
  }
$this->SetDefaultColSize(120);
$this->SetDefaultRowSize(120);


  $this->SetCellValue( 1, 5, "SoMe TeXt!" );
  $this->SetCellRenderer( 1, 5, Wx::DemoModules::wxGridCER::CustomRenderer->new );
  $this->SetReadOnly( 1, 5, 0 );

  return $this;
}

sub add_to_tags { 'controls/grid' }
sub title { 'Custom editors and renderers' }

package Wx::DemoModules::wxGridCER::CustomRenderer;

use strict;
use base 'Wx::PlGridCellRenderer';
use Wx qw/
             wxBITMAP_TYPE_JPEG
             wxBITMAP_TYPE_GIF
             wxBITMAP_TYPE_PNG
             wxBLACK_PEN 
             wxWHITE_BRUSH 
             wxSYS_DEFAULT_GUI_FONT
         /;
sub Draw {
  my( $self, $grid, $attr, $dc, $rect, $row, $col, $sel ) = ( shift, @_ );

  $self->SUPER::Draw( @_ );

  $dc->SetPen( wxBLACK_PEN );
  $dc->SetBrush( wxWHITE_BRUSH );
  $dc->SetFont(Wx::SystemSettings::GetFont(wxSYS_DEFAULT_GUI_FONT ));
#  $dc->DrawEllipse( $rect->x, $rect->y, $rect->width, $rect->height );
#  $dc->DrawText( $grid->GetCellValue( $row, $col ), $rect->x, $rect->y );
    my $img = Wx::Bitmap->new( "J:/uploader/test10066.jpg", wxBITMAP_TYPE_JPEG );
  $dc->DrawBitmap( $img, 10+$rect->x, 10+$rect->y, 0 );


}

sub Clone {
  my $self = shift;

  return $self->new;
}


1;