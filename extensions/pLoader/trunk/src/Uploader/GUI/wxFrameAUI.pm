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
package Uploader::GUI::wxFrameAUI;
use strict;
use Carp;
use Wx;
use Wx::DND;
use Wx qw/
             wxNullBitmap
             wxID_OK
             wxDEFAULT_FRAME_STYLE
             wxVERTICAL
             wxGROW
             wxBITMAP_TYPE_JPEG
             wxBITMAP_TYPE_GIF
             wxBITMAP_TYPE_PNG
             wxTB_FLAT
             wxSIZE
             wxWHITE
             wxBLACK
             wxID_CANCEL
             wxFD_OPEN
             wxFD_MULTIPLE
             wxLI_HORIZONTAL
             wxALIGN_CENTER_VERTICAL
             wxALL
             wxDefaultPosition
             wxDefaultSize
             wxTheApp
             wxIMAGE_LIST_NORMAL
             wxAUI_NB_TAB_MOVE
             wxAUI_NB_TAB_SPLIT
             wxNO_BORDER
             wxTE_MULTILINE
             wxTE_READONLY
             wxITEM_NORMAL 
             wxCLIP_CHILDREN
             wxBORDER_NONE
             wxNullBitmap 
             wxTR_MULTIPLE
             wxTR_EXTENDED
             wxTR_HIDE_ROOT
             wxTR_HAS_BUTTONS
             wxMAXIMIZE
             wxOK
             wxICON_EXCLAMATION
             wxICON_INFORMATION
             WXK_DELETE
             wxLANGUAGE_ABKHAZIAN   
             wxLANGUAGE_AFAR   
             wxLANGUAGE_AFRIKAANS   
             wxLANGUAGE_ALBANIAN   
             wxLANGUAGE_AMHARIC   
             wxLANGUAGE_ARABIC   
             wxLANGUAGE_ARABIC_ALGERIA   
             wxLANGUAGE_ARABIC_BAHRAIN   
             wxLANGUAGE_ARABIC_EGYPT   
             wxLANGUAGE_ARABIC_IRAQ   
             wxLANGUAGE_ARABIC_JORDAN   
             wxLANGUAGE_ARABIC_KUWAIT   
             wxLANGUAGE_ARABIC_LEBANON   
             wxLANGUAGE_ARABIC_LIBYA   
             wxLANGUAGE_ARABIC_MOROCCO   
             wxLANGUAGE_ARABIC_OMAN   
             wxLANGUAGE_ARABIC_QATAR   
             wxLANGUAGE_ARABIC_SAUDI_ARABIA   
             wxLANGUAGE_ARABIC_SUDAN   
             wxLANGUAGE_ARABIC_SYRIA   
             wxLANGUAGE_ARABIC_TUNISIA   
             wxLANGUAGE_ARABIC_UAE   
             wxLANGUAGE_ARABIC_YEMEN   
             wxLANGUAGE_ARMENIAN   
             wxLANGUAGE_ASSAMESE   
             wxLANGUAGE_AYMARA   
             wxLANGUAGE_AZERI   
             wxLANGUAGE_AZERI_CYRILLIC   
             wxLANGUAGE_AZERI_LATIN   
             wxLANGUAGE_BASHKIR   
             wxLANGUAGE_BASQUE   
             wxLANGUAGE_BELARUSIAN   
             wxLANGUAGE_BENGALI   
             wxLANGUAGE_BHUTANI   
             wxLANGUAGE_BIHARI   
             wxLANGUAGE_BISLAMA   
             wxLANGUAGE_BRETON   
             wxLANGUAGE_BULGARIAN   
             wxLANGUAGE_BURMESE   
             wxLANGUAGE_CAMBODIAN   
             wxLANGUAGE_CATALAN   
             wxLANGUAGE_CHINESE   
             wxLANGUAGE_CHINESE_SIMPLIFIED   
             wxLANGUAGE_CHINESE_TRADITIONAL   
             wxLANGUAGE_CHINESE_HONGKONG   
             wxLANGUAGE_CHINESE_MACAU   
             wxLANGUAGE_CHINESE_SINGAPORE   
             wxLANGUAGE_CHINESE_TAIWAN   
             wxLANGUAGE_CORSICAN   
             wxLANGUAGE_CROATIAN   
             wxLANGUAGE_CZECH   
             wxLANGUAGE_DANISH   
             wxLANGUAGE_DUTCH   
             wxLANGUAGE_DUTCH_BELGIAN   
             wxLANGUAGE_ENGLISH   
             wxLANGUAGE_ENGLISH_UK   
             wxLANGUAGE_ENGLISH_US   
             wxLANGUAGE_ENGLISH_AUSTRALIA   
             wxLANGUAGE_ENGLISH_BELIZE   
             wxLANGUAGE_ENGLISH_BOTSWANA   
             wxLANGUAGE_ENGLISH_CANADA   
             wxLANGUAGE_ENGLISH_CARIBBEAN   
             wxLANGUAGE_ENGLISH_DENMARK   
             wxLANGUAGE_ENGLISH_EIRE   
             wxLANGUAGE_ENGLISH_JAMAICA   
             wxLANGUAGE_ENGLISH_NEW_ZEALAND   
             wxLANGUAGE_ENGLISH_PHILIPPINES   
             wxLANGUAGE_ENGLISH_SOUTH_AFRICA   
             wxLANGUAGE_ENGLISH_TRINIDAD   
             wxLANGUAGE_ENGLISH_ZIMBABWE   
             wxLANGUAGE_ESPERANTO   
             wxLANGUAGE_ESTONIAN   
             wxLANGUAGE_FAEROESE   
             wxLANGUAGE_FARSI   
             wxLANGUAGE_FIJI   
             wxLANGUAGE_FINNISH   
             wxLANGUAGE_FRENCH   
             wxLANGUAGE_FRENCH_BELGIAN   
             wxLANGUAGE_FRENCH_CANADIAN   
             wxLANGUAGE_FRENCH_LUXEMBOURG   
             wxLANGUAGE_FRENCH_MONACO   
             wxLANGUAGE_FRENCH_SWISS   
             wxLANGUAGE_FRISIAN   
             wxLANGUAGE_GALICIAN   
             wxLANGUAGE_GEORGIAN   
             wxLANGUAGE_GERMAN   
             wxLANGUAGE_GERMAN_AUSTRIAN   
             wxLANGUAGE_GERMAN_BELGIUM   
             wxLANGUAGE_GERMAN_LIECHTENSTEIN   
             wxLANGUAGE_GERMAN_LUXEMBOURG   
             wxLANGUAGE_GERMAN_SWISS   
             wxLANGUAGE_GREEK   
             wxLANGUAGE_GREENLANDIC   
             wxLANGUAGE_GUARANI   
             wxLANGUAGE_GUJARATI   
             wxLANGUAGE_HAUSA   
             wxLANGUAGE_HEBREW   
             wxLANGUAGE_HINDI   
             wxLANGUAGE_HUNGARIAN   
             wxLANGUAGE_ICELANDIC   
             wxLANGUAGE_INDONESIAN   
             wxLANGUAGE_INTERLINGUA   
             wxLANGUAGE_INTERLINGUE   
             wxLANGUAGE_INUKTITUT   
             wxLANGUAGE_INUPIAK   
             wxLANGUAGE_IRISH   
             wxLANGUAGE_ITALIAN   
             wxLANGUAGE_ITALIAN_SWISS   
             wxLANGUAGE_JAPANESE   
             wxLANGUAGE_JAVANESE   
             wxLANGUAGE_KANNADA   
             wxLANGUAGE_KASHMIRI   
             wxLANGUAGE_KASHMIRI_INDIA   
             wxLANGUAGE_KAZAKH   
             wxLANGUAGE_KERNEWEK   
             wxLANGUAGE_KINYARWANDA   
             wxLANGUAGE_KIRGHIZ   
             wxLANGUAGE_KIRUNDI   
             wxLANGUAGE_KONKANI   
             wxLANGUAGE_KOREAN   
             wxLANGUAGE_KURDISH   
             wxLANGUAGE_LAOTHIAN   
             wxLANGUAGE_LATIN   
             wxLANGUAGE_LATVIAN   
             wxLANGUAGE_LINGALA   
             wxLANGUAGE_LITHUANIAN   
             wxLANGUAGE_MACEDONIAN   
             wxLANGUAGE_MALAGASY   
             wxLANGUAGE_MALAY   
             wxLANGUAGE_MALAYALAM   
             wxLANGUAGE_MALAY_BRUNEI_DARUSSALAM   
             wxLANGUAGE_MALAY_MALAYSIA   
             wxLANGUAGE_MALTESE   
             wxLANGUAGE_MANIPURI   
             wxLANGUAGE_MAORI   
             wxLANGUAGE_MARATHI   
             wxLANGUAGE_MOLDAVIAN   
             wxLANGUAGE_MONGOLIAN   
             wxLANGUAGE_NAURU   
             wxLANGUAGE_NEPALI   
             wxLANGUAGE_NEPALI_INDIA   
             wxLANGUAGE_NORWEGIAN_BOKMAL   
             wxLANGUAGE_NORWEGIAN_NYNORSK   
             wxLANGUAGE_OCCITAN   
             wxLANGUAGE_ORIYA   
             wxLANGUAGE_OROMO   
             wxLANGUAGE_PASHTO   
             wxLANGUAGE_POLISH   
             wxLANGUAGE_PORTUGUESE   
             wxLANGUAGE_PORTUGUESE_BRAZILIAN   
             wxLANGUAGE_PUNJABI   
             wxLANGUAGE_QUECHUA   
             wxLANGUAGE_RHAETO_ROMANCE   
             wxLANGUAGE_ROMANIAN   
             wxLANGUAGE_RUSSIAN   
             wxLANGUAGE_RUSSIAN_UKRAINE   
             wxLANGUAGE_SAMI   
             wxLANGUAGE_SAMOAN   
             wxLANGUAGE_SANGHO   
             wxLANGUAGE_SANSKRIT   
             wxLANGUAGE_SCOTS_GAELIC   
             wxLANGUAGE_SERBIAN   
             wxLANGUAGE_SERBIAN_CYRILLIC   
             wxLANGUAGE_SERBIAN_LATIN   
             wxLANGUAGE_SERBO_CROATIAN   
             wxLANGUAGE_SESOTHO   
             wxLANGUAGE_SETSWANA   
             wxLANGUAGE_SHONA   
             wxLANGUAGE_SINDHI   
             wxLANGUAGE_SINHALESE   
             wxLANGUAGE_SISWATI   
             wxLANGUAGE_SLOVAK   
             wxLANGUAGE_SLOVENIAN   
             wxLANGUAGE_SOMALI   
             wxLANGUAGE_SPANISH   
             wxLANGUAGE_SPANISH_ARGENTINA   
             wxLANGUAGE_SPANISH_BOLIVIA   
             wxLANGUAGE_SPANISH_CHILE   
             wxLANGUAGE_SPANISH_COLOMBIA   
             wxLANGUAGE_SPANISH_COSTA_RICA   
             wxLANGUAGE_SPANISH_DOMINICAN_REPUBLIC   
             wxLANGUAGE_SPANISH_ECUADOR   
             wxLANGUAGE_SPANISH_EL_SALVADOR   
             wxLANGUAGE_SPANISH_GUATEMALA   
             wxLANGUAGE_SPANISH_HONDURAS   
             wxLANGUAGE_SPANISH_MEXICAN   
             wxLANGUAGE_SPANISH_MODERN   
             wxLANGUAGE_SPANISH_NICARAGUA   
             wxLANGUAGE_SPANISH_PANAMA   
             wxLANGUAGE_SPANISH_PARAGUAY   
             wxLANGUAGE_SPANISH_PERU   
             wxLANGUAGE_SPANISH_PUERTO_RICO   
             wxLANGUAGE_SPANISH_URUGUAY   
             wxLANGUAGE_SPANISH_US   
             wxLANGUAGE_SPANISH_VENEZUELA   
             wxLANGUAGE_SUNDANESE   
             wxLANGUAGE_SWAHILI   
             wxLANGUAGE_SWEDISH   
             wxLANGUAGE_SWEDISH_FINLAND   
             wxLANGUAGE_TAGALOG   
             wxLANGUAGE_TAJIK   
             wxLANGUAGE_TAMIL   
             wxLANGUAGE_TATAR   
             wxLANGUAGE_TELUGU   
             wxLANGUAGE_THAI   
             wxLANGUAGE_TIBETAN   
             wxLANGUAGE_TIGRINYA   
             wxLANGUAGE_TONGA   
             wxLANGUAGE_TSONGA   
             wxLANGUAGE_TURKISH   
             wxLANGUAGE_TURKMEN   
             wxLANGUAGE_TWI   
             wxLANGUAGE_UIGHUR   
             wxLANGUAGE_UKRAINIAN   
             wxLANGUAGE_URDU   
             wxLANGUAGE_URDU_INDIA   
             wxLANGUAGE_URDU_PAKISTAN   
             wxLANGUAGE_UZBEK   
             wxLANGUAGE_UZBEK_CYRILLIC   
             wxLANGUAGE_UZBEK_LATIN   
             wxLANGUAGE_VALENCIAN   
             wxLANGUAGE_VIETNAMESE   
             wxLANGUAGE_VOLAPUK   
             wxLANGUAGE_WELSH   
             wxLANGUAGE_WOLOF   
             wxLANGUAGE_XHOSA   
             wxLANGUAGE_YIDDISH   
             wxLANGUAGE_YORUBA   
             wxLANGUAGE_ZHUANG   
             wxLANGUAGE_ZULU  
         /;
