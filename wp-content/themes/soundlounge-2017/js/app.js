jQuery(document).foundation();

$(document).ready(function() {

 	// Moves contact form success message
	$( 'sidecar-page .alert-box h5' ).text( $( '.wpcf7-response-output' ).text() );
	
	// Change look of /contact/form button
	$( '.hs-button' ).removeClass( 'large' ).addClass( 'button' );

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

	setTimeout( function() {

		$('.grid').isotope({
			layoutMode: 'cellsByRow',
			itemSelector: '.grid-item',
			percentPosition: true,
			cellsByRow: {
				columnWidth: '.grid-sizer',
				rowHeight: '.grid-sizer'
			}
		});

		$( '.loading' ).css( 'display', 'none' );
		$( '.grid-item' ).css( 'visibility', 'visible' );

	}, 2000);
}


// Load items via Ajax
function loadItems( slug, page ) {

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		
		if ( this.readyState == 4 && this.status == 200 ) {
			
			document.getElementById( page ).innerHTML = this.responseText;
		}
	};
	xhttp.open( 'GET', '/wp-content/themes/soundlounge-2017/tpl-' + page + '.php?slug=' + slug, true );
	xhttp.send();

	if ( window.innerWidth > 1000 ) {

		initIsotope();
	}
}

// If window.page is set, then we're going to load ajax.
if ( typeof window.page !== 'undefined' ) {
    
    loadItems( window.slug = '', window.page );
}

// Stats
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-34157670-1']);
_gaq.push(['_gat._forceSSL']);
_gaq.push(['_trackPageview']);

(function () {
	var ga = document.createElement('script');
	ga.type = 'text/javascript';
	ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(ga, s);
})();