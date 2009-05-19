#-----------------------------------------------------------------------------
# Perl source generated by wxDesigner from file: photo_properties.wdr
# Do not modify this file, all changes will be lost!
#-----------------------------------------------------------------------------

use Wx;
use strict;

use Wx qw( wxDefaultSize wxDefaultPosition wxID_OK wxID_SAVE wxID_SAVEAS wxID_CANCEL wxID_YES wxID_EXIT wxID_ABOUT wxID_HELP );
use Wx qw( wxVERTICAL wxHORIZONTAL wxALL wxLEFT wxRIGHT wxTOP wxBOTTOM wxCENTRE wxGROW wxADJUST_MINSIZE );
use Wx qw( wxALIGN_RIGHT wxALIGN_BOTTOM wxALIGN_CENTER wxALIGN_CENTER_VERTICAL wxALIGN_CENTER_HORIZONTAL );
use Wx qw( wxLI_HORIZONTAL wxTE_MULTILINE );

# Bitmap functions

use Wx qw( wxNullBitmap wxBITMAP_TYPE_PNG );

# Window functions

use vars qw($ID_PHOTO); $ID_PHOTO = 10000;
use vars qw($ID_LINE); $ID_LINE = 10001;
use vars qw($ID_TEXT); $ID_TEXT = 10002;
use vars qw($ID_PHOTO_AUTHOR); $ID_PHOTO_AUTHOR = 10003;
use vars qw($ID_PHOTO_NAME); $ID_PHOTO_NAME = 10004;
use vars qw($ID_PHOTO_COMMENT); $ID_PHOTO_COMMENT = 10005;
use vars qw($ID_PHOTO_CREATE_DATE); $ID_PHOTO_CREATE_DATE = 10006;

sub PhotoProperties {
    my( $item0 ) = Wx::BoxSizer->new( wxVERTICAL );
    
    my( $item1 ) = Wx::FlexGridSizer->new( 0, 2, 0, 0 );
    
    $item1->AddSpace( 20, 20, 0, wxALIGN_CENTER|wxALL, 5 );

    my( $item2 ) = Wx::StaticBitmap->new( $_[0], $main::ID_PHOTO, wxNullBitmap, wxDefaultPosition, [120,120] );
    $item1->AddWindow( $item2, 0, wxALIGN_CENTER_VERTICAL|wxALL, 5 );

    $item1->AddSpace( 10, 5, 0, wxALIGN_CENTER|wxALL, 5 );

    my( $item3 ) = Wx::StaticLine->new( $_[0], $main::ID_LINE, wxDefaultPosition, [400,-1], wxLI_HORIZONTAL );
    $item1->AddWindow( $item3, 0, wxALIGN_CENTER|wxALL, 5 );

    my( $item4 ) = Wx::StaticText->new( $_[0], $main::ID_TEXT, "Author :", wxDefaultPosition, wxDefaultSize, 0 );
    $item1->AddWindow( $item4, 0, wxALIGN_CENTER_VERTICAL|wxALL, 5 );

    my( $item5 ) = Wx::TextCtrl->new( $_[0], $main::ID_PHOTO_AUTHOR, "", wxDefaultPosition, [400,-1], 0 );
    $item1->AddWindow( $item5, 0, wxALIGN_CENTER_VERTICAL|wxALL, 5 );

    my( $item6 ) = Wx::StaticText->new( $_[0], $main::ID_TEXT, "Photo name :", wxDefaultPosition, wxDefaultSize, 0 );
    $item1->AddWindow( $item6, 0, wxALIGN_CENTER_VERTICAL|wxALL, 5 );

    my( $item7 ) = Wx::TextCtrl->new( $_[0], $main::ID_PHOTO_NAME, "", wxDefaultPosition, [400,-1], 0 );
    $item1->AddWindow( $item7, 0, wxALIGN_CENTER|wxALL, 5 );

    my( $item8 ) = Wx::StaticText->new( $_[0], $main::ID_TEXT, "Comment :", wxDefaultPosition, wxDefaultSize, 0 );
    $item1->AddWindow( $item8, 0, wxALL, 5 );

    my( $item9 ) = Wx::TextCtrl->new( $_[0], $main::ID_PHOTO_COMMENT, "", wxDefaultPosition, [400,100], wxTE_MULTILINE );
    $item1->AddWindow( $item9, 0, wxALIGN_CENTER_VERTICAL|wxALL, 5 );

    my( $item10 ) = Wx::StaticText->new( $_[0], $main::ID_TEXT, "Create date :", wxDefaultPosition, wxDefaultSize, 0 );
    $item1->AddWindow( $item10, 0, wxALIGN_CENTER_VERTICAL|wxALL, 5 );

    my( $item11 ) = Wx::StaticText->new( $_[0], $main::ID_PHOTO_CREATE_DATE, "", wxDefaultPosition, [100,-1], 0 );
    $item1->AddWindow( $item11, 0, wxALIGN_CENTER_VERTICAL|wxALL, 5 );

    $item0->Add( $item1, 0, wxALIGN_CENTER_VERTICAL|wxALL, 5 );

    my( $set_size ) = @_ >= 3 ? $_[2] : 1;
    my( $call_fit ) = @_ >= 2 ? $_[1] : 1;
    if( $set_size == 1 ) {
         $_[0]->SetSizer( $item0 );
         
         if( $call_fit == 1 ) {
             $item0->SetSizeHints( $_[0] );
         }
    }
    
    $item0;
}

# Menu bar functions


# Toolbar functions


# End of generated file