use base qw/Wx::Frame Class::Accessor::Fast/;
use File::Spec;
use Wx::Locale qw/:default/;
use Encode qw/encode decode is_utf8/;;


my @properties = 
    qw/
          progressdlg
          upload_progressdlg
          imageviewer
          tree
          tree_root
          treeimglist
          tree_item_default
          topsizer
          pwg
          manager
          logwnd
          oldlogwnd
          htmlhome
          notebook
          categories
          imagelist
          image_preview
          image_prop_piwigo
          image_prop_exif
          notebook_image_properties
          notebook_global_settings
          general_settings_panel
          resized_settings_panel
          thumbnail_settings_panel
          preview_settings_panel
          piwigo_properties
          exif_properties
          general_settings
          resized_settings
          thumbnail_settings
          preview_settings
          toolbar
          branding
          preview_w
          preview_h
          perspective
      /;
__PACKAGE__->mk_accessors( @properties );

use Wx::Event 
    qw/
          EVT_MENU
          EVT_TREE_SEL_CHANGED
          EVT_CLOSE 
          EVT_LIST_END_LABEL_EDIT
          EVT_LIST_ITEM_SELECTED
          EVT_LIST_ITEM_ACTIVATED
          EVT_TREE_ITEM_RIGHT_CLICK
          EVT_LIST_KEY_DOWN
          EVT_UPDATE_UI       
      /;
      
