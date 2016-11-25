jQuery(document).foundation();

$(document).ready(function() {
 
 	// Moves contact form success message
	$( 'sidecar-page .alert-box h5' ).text( $( '.wpcf7-response-output' ).text() );
	
	// Change look of /contact/form button
	$( '.hs-button' ).removeClass( 'large' ).addClass( 'button' );
	
	// Call the Isotope layout
	initIsotope();

});

// Simulate tab click for dropdown that appears on mobile layout What We Do page
function clickTab( tab ) {

	$( '.' + tab + ' a' )[0].click();
}

// Trigger a window resize event on tab click so that Orbit slideshows load in tabs that are initially hidden
$(document).foundation({

	tab: {
		callback : function (tab) {

			var evt = document.createEvent( 'UIEvents' ); 
			evt.initUIEvent( 'resize', true, false, window, 0 ); 
			window.dispatchEvent( evt );
		}
	}
});

// Load Isotope layout
function initIsotope() {

	// Check to see if CSS rule is set for tablet landscape or above. If so, do Isotope
	if ( $( '.js-tablet-landscape' ).css( 'position' ) == 'absolute' ) {

		// Timeout is required because this fails ALL THE TIME
		setTimeout( function() {

			$( '.grid' ).isotope({
				
				layoutMode: 'cellsByRow',
				itemSelector: '.grid-item',
				percentPosition: true,
				cellsByRow: {
					
					columnWidth: '.grid-sizer',
					rowHeight: '.grid-sizer'
				}
			});
		
		}, 2000);
	}
}

// Load items via Ajax
function loadItems( slug, page ) {

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		
		if ( this.readyState == 4 && this.status == 200 ) {
			
			document.getElementById( page ).innerHTML = this.responseText;
		}
	};
	xhttp.open( 'GET', '/wp-content/themes/soundlounge/tpl-' + page + '.php?slug=' + slug, true );
	xhttp.send();

	initIsotope();

}

// If window.page is set, then we're going to load ajax.
if ( typeof window.page !== 'undefined' ) {
    
    loadItems( window.slug = '', window.page );
}