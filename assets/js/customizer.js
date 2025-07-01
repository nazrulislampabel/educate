(function($) {

    // Normal Logo Live Preview
    wp.customize( 'normal_logo', function( value ) {
        value.bind( function( newVal ) {
            if ( newVal ) {
                $( '.normal-logo' ).attr( 'src', newVal );
            }
        } );
    } );

    // Sticky Logo Live Preview
    wp.customize( 'sticky_logo', function( value ) {
        value.bind( function( newVal ) {
            if ( newVal ) {
                $( '.sticky-logo' ).attr( 'src', newVal );
            }
        } );
    } );

    // Newsletter Heading live preview
    wp.customize('newsletter_heading', function(value) {
        value.bind(function(newval) {
            $('.content-part h2').text(newval);
        });
    });

    // Footer Text live preview
    wp.customize('footer_text', function(value) {
        value.bind(function(newval) {
            $('.footer-text').text(newval);
        });
    });
})(jQuery);
