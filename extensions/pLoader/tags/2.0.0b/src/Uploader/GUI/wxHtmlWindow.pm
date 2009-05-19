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
package Uploader::GUI::wxHtmlWindow;

use strict;
use Wx::Html;
use base qw(Wx::HtmlWindow);

sub new {
  my $class = shift;
  my $this = $class->SUPER::new( @_ );

  if( -e '../res/intro.html' ){
      $this->LoadPage( 
          '../res/intro.html' 
      );
  }

  return $this;
}

sub OnLinkClicked {
  my( $this, $link ) = @_;

  Wx::LogMessage( 'Link clicked: href="%s"', $link->GetHref() );
  $this->SUPER::OnLinkClicked( $link );
}

1;