use Uploader::GUI::wxImageListCtrl;
use Uploader::GUI::wxImageProcessingProgressDlg;
use Wx::Html;
use Uploader::GUI::wxHtmlWindow;
use Data::Dumper;
use Wx::AUI;
use Storable;
use Uploader::GUI::wxPropertyGridPanel;
use Encode qw/encode decode is_utf8/;

$|=1;

my $ID_TREE_CTX_MENU = 20000 ;

sub new {
  my( $class, $params ) = @_;
  my( $self ) = $class->SUPER::new( 
                                      undef, 
                                      -1, 
                                      $params->{title}, 
                                      [ $params->{x}, $params->{y} ],
                                      [ $params->{width}, $params->{height} ],
                                      wxDEFAULT_FRAME_STYLE|wxMAXIMIZE
                                   );
    $self->preview_w(
        $params->{preview_w}||400
    );

    $self->preview_h(
        $params->{preview_h}||300
    );
    
    $self->perspective(
        $params->{perspective}
    );

    $self->pwg( $params->{pwg} );
    $self->imagelist( $params->{imagelist} );

    # callback for GUI refresh : add thumbnail images to the imageviewer control
    $self->imagelist->SetNewFilesViewerRefreshCallback(
        sub { $self->SetNewFilesViewerRefresh(@_) }
    );

    # callback for GUI refresh : progress dialog display of thumbnail image being created
    $self->imagelist->SetNewFilesProgressCallback(
        sub { $self->SetNewFilesProgress(@_) }
    );

    $self->imagelist->SetNewFilesDisplayEndInfoCallback(
        sub { $self->SetNewFilesDisplayEndInfo(@_) }
    );


    # callback for GUI refresh : remove thumbnail images from imageviewer control
    $self->imagelist->UploadImagesViewerCallback(
        sub { $self->UploadImagesViewerRefresh(@_) }
    );



    # callback for GUI refresh : progress dialog display current uploaded image
    $self->imagelist->progress_thumbnail_refresh(
        sub { $self->UploadProgressThumbnailRefresh(@_) }
    );

    $self->imagelist->progress_msg_refresh(
        sub { $self->UploadProgressMessageRefresh(@_) }
    );


    $self->imagelist->progressbar_refresh(
        sub { $self->UploadProgressBarRefresh(@_) }
    );
    
    $self->imagelist->progress_endinfo_refresh(
        sub { $self->UploadDisplayEndInfo(@_) }
    );


    $self->imagelist->pwg(
        $self->pwg
    );

    $self->imagelist->categories(
        []
    );


    $self->manager( Wx::AuiManager->new );
    $self->manager->SetDockSizeConstraint(1, 1);
    $self->manager->SetManagedWindow( $self );
    $self->_set_setting_properties;
    $self->_initFrame;
    $self->_InitEventHandlers;
    $self->_initImgTypes;   
   
    $self;
}


sub _initImgTypes {
    my ( $self ) = @_;

    $self->{IMGTYPE} = {
             'jpg' => wxBITMAP_TYPE_JPEG,
             'gif' => wxBITMAP_TYPE_GIF,
             'png' => wxBITMAP_TYPE_PNG,
    };
}


sub GetWxBitmapType {
    my ( $self, $type ) = @_;
    
    $self->{IMGTYPE}->{$type};
}



