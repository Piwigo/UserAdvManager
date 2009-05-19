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
package Uploader::GUI::wxImageListCtrl;
use strict;
use Wx;
use Wx::DND;
use Wx qw/
             wxDefaultPosition
             wxDefaultSize
             wxLC_LIST
             wxNO_BORDER
             wxLC_EDIT_LABELS
             wxLC_ICON
             wxIMAGE_LIST_NORMAL
             wxBITMAP_TYPE_JPEG
             wxBITMAP_TYPE_PNG
             wxBLACK
             wxLC_VIRTUAL
             wxLC_REPORT
             wxBORDER_THEME
             wxLIST_HITTEST_ONITEM
             wxLIST_NEXT_ALL
             wxLIST_STATE_SELECTED 
         /;
use Wx::Event qw/
                    EVT_LIST_BEGIN_DRAG
                    EVT_LIST_ITEM_SELECTED
                /;
         
use base qw/Wx::ListCtrl Class::Accessor::Fast/;
__PACKAGE__->mk_accessors( 
    qw/
          prevItemCount
          imagenames
          imagelist
      / 
);
use Data::Dumper;
sub new {
  my( $class, $params ) = @_;
  my( $self ) = $class->SUPER::new(
                                       $params->{parentwnd},
                                       -1,
                                       wxDefaultPosition,
                                       wxDefaultSize,
                                       wxNO_BORDER|
                                       wxLC_ICON|
                                       wxLC_EDIT_LABELS
                                  );

  $self->imagelist(
      $params->{imagelist}
  );

                                  
  $self->prevItemCount(-1);

  EVT_LIST_BEGIN_DRAG( $self, $self, \&OnBeginDrag);


  $self;
}

sub OnBeginDrag {
  my( $self, $event ) = @_;


  my $data = Wx::TextDataObject->new( 
      Dumper $self->GetSelectedItems 
  );
  my $source = Wx::DropSource->new( $self );
  $source->SetData( $data );

  $source->DoDragDrop( 1 );
}


sub GetSelectedItems {
    my ( $self ) = @_;	

  # find selected items
  my $item = -1;
  my $items = [];
  while(1) {
      $item = $self->GetNextItem(
          $item,      
          wxLIST_NEXT_ALL,
          wxLIST_STATE_SELECTED
      );
      last if(-1 == $item);
      
      # item is selected	
      push @$items, $item
  }
  
  $items;
}



sub Refresh {
    my ( $self, $wximagelist ) = @_;	

   $self->SetImageList( $wximagelist, wxIMAGE_LIST_NORMAL ) if defined $wximagelist ;
   $self->DeleteAllItems;
   eval {
       for( my $i = 0 ; $i < $self->GetImageList(wxIMAGE_LIST_NORMAL)->GetImageCount ; $i++){
            my $indx = $self->InsertImageStringItem(
                $i,
                $self->imagelist->images->[$i]->site_name,
                $i,
            );
       }   
   };
}



1;

