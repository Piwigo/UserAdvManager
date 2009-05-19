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
package Uploader::Image;
use strict;
use base qw/Uploader::Object/;

__PACKAGE__->mk_accessors(
    qw/
        file
        wx_thumb_file
        preview_file
        site_high_file
        site_name
        site_resized_file
        site_thumb_file
        site_author
        site_comment
        exif_metadata
        add_rank
        site_categories
        site_tags
        preview_w
        preview_h
        file_sum
    /
);

sub Init {
    my ( $self ) = @_;
}

sub exif_tag {
    my ( $self, $tag ) = @_;
	
    my $exif = $self->exif_metadata ;
    
    $exif->{$tag};	
}

sub create_date {
    my ( $self ) = @_;
    
    my $exif = $self->exif_metadata ;
    
    $exif->{CreateDate};	
}



1;