sub _set_setting_properties {
    my ( $self ) = @_;

    $self->piwigo_properties(
        [
            {
                label => gettext("Photo caption :"),
                value => sub { $self->imagelist->current_image->site_name(@_) },
            },
            {
                label => gettext("Comment :"),
                value => sub { $self->imagelist->current_image->site_comment(@_) },
                type  => "LongText",
            },
            {
                label => gettext("Author :"),
                value => sub { $self->imagelist->current_image->site_author(@_) },
            },
            {
                label    => gettext("File name :"),
                value    => sub { $self->imagelist->current_image->file(@_) },
                readonly => 1,
            },
            {
                label    => gettext("Create date :"),
                value    => sub { $self->imagelist->current_image->create_date(@_) },
                readonly => 1,
            },
        ]    
    );

    $self->exif_properties(
        [
            {
                label    => gettext("Create date :"),
                value    => sub { $self->imagelist->current_image->create_date }, 
                readonly => 1,
            },	
            {
                label    => gettext("Model :"),
                value    => sub { $self->imagelist->current_image->exif_tag('Model') }, 
                readonly => 1,
            },	
            {
                label    => gettext("Width :"),
                value    => sub { $self->imagelist->current_image->exif_tag('ImageWidth') }, 
                readonly => 1,
            },	
            {
                label    => gettext("Height :"),
                value    => sub { $self->imagelist->current_image->exif_tag('ImageHeight') }, 
                readonly => 1,
            },	
            {
                label    => gettext("Orientation :"),
                value    => sub { $self->imagelist->current_image->exif_tag('Orientation') }, 
                readonly => 1,
            },	
            {
                label    => "ISO :",
                value    => sub { $self->imagelist->current_image->exif_tag('ISO') }, 
                readonly => 1,
            },	
            {
                label    => gettext("Shutter speed :"),
                value    => sub { $self->imagelist->current_image->exif_tag('ExposureTime') }, 
                readonly => 1,
            },	
            {
                label    => gettext("Aperture :"),
                value    => sub { $self->imagelist->current_image->exif_tag('ApertureValue') }, 
                readonly => 1,
            },	
            {
                label    => gettext("Focal length :"),
                value    => sub { $self->imagelist->current_image->exif_tag('FocalLength') }, 
                readonly => 1,
            },	
            {
                label    => gettext("Lens :"),
                value    => sub { $self->imagelist->current_image->exif_tag('Lens') }, 
                readonly => 1,
            },	
        ]
    );   

    $self->general_settings(
        [
            {
                label     => gettext("Default author :"),
                value	=> sub { $self->imagelist->author(@_) },
            },
            {
                label     => gettext("Default photo caption :"),
                type      => 'Choice',
                value	=> sub { $self->imagelist->default_photo_name(@_) },
                choice  => [
                                  gettext('None'),
                                  gettext('File name'),
                                  gettext('File path and name'),
                                  gettext('Prefix'),
                                  gettext('Prefix + rank number'),
                                  gettext('Rank number + prefix'),
                                  gettext('Prefix + create date chrono'),
                                  gettext('Create date chrono + prefix'),
                              ],
            },
            {
                label     => gettext("Photo caption  prefix :"),
                value	=> sub { $self->imagelist->default_name_prefix(@_) },
            },
            {
                label     => gettext("Resize site image :"),
                type      => 'Bool',
                value	=> sub { $self->imagelist->create_resized(@_) },
            },
            {
                label     => gettext("Auto rotate image :"),
                type      => 'Bool',
                value	=> sub { $self->imagelist->auto_rotate(@_) },
            },
            {
                label     => gettext("Upload high (original size) :"),
                type      => 'Bool',
                value	=> sub { $self->imagelist->upload_high(@_) },
            },
#            {
#                label     => gettext("Remove uploaded photo from selection :"),
#                type      => 'Bool',
#                value	=> sub { $self->imagelist->remove_uploaded_from_selection(@_) },
#            },
        ]    
    );
    
    $self->resized_settings(
        [
            {
                label     => gettext("Site image width :"),
                type      => 'Number',
                value	=> sub { $self->imagelist->resize_w(@_) },
            },
            {
                label     => gettext("Site image height :"),
                type      => 'Number',
                value	=> sub { $self->imagelist->resize_h(@_) },
            },
            {
                label     => gettext("Site image jpeg quality :"),
                type      => 'Number',
                value	=> sub { $self->imagelist->quality(@_) },
            },
            {
                label     => gettext("Site image filter :"),
                type      => 'Choice',
                value	=> sub { $self->imagelist->filter(@_) },
                choice    => [ qw/Point Box Triangle Hermite Hanning Hamming Blackman Gaussian Quadratic Cubic Catrom Mitchell Lanczos Bessel Sinc/ ],
            },
            {
                label     => gettext("Site image blur :"),
                type      => 'Number',
                value	=> sub { $self->imagelist->blur(@_) },
            },
            {
                label     => gettext("Site image interlace :"),
                type      => 'Choice',
                value	=> sub { $self->imagelist->interlace(@_) },
                choice    => [ qw/None Line Plane Partition JPEG GIF PNG/ ],
            },
        ]    
    );

    $self->thumbnail_settings(
        [
            {
                label     => gettext("Site thumbnail size :"),
                type      => 'Number',
                value	=> sub { $self->imagelist->thumb_size(@_) },
            },
            {
                label     => gettext("Site thumbnail jpeg quality :"),
                type      => 'Number',
                value	=> sub { $self->imagelist->th_quality(@_) },
            },
            {
                label     => gettext("Photo selection thumbnail size :"),
                type      => 'Number',
                value	=> sub { $self->imagelist->wx_thumb_size(@_) },
            },
            {
                label     => gettext("Photo selection thumbnail jpeg quality :"),
                type      => 'Number',
                value	=> sub { $self->imagelist->wx_quality(@_) },
            },
        ]    
    );
    
    $self->preview_settings(
        [
            {
                label     => gettext("Use exif preview when available :"),
                type      => 'Bool',
                value	=> sub { $self->imagelist->use_exif_preview(@_) },
            },
            {
                label     => gettext("Custom preview ratio :"),
                type      => 'Number',
                value	=> sub { $self->imagelist->preview_ratio(@_) },
            },
        ]    
    );
	
}

sub _refreshFrame {
    my ( $self ) = @_;
    
    $self->_set_setting_properties;
    $self->_refresh_settings_panels_properties;
    map {
        $_->Refresh;	
    }
    (
        $self->image_prop_piwigo,
        $self->image_prop_exif,
        $self->general_settings_panel,
        $self->resized_settings_panel,
        $self->thumbnail_settings_panel,
        $self->preview_settings_panel,
    );
    
    $self->manager->Update;
}


sub _destroy_settings_panels {
    my ( $self ) = @_;



    map {
        $self->manager->DetachPane(
            $_
        );
        $_->Show(0);
        $_->Destroy;
    }(
        $self->notebook_global_settings,
        $self->notebook_image_properties,
    );
}

# 
sub _initFrame {
    my ( $self ) = @_;
    
 
    $self->init_panels;

    $self->imageviewer->Show(0);

    $self->init_aui;
    $self->init_dnd_targets;
    if( $self->imagelist->wx_thumb_imglist->GetImageCount){
        printf("%s images\n", $self->imagelist->wx_thumb_imglist->GetImageCount); 
    	$self->ShowImageViewer;
        
        $self->imageviewer->Refresh(
            $self->imagelist->wx_thumb_imglist
        );
    }

}

sub _refresh_settings_panels_properties {
    my ( $self ) = @_;	

    $self->image_prop_piwigo->properties(
        $self->piwigo_properties
    );
    
    $self->image_prop_exif->properties(
        $self->exif_properties
    );


    $self->general_settings_panel->properties(
        $self->general_settings
    );    

    $self->resized_settings_panel->properties(
        $self->resized_settings
    );    

    $self->thumbnail_settings_panel->properties(
        $self->thumbnail_settings,
    );    

    $self->preview_settings_panel->properties(
        $self->preview_settings,
    );    
	
}

sub _init_settings_panels {
    my ( $self ) = @_;	

    $self->image_prop_piwigo(
        Uploader::GUI::wxPropertyGridPanel->new( 
            { 
                parentwnd       => $self,
                properties      => $self->piwigo_properties,
                frame_callbacks => [ 
                                          sub {
                                              $self->imageviewer->Refresh();
                                          },
                	           ],
            }
        )
    );

    $self->image_prop_exif(
        Uploader::GUI::wxPropertyGridPanel->new( 
            { 
                parentwnd       => $self,
                frame_callbacks => [],
                properties      => $self->exif_properties,
            }
        )
    );


    $self->general_settings_panel(
        Uploader::GUI::wxPropertyGridPanel->new( 
            { 
                parentwnd       => $self,
                properties      => $self->general_settings,
                frame_callbacks => [], 
            }
        )
    );    

    $self->resized_settings_panel(
        Uploader::GUI::wxPropertyGridPanel->new( 
            { 
                parentwnd       => $self,
                properties      => $self->resized_settings,
                frame_callbacks => [],

            }
        )    
    );    

    $self->thumbnail_settings_panel(
        Uploader::GUI::wxPropertyGridPanel->new( 
            { 
                parentwnd       => $self,
                properties      => $self->thumbnail_settings,
                frame_callbacks => [],

            }
        )    
    );    
    $self->preview_settings_panel(
        Uploader::GUI::wxPropertyGridPanel->new( 
            { 
                parentwnd       => $self,
                properties      => $self->preview_settings,
                frame_callbacks => [],

            }
        )    
    );    
    
    $self->general_settings_panel->Show(0);

    $self->image_preview(
        Wx::StaticBitmap->new(
            $self,
            -1,
            wxNullBitmap,
            wxDefaultPosition,
            [$self->preview_w, $self->preview_h]
        )
    );

    $self->image_prop_piwigo->Show(0);
    
    $self->image_prop_exif->Show(0);
	
}

