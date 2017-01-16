// Prevent jump to anchor
if (location.hash) {
	setTimeout(function() {
		window.scrollTo(0, 0);
	}, 1);
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

$(document).ready(function() {

 	// Moves contact form success message
	$( '.sidecar-page .alert-box h5' ).text( $( '.wpcf7-response-output' ).text() );
	
	// Change look of /contact/form button
	$( '.hs-button' ).removeClass( 'large' ).addClass( 'button' );

});

// Simulate tab click for dropdown that appears on mobile layout What We Do page
function clickTab( tab ) {

	$( '.' + tab + ' a' )[0].click();
}

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

	}, 2250);
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

//Async HubSpot Analytics Code
(function(d,s,i,r) {
if (d.getElementById(i)){return;}
var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
n.id=i;n.src='//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/38071.js';
e.parentNode.insertBefore(n, e);
})(document,"script","hs-analytics",300000);