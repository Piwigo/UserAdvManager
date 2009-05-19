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
package Uploader::Object;
use strict;
use Data::Dumper;
use Storable;
use File::Slurp ; 
use Data::Dumper;
use base qw/
               Class::Accessor::Fast
           /; 

# $param is a hash with :
# key : member name
sub new {
    my ( $class, $params ) = @_;
    
    $params ||= {};
    
    my $self = bless $params, $class ;

    # create member accessors
    #__PACKAGE__->mk_accessors(     
    #    keys %$params
    #);
    
    
    if(defined $self->{plugin_file}){
    	die "Plugin file is missing." unless -e $self->{plugin_file};
        $self->InitPlugins();
    }

    # member accessors initialization
    eval {
        map {
        	$self->$_(
        	    $params->{$_}
        	);
        }
        keys %$params;
    };
    if($@){
        warn $@;	
    }

    # must be defined in child class
    $self->Init();

    
    return $self;
}


sub InitPlugins {
    my ( $self ) = @_;
    
    my $data;
    eval { $data = read_file( $self->{plugin_file} ); } ;

    my $plugins = [] ;
    if( defined $data){
        my $expr = '$plugins = ' ;
        $expr .=  "$data  " ;
        eval $expr ;
    }
    # load plugins
    
    my $hplugins = $plugins->[0] if scalar @$plugins;
    while( my ( $key, $value ) = each %$hplugins ) {
    	$self->ReadParams( $value, $key);
    }
    
}

sub ReadParams {
	my( $self, $file, $key ) = @_ ;

	my $expr_params ;
	eval { $expr_params = read_file( $file ); } ;
	
	my $paramValues = [] ;
	if($expr_params){
		my $expr = '$paramValues = ' ;
		$expr .=  "$expr_params  " ;
		eval $expr ;
	}
	return unless 'ARRAY' eq ref $paramValues ;
        if($@){
            die "Cannot load data $@";	
        }
	if(scalar(@$paramValues )){
	    my $params = $paramValues->[0] ;
	    $self->SetKeyValues($params, $key);
	}
}

sub SetKeyValues {
    my ( $self, $params, $key )= @_;
    if (defined $key) {	
        foreach( keys %$params ) {
            $self->{$key}->{$_} = $params->{$_} ;
        }
    }
    else {
        foreach( keys %$params ) {
            $self->{$_} = $params->{$_} ;
        }
    }
}


sub get_storable {
    my ( $self, $keys ) = @_;	

    my $data = {
        map {
    	    $_ => $self->{$_},
          }
          @$keys
    };
    
    $data;
}

1;