sub init_panels {
    my ( $self ) = @_;	

    $self->htmlhome(
        Uploader::GUI::wxHtmlWindow->new(
            $self, -1
        )
    );
    
    $self->imageviewer(
        Uploader::GUI::wxImageListCtrl->new( 
            { 
                parentwnd => $self,
                imagelist => $self->imagelist,
            }
        )
    );
    
    $self->_init_settings_panels;	
}

sub init_dnd_targets {
    my ( $self ) = @_;	

    $self->imageviewer->SetDropTarget( 
        DNDImageListDropTarget->new(
            $self->imageviewer 
        ) 
    );
    $self->htmlhome->SetDropTarget( 
        DNDImageListDropTarget->new( 
            $self->imageviewer 
        ) 
    );


    $self->tree->SetDropTarget( 
        DNDCategoryTreeDropTarget->new(
            $self->tree
        )
    );
	
}

sub init_aui {
    my ( $self ) = @_;

    my $url = wxTheApp->site_url;
    
    $url = gettext("empty - work Offline") if wxTheApp->use_offline;

    $self->manager->AddPane
      ( $self->create_notebook_imagelist, Wx::AuiPaneInfo->new->Name( "ImageViewer" )
        ->CenterPane->Resizable->CloseButton(0) );

    $self->manager->AddPane
      ( $self->create_tree, Wx::AuiPaneInfo->new->Name( "categories" )
        ->Right->Position( 0 )->Resizable->CloseButton(0) );

    $self->manager->AddPane
      ( $self->image_preview, Wx::AuiPaneInfo->new->Name( "preview" )
        ->Right->Position( 1 )->Resizable->CloseButton(0)->Floatable(0) );


    $self->_init_aui_settings_panels;

    $self->toolbar(
        $self->create_toolbar
    );

    $self->manager->AddPane
      ( $self->toolbar, Wx::AuiPaneInfo->new->Name( "tb1" )
        ->ToolbarPane->Top->Row( 1 )->LeftDockable( 0 )->RightDockable( 0 ) ) if defined $self->toolbar;

    if( $self->perspective){
        $self->manager->LoadPerspective($self->perspective);
    }

    $self->manager->GetPane("categories")->Caption(
          sprintf("%s - %s", sprintf("Piwigo %s", wxTheApp->branding->{categories}), $url )
      );

    $self->manager->GetPane("preview")->Caption(gettext("Preview"));
    $self->manager->GetPane("tb1")->Caption( gettext("Tools") );
    $self->manager->GetPane("photo_properties")->Caption(gettext("Photo properties"));
    $self->manager->GetPane("global_settings")->Caption(gettext("Global settings"));

    
    $self->manager->Update;

}

sub _init_aui_settings_panels {
    my ( $self ) = @_;	

    $self->manager->AddPane
      ( $self->create_notebook_image_properties, Wx::AuiPaneInfo->new->Name( "photo_properties" )
        ->Floatable(1)->Resizable->CloseButton(1) );

    $self->manager->AddPane
      ( $self->create_notebook_global_settings, Wx::AuiPaneInfo->new->Name( "global_settings" )
        ->Floatable(1)->Resizable->CloseButton(1) );

    $self->manager->GetPane("photo_properties")->Show(0);
    $self->manager->GetPane("global_settings")->Show(0);
	
}

sub OnPhotoProperties {
    my ( $self ) = @_;

    $self->manager->GetPane("photo_properties")->Float;
    $self->manager->GetPane("photo_properties")->Show(1);
    $self->manager->Update();    
	
}

sub OnGlobalSettings {
    my ( $self ) = @_;

    $self->toolbar->EnableTool(104, 0 );
    $self->manager->GetPane("global_settings")->Float;
    $self->manager->GetPane("global_settings")->Show(1);
    $self->manager->Update();    
}

sub OnChooseLanguage {
    my ( $self ) = @_;	

  my $languages = [
             ['Dutch', wxLANGUAGE_DUTCH, ],   
             ['English', wxLANGUAGE_ENGLISH, ],   
             ['French', wxLANGUAGE_FRENCH, ],   
             ['German', wxLANGUAGE_GERMAN, ],   
             ['Italian', wxLANGUAGE_ITALIAN, ],   
             ['Polish', wxLANGUAGE_POLISH, ],   
             ['Portuguese', wxLANGUAGE_PORTUGUESE, ],   
             ['Russian', wxLANGUAGE_RUSSIAN, ],   
             ['Spanish', wxLANGUAGE_SPANISH, ],   
  ];

  my $dialog = new Wx::SingleChoiceDialog
    ( undef, gettext( "Choose a language" ), gettext( "Choose a language" ),
      [ map { Wx::GetTranslation( ${$_}[0] ) } @$languages ] );

  if( $dialog->ShowModal() == wxID_OK ) {
    wxTheApp->current_language(
        $languages->[$dialog->GetSelection][1]
    );
    wxTheApp->init_locale();
    $self->_refreshFrame;
  }

  $dialog->Destroy;

}


sub create_notebook_imagelist {
    my( $self ) = @_;
    my $book = Wx::AuiNotebook->new( $self, -1, [-1, -1], [300, 450],
                                     wxBORDER_NONE|wxAUI_NB_TAB_MOVE|wxAUI_NB_TAB_SPLIT);
    my $pages = [    
        [
            $self->htmlhome, 
            gettext("Photo selection"),
            '../res/images.png', 
            wxBITMAP_TYPE_PNG,
        ],
        #[
        #    $self->logwnd( $self->_create_textctrl( $book, undef, [450, 450] )),
        #    "Log",
        #    '../res/nb_log.png', 
        #    wxBITMAP_TYPE_PNG,
        #]
    ];
    
    $self->_populate_notebook( $book, $pages );

    #$self->logwnd(Wx::LogTextCtrl->new( $self->logwnd ));
    #$self->oldlogwnd( Wx::Log::SetActiveTarget( $self->logwnd ) );
    $self->notebook($book);
    return $book;
}

sub create_notebook_image_properties {
    my( $self ) = @_;
    my $book = Wx::AuiNotebook->new( $self, -1, [-1, -1], [450, 450],
                                     wxBORDER_NONE|wxAUI_NB_TAB_MOVE|wxAUI_NB_TAB_SPLIT);
    my $pages = [    
        [
            $self->image_prop_piwigo, 
            "Piwigo",
        ],
        [
            $self->image_prop_exif, 
            "Exif",
        ],
    ];
    
    $self->_populate_notebook( $book, $pages );

    $self->notebook_image_properties($book);

    return $book;
}

sub create_notebook_global_settings {
    my( $self ) = @_;
    my $book = Wx::AuiNotebook->new( $self, -1, [-1, -1], [450, 450],
                                     wxBORDER_NONE|wxAUI_NB_TAB_MOVE|wxAUI_NB_TAB_SPLIT);
    my $pages = [    
        [
            $self->general_settings_panel, 
            gettext("General"),
        ],
        [
            $self->resized_settings_panel, 
            gettext("Resized"),
        ],
        [
            $self->thumbnail_settings_panel, 
            gettext("Thumbnail"),
        ],
        [
            $self->preview_settings_panel, 
            gettext("Preview"),
        ],
    ];
    
    $self->_populate_notebook( $book, $pages );

    $self->notebook_global_settings($book);

    return $book;
}




