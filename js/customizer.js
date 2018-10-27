( function( $ ) {

      wp.customize( 'background_color', function( value ) {
		value.bind( function( newval ) {
			$( 'body' ).css( 'background-color', newval );
		} );
	} );

	wp.customize( 'left_column', function( value ) {
		value.bind( function( newval ) {
			$( '#left-column > p' ).html( newval );
		} );
	} );

	wp.customize( 'right_column', function( value ) {
		value.bind( function( newval ) {
			$( '#right-column > p' ).html( newval );
		} );
	} );
    
} )( jQuery );