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
package Uploader::GUI::wxImageView;
use Wx qw/wxDefaultPosition wxDefaultSize wxLC_ICON wxIMAGE_LIST_NORMAL wxLC_LIST
                                       wxSUNKEN_BORDER wxLC_EDIT_LABELS/;
use base qw/Wx::ListCtrl/;
use strict;

sub new {
    my ( $class, $parentwnd, $images ) = @_;


    my $self = $class->SUPER::new( $parentwnd, -1, wxDefaultPosition, wxDefaultSize, wxLC_LIST|
                                       wxSUNKEN_BORDER|wxLC_EDIT_LABELS );
    $self->SetSingleStyle( wxLC_ICON );
    $self->Initialize($images);
    
    return $self;
}

sub Initialize {
    my ( $self, $images ) = @_;	

    $self->AssignImageList( $images, wxIMAGE_LIST_NORMAL );

    for( my $i = 0 ; $i < $images->GetImageCount ; $i++ ) {
        my $idx = $self->InsertStringImageItem( $i, "Item $i", $i % 5 );
        $self->SetItemData( $idx, $i );
   }
}

1;