sub create_tree {
    my ( $self ) = @_;

    my $images = [
        map {
            Wx::Bitmap->new( $_, wxBITMAP_TYPE_PNG )
        	
        }
        (
          '../res/tree_pwg.png',
          '../res/tree_folder.png',
        )    
    ];

    $self->treeimglist( Wx::ImageList->new( 16, 16, 1 ) );
    map {
    	$self->treeimglist->Add($_);
    }
    @$images;

    
    $self->tree( 
        Wx::TreeCtrl->new( 
           $self, 
           -1, 
           wxDefaultPosition, 
           wxDefaultSize, 
           wxBORDER_NONE|
           wxCLIP_CHILDREN|
#           wxTR_MULTIPLE|
#           wxTR_EXTENDED|
           wxTR_HAS_BUTTONS
#           wxTR_HIDE_ROOT   
        ) 
    );

    $self->tree->SetImageList( $self->treeimglist );
    $self->populate_tree_categories if !wxTheApp->use_offline;
    $self->tree ;
}


sub populate_tree_categories {
    my ( $self ) = @_;

    $self->populate_tree(
        $self->tree,
        wxTheApp->pwg->categories,
    ) if defined wxTheApp->pwg ;
    
    $self->tree->ExpandAll;

}


# returns a valid itemData
sub itemData { Wx::TreeItemData->new( $_[0] ) }

sub populate_tree {
    my ( $self, $tree, $tree_items ) = @_;
    my $root = shift @{$tree_items};
    $self->tree_root(
        $tree->AddRoot( 
            $root->[0], 
            $root->[3], 
            $root->[4], 
            itemData( $root->[2] ) 
        )
    );

  $self->populate_tree_helper( $tree, $self->tree_root, $tree_items );

  $tree->Expand( $self->tree_root );
}

sub populate_tree_helper {
  my ( $self, $tree, $parent_id, $tree_items ) = @_;

  my $id;

  map {
      my $name = $_->[0];
      eval {
      	$name = is_utf8($name) ?  decode('UTF-8', $name) : $name;
      };
      if($@){
          $name = $_->[0];
      }
       $id = $tree->AppendItem( 
                                   $parent_id, 
                                   $name,
                                   defined($_->[3]) ? $_->[3] : 0, 
                                   defined($_->[4]) ? $_->[4] : 0, 
                                   itemData( $_->[2]) 
                              );
      $self->tree_item_default($id) if ! defined $self->tree_item_default;
      # current item has children
      if( ref( $_->[1] ) eq 'ARRAY' ) {
          $self->populate_tree_helper( $tree, $id, $_->[1] );
      } 
  }
  @{$tree_items};

}




sub _populate_notebook {
    my ( $self, $book, $pages, $position ) = @_;	

    my $i = 0;
    map {
        my $icon = Wx::Icon->new();
        eval { $icon->LoadFile($_->[2], $_->[3]) ; }
            if defined $_->[2];
        my $nb_icon = Wx::Bitmap->new( $icon );
        defined $position ?
            $book->InsertPage($position, $_->[0],
                    $_->[1], 1, $nb_icon )
                          :
            $book->AddPage($_->[0],
                    $_->[1], 0, $nb_icon );

        $i++;
    } @$pages;

}



sub _InitEventHandlers {
    my ( $self ) = @_ ;
	
    Wx::Event::EVT_MENU( $self, 101, \&OnAddImages );
    Wx::Event::EVT_MENU( $self, 102, \&OnRemoveImages );
    Wx::Event::EVT_MENU( $self, 103, \&OnUploadImages );
    Wx::Event::EVT_MENU( $self, 104, \&OnGlobalSettings );
    Wx::Event::EVT_MENU( $self, 105, \&OnChooseLanguage );
    EVT_TREE_SEL_CHANGED( $self, $self->tree, \&OnTreeSelChanged );
    EVT_TREE_ITEM_RIGHT_CLICK( $self->tree, $self->tree, \&OnTreeItemRightClick );
    EVT_LIST_END_LABEL_EDIT( $self, $self->imageviewer, \&OnImageViewerEndLabelEdit );
    EVT_LIST_ITEM_ACTIVATED( $self, $self->imageviewer, \&OnImageViewerItemActivated );
    EVT_LIST_ITEM_SELECTED($self, $self->imageviewer, \&OnImageViewerItemSelected) ;
    EVT_LIST_KEY_DOWN($self, $self->imageviewer, \&OnImageViewerKeyDown) ;
    EVT_CLOSE( $self, \&OnClose );
    Wx::Event::EVT_UPDATE_UI( $self, $self, \&OnUpdateUI );


    Wx::Event::EVT_MENU( $self, 1+$ID_TREE_CTX_MENU, \&OnAddCategories );
    Wx::Event::EVT_MENU( $self, 2+$ID_TREE_CTX_MENU, \&OnRefreshCategories );
}

{
  my $prevdir;
  my $prevfile;

  sub OnAddImages {
    my( $self, $event ) = @_;
    my $dialog = Wx::FileDialog->new
      ( $self, gettext("Select photos for upload"), $prevfile, $prevdir,
        sprintf("%s (*.jpg)|*.jpg|All(*.*)|*.*", gettext("JPEG files")),
        wxFD_OPEN|wxFD_MULTIPLE );

    my $file_paths = [];
    if( $dialog->ShowModal != wxID_CANCEL ) {
        @$file_paths = $dialog->GetPaths;
        $self->SetNewFiles($file_paths) ;
    }
    $dialog->Destroy;
    $event->Skip;
  }
}

sub OnUpdateUI {
    my( $self, $event ) = @_;
    
    if( $self->manager ){
        if($self->manager->GetPane("global_settings")->IsShown){
            $self->toolbar->EnableTool(104, 0);         	
        }
        else{
            $self->toolbar->EnableTool(104, 1);         	
        }
    }
}

sub OnRemoveImages {
    my( $self, $event ) = @_;

    
    $self->imagelist->RemoveImageSelection;
    $self->imageviewer->Refresh;	
}

sub SetNewFiles {
    my ( $self, $file_paths ) = @_;

    $self->ShowImageViewer();
    $self->progressdlg( 
        Uploader::GUI::wxImageProcessingProgressDlg->new(
            { 
                title => gettext("Image processing progress information"),
                bt_label => gettext("Cancel image processing"), 
             }
        )        
    );
    $self->progressdlg->Show(1);
    Wx::Yield();
    
    my $files = [
        map {
            encode('iso-8859-1', $_)
        }@$file_paths    
    ];
    
    # last is first !
    if ( scalar @$files > 1 ){
        my $first = shift @$files;
        push @$files, $first;	
    }
    #print Dumper $files;

    $self->imagelist->SetNewFiles(
        $files
    );

    
}

sub OnTreeSelChanged {
    my( $self, $event ) = @_;
  
    my @items = $self->tree->GetSelections;

    $self->imagelist->categories(
        [
            map {
                my $category = $self->tree->GetPlData( $_ );
                $category->{id} if $category != -1;
            }
            @items
        ]
    );
}

