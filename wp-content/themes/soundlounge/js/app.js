// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();



$( document ).ready(function() {
    
    $('.hs-button').removeClass('large').addClass('button');

	initIsotope();
});

// Load Ajax Items

function initIsotope() {

	if ( $( ".js-tablet-portrait" ).css( "display" ) == "inline-block" ) {
		setTimeout(function() {

		$('.grid').isotope({
			layoutMode: 'cellsByRow',
			itemSelector: '.grid-item',
			percentPosition: true,
			cellsByRow: {
			columnWidth: '.grid-sizer',
			rowHeight: '.grid-sizer'
			}
			});      

		}, 1500);
	}
}

function loadItems( slug, page ) {

	//alert( page );

	if ( slug == null ) {
		slug = '';
	}

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById( page ).innerHTML = this.responseText;
		}
	};
	xhttp.open( "GET", "/wp-content/themes/soundlounge/tpl-" + page + ".php?slug=" + slug, true );
	xhttp.send();

	initIsotope();

}

if (typeof window.page !== 'undefined') {

	if (typeof window.slug !== 'undefined') {
		var slug = window.slug;
	}
	else var slug = null;
    
    loadItems( slug, window.page );
}



function clickTab( tab ) {

	$('.' + tab + ' a')[0].click();
}