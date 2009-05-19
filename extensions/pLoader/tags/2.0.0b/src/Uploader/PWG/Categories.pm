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
package Uploader::PWG::Categories;
use strict;
use Data::Dumper;
use Wx::Locale qw/:default/;
use base qw/
           Uploader::Object
           Class::Accessor::Fast
           /;

# create a list of tree items
sub prepare_items {
    my ( $self, $categories ) = @_;


    my $records = {};    

    # lookup by id
    # every node is a parent
    map {
        $records->{$_->{id}} = _record( $_ );
    }
    @$categories;

    # find the parent
    map {
    	my $child = $records->{$_};
    	my $parentid = _parentid($child);
        if(defined $parentid){
            _addchild( 
                $records->{$parentid}, 
                $child
            );
            delete $records->{$_};	
        }
    }
    sort { $b <=> $a }
    keys %$records;

    return [
        [
            gettext("Categories"),
            undef,
            -1,
            0,
            -1,
            
        ],
        sort { $a->[6] <=> $b->[6] } values %$records,
    ];
}

sub _parentid {
    my ( $record ) = @_;
    
    $record->[5];
}


sub _addchild {
    my ( $record, $child ) = @_;
    
    $record->[1] ||= [];
    
    my $children = $record->[1];
    
    push @$children, $child;
    
    # sort by rank 	
    @$children = sort { $a->[6] <=> $b->[6] } @$children;
}

sub _parent_rank {
   my ( $category ) = @_;

   my @rank = split /\./, $category->{global_rank} ;
   my @ucats = split /,/, $category->{uppercats} ;

   my $parent;
   if( 1 < scalar @ucats ){
   	$parent = $ucats[scalar @rank - 2 ];
   }
   my $rank = $rank[scalar @rank - 1 ];
   
   return ($parent, $rank);
}



sub _record {
    my ( $category ) = @_;

    my ( $parent, $rank ) = _parent_rank($category);
    return [
        $category->{name},
        undef,
        $category,
        1,
        -1,
        $parent,
        $rank,
    ];   
}

1;