sub OnTreeItemRightClick {
    my( $self, $event ) = @_;

    my $point = $event->GetPoint ;
    my $ctx_mnu = Wx::Menu->new;
    
    map {
    	$ctx_mnu->Append(
    	    @$_
    	);
    }
    (
        [
            1+$ID_TREE_CTX_MENU, 
            wxTheApp->branding->{'Add new category'},
            sprintf(
                "%s %s %s %s", 
                gettext("Add a new"), 
                wxTheApp->branding->{category},
                gettext("to the currently selected"),
                wxTheApp->branding->{category},
            )
        ],
        [
            2+$ID_TREE_CTX_MENU, 
            "Refresh",
            sprintf(
                "Refresh %s list.",
                wxTheApp->branding->{category},
            )
        ],
    );
    $self->PopupMenu($ctx_mnu, $point);
	
}

sub OnAddCategories {
    my ( $self, $event ) = @_;

    my $item = $self->tree->GetSelection;

    my $category = $self->tree->GetPlData($item);
    my $category_id;
    
    $category_id = $category->{id} if 'HASH' eq ref($category) ;

    my $dialog = Wx::TextEntryDialog->new( 
        $self, 
        sprintf("Category name :", wxTheApp->branding->{Category}), 
        sprintf("Add new %s", wxTheApp->branding->{category}),
        sprintf("New %s", wxTheApp->branding->{category}), 
    );

    if( $dialog->ShowModal != wxID_CANCEL ) {
    	my $name = $dialog->GetValue;
        my ( $status, $status_msg ) = $self->pwg->AddCategories( $name, $category_id);
        $self->_refresh_tree_categories_helper;
    }
    $dialog->Destroy;
}

sub OnRefreshCategories {
    my ( $self, $event ) = @_;

    $self->_refresh_tree_categories_helper;
}

sub _refresh_tree_categories_helper {
    my ( $self ) = @_;	

    my $busycursor = Wx::BusyCursor->new();
    $self->tree->CollapseAll;
    $self->tree->DeleteAllItems;
    $self->imagelist->categories([]);
    $self->pwg->RefreshCategories();
    $self->populate_tree_categories;
}

sub OnImageViewerEndLabelEdit {
    my( $self, $event ) = @_;
  
    my $image = $self->imagelist->GetImage($event->GetIndex);
    $image->site_name(
        $event->GetLabel
    );
    	
    $self->image_prop_piwigo->Refresh;
}

sub OnImageViewerItemActivated {
    my( $self, $event ) = @_;

    $self->OnPhotoProperties;
}


sub OnImageViewerItemSelected {
    my( $self, $event ) = @_;
  
    my $indx = $event->GetIndex;

    # retrieve photo info for the last selected photo
    $self->imagelist->SetCurrentImage($indx);
    
    $self->imagelist->image_selection(
        $self->imageviewer->GetSelectedItems
    );

    $self->image_preview->SetBitmap(
        wxNullBitmap
    );
    $self->image_preview->Refresh;

    
    $self->image_preview->SetBitmap(
        Wx::Bitmap->new( 
            $self->imagelist->current_image->preview_file, 
            $self->GetWxBitmapType($self->imagelist->type), 
        )
    );
    
    $self->image_preview->Refresh;
    
    $self->manager->Update;
    
    $self->image_prop_piwigo->Refresh;
    $self->image_prop_exif->Refresh;

}

sub OnImageViewerKeyDown {
    my( $self, $event ) = @_;

    if(WXK_DELETE == $event->GetKeyCode){
        $self->OnRemoveImages();
    }	
}

sub OnUploadImages {
    my( $self, $event ) = @_;

    eval {
        $self->ProcessImageSelection();    
    };
}

# remove image from imagelist when uploaded
sub UploadImagesViewerRefresh {
    my ( $self ) = @_;	

    my $imagelist= $self->imagelist ;

    Wx::Yield();
}

sub UploadProgressMessageRefresh {
    my ( $self, $msg ) = @_;	

    $self->upload_progressdlg->processing(
        $msg   
    );	

    Wx::Yield();
}

sub UploadProgressThumbnailRefresh {
    my ( $self ) = @_;	

    my $imagelist = $self->imagelist ;

 
    $self->upload_progressdlg->image->SetBitmap(wxNullBitmap);
    $self->upload_progressdlg->image->SetBitmap(
        Wx::Bitmap->new( 
            $self->imagelist->current_image->wx_thumb_file, 
            $self->GetWxBitmapType($self->imagelist->type), 
        )
    );

    Wx::Yield();
}

sub UploadProgressBarRefresh {
    my ( $self, $ratio ) = @_;	

    $ratio = $self->imagelist->count > 1 ? 1 : $ratio; 
    eval {
        $self->upload_progressdlg->progress(
            $ratio*$self->imagelist->count * ( 100/scalar @{$self->imagelist->image_selection} )
        );
        $self->upload_progressdlg->LogProgress();
    };
    croak gettext("Upload cancelled") if $@;

    Wx::Yield();
}

sub SetNewFilesDisplayEndInfo {
    my ( $self, $msg ) = @_;	
	
    $self->progressdlg->DisplayEndInfo($msg);
}

sub UploadDisplayEndInfo {
    my ( $self, $msg ) = @_;	
    
    my $imagelist = $self->imagelist ;
    
    $self->upload_progressdlg->DisplayEndInfo($msg);
}

sub ShowImageViewer {
    my ( $self ) = @_;	

    if(!$self->imageviewer->IsShown){
        my $imglistpage = [
            [
                $self->imageviewer, 
                gettext("Photo selection"),
                '../res/images.png', 
                wxBITMAP_TYPE_PNG,
            ],
        ];
        $self->notebook->DeletePage(0);
    
        $self->imageviewer->Show(1);
        $self->_populate_notebook($self->notebook, $imglistpage, 0);
        # load imagelist with loading.jpg
    }
	
}




sub SetNewFilesViewerRefresh {

    my ( $self ) = @_;	

    my $wximagelist = $self->imagelist->wx_thumb_imglist;

    my $indx = $wximagelist->Add(
        Wx::Bitmap->new( 
            $self->imagelist->current_image->wx_thumb_file, 
            $self->GetWxBitmapType($self->imagelist->type), 
        )
    ) if defined $self->imagelist->current_image->wx_thumb_file;
    print $self->imagelist->current_image->wx_thumb_file, " added with index ", $indx, "\n";    
    $self->imageviewer->Refresh(
        $wximagelist
    );

    Wx::Yield();
}



# prepare and upload image_selection
sub ProcessImageSelection {
    my ( $self ) = @_;

    return if !scalar @{$self->imagelist->sums};

    if( scalar @{$self->imagelist->categories} ){
        return if( !defined $self->imagelist->image_selection );
        return if( !scalar @{$self->imagelist->image_selection} );
        
        $self->upload_progressdlg(
            Uploader::GUI::wxImageProcessingProgressDlg->new(
                { 
                    title    => gettext("Image upload progress information"),
                    bt_label => gettext("Cancel upload"), 
                 }
            )        
        );
        # modeless dialog
        $self->upload_progressdlg->Show(1);
        Wx::Yield();
        eval {
            $self->imagelist->UploadSelection;
        };
        if($@){
            Wx::MessageBox( 
                sprintf(
                    gettext("Upload cancelled"),
                ),
                gettext("Piwigo upload information"),
                wxOK | wxICON_INFORMATION, 
            );
        }
    }
    else {
        Wx::MessageBox( 
            sprintf(
                "%s %s", 
                gettext("Please select a valid target"),
                wxTheApp->branding->{category}
            ),
            gettext("Piwigo upload error"),
            wxOK | wxICON_EXCLAMATION, 
        );
    }
}


sub SetNewFilesProgress {
    my ( $self ) = @_;

    my $imagelist = $self->imagelist;

    $self->progressdlg->processing(
        sprintf(
            $imagelist->progress_msg, 
            $imagelist->current_image->file,
        )
    );

    eval {
        $self->progressdlg->image->SetSize([ $imagelist->wx_thumb_size, $imagelist->wx_thumb_size]);
        $self->progressdlg->image->SetBitmap(wxNullBitmap);
        $self->progressdlg->image->SetBitmap(
            Wx::Bitmap->new( 
                $imagelist->current_image->wx_thumb_file,
                $self->GetWxBitmapType( $imagelist->type )
            )
        );
        $self->progressdlg->progress(
            $imagelist->count * ( 100/scalar @{$imagelist->new_files} )
        );
        $self->progressdlg->LogProgress();
    };
    Wx::Yield();
}

sub OnClose {
  my $self = shift;


    # Restaure previous log wnd
    Wx::Log::SetActiveTarget( $self->oldlogwnd );

    # allways store
  
    wxTheApp->StoreConnectionProperties;
    
    $self->imagelist->Store;
    wxTheApp->login_dlg->Destroy;	

    my $params = {};

    ( $params->{'X'}, $params->{'Y'} ) = $self->GetPositionXY ;
    ( $params->{'Width'}, $params->{'Height'} ) = $self->GetSizeWH ;
    ( $params->{'PreviewWidth'}, $params->{'PreviewHeight'} ) = $self->image_preview->GetSizeWH ;
    $params->{Perspective} = $self->manager->SavePerspective;
    

    wxTheApp->SaveConfig( $params );

    $self->Destroy;
}


sub create_toolbar {
    my( $self ) = @_;

    my $tb = Wx::ToolBar->new( $self, -1, wxDefaultPosition, wxDefaultSize, wxTB_FLAT );
    $tb->SetToolBitmapSize( wxSIZE( 32, 32 ) );
    map {
        my $icon1 = Wx::Icon->new();
        eval {
            $icon1->LoadFile($_->[2], $_->[3]);
        };
        my $tb_icon1 = Wx::Bitmap->new( $icon1 );

        my $icon2 = Wx::Icon->new();
        eval {
            $icon2->LoadFile($_->[5], $_->[3]);
        };
        my $tb_icon2 = Wx::Bitmap->new( $icon2 );


        $tb->AddTool( $_->[0], $_->[1], $tb_icon1, $tb_icon2, wxITEM_NORMAL, $_->[1] );
        $tb->EnableTool( $_->[0], $_->[4]);
    }
    (
        [
            101, 
            gettext("Add photo to selection"), 
            '../res/tb_add.png', 
            wxBITMAP_TYPE_PNG, 
            1, 
            '../res/tb_add.png', 
            gettext("Add photo to selection for resizing and uploading")
        ],
        [
            102, 
            gettext("Remove photo from selection"), 
            '../res/tb_remove.png', 
            wxBITMAP_TYPE_PNG, 
            1, 
            '../res/tb_remove.png',
            gettext("Remove photo from selection. Files are not deleted ")
        ],
        [
            103, 
            gettext("Upload to Piwigo"), 
            '../res/tb_upload.png', 
            wxBITMAP_TYPE_PNG, 
            wxTheApp->use_offline ? 0 : 1, 
            '../res/tb_upload.png',
            gettext("Upload photos to Piwigo.")
        ],
        [
            104, 
            gettext("Global settings"), 
            '../res/tb_settings.png', 
            wxBITMAP_TYPE_PNG, 
            0, 
            '../res/tb_settings.png',
            gettext("Change global settings.")
        ],
        [
            105, 
            gettext("Language choice"), 
            '../res/tb_i18n.png', 
            wxBITMAP_TYPE_PNG, 
            1, 
            '../res/tb_i18n.png',
            gettext("Language choice")
        ],
    
    );

    if($@){
    	undef $tb;
    }
    else{
        $tb->Realize;
    }

    return $tb;
}


sub _create_textctrl {
    my( $self, $parent, $text, $size ) = @_;

    return Wx::TextCtrl->new( $parent, -1, $text, [0, 0], $size,
                              wxNO_BORDER | wxTE_MULTILINE | wxTE_READONLY  );
}

sub create_textctrl {
    my( $self, $text, $size ) = @_;

    return $self->_create_textctrl( $self, $text, $size );
}

sub DESTROY {
    my( $self ) = @_;

    $self->manager->UnInit;
}



1;





package DNDImageListDropTarget;

use base qw(Wx::FileDropTarget Class::Accessor::Fast);

__PACKAGE__->mk_accessors( 
    qw/
          imageviewer
          frame
      /
);

sub new {
  my $class = shift;
  my $imageviewer = shift;
  my $self = $class->SUPER::new( @_ );

  $self->imageviewer($imageviewer);
  $self->frame($imageviewer->GetParent);
  return $self;
}

sub OnDropFiles {
  my( $self, $x, $y, $files ) = @_;

  $self->frame->SetNewFiles($files) ;
}




1;


package DNDCategoryTreeDropTarget;

use base qw(Wx::TextDropTarget Class::Accessor::Fast);
use Data::Dumper;
use Wx qw/
              wxDragNone
              wxDragCopy
              wxDragMove
         /;

__PACKAGE__->mk_accessors( 
    qw/
          tree
          frame
      /
);

sub new {
  my ( $class, $tree ) = @_;
  my $self = $class->SUPER::new();

  $self->tree($tree);
  $self->frame($tree->GetParent);
  return $self;
}



sub OnDropText {
  my( $self, $x, $y, $textdata ) = @_;

  # must be $VAR1 because $textdata is the result of Data::Dumper
  my $VAR1;
  eval $textdata;
  eval {
      if(scalar @$VAR1){
      	   my @items;
      	   if(scalar @items < 2) {
               my ($dropItem, $flag) = $self->tree->HitTest([$x, $y]);
      	   	push @items, $dropItem;
      	   }
      	   else {
      	   	@items = $self->tree->GetSelections;
      	   }
      	   
      	   # remove root item which is not a valid category
      	   @items = grep { $self->tree->GetPlData( $_ ) != -1 } @items;
      	   
           $self->frame->imagelist->categories(
               [
                   map {
                       $self->tree->GetPlData( $_ )->{id};
                   }
                   @items
               ]
           );
           
      	   $self->frame->imagelist->image_selection($VAR1);
      	   $self->frame->ProcessImageSelection ;
      }	
  };
}

1;