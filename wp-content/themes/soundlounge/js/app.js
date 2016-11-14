// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

function loadItems( slug, page ) {

	//alert( page );

	if (slug == null) {
		slug = '';
	}

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById( page ).innerHTML = this.responseText;
		}
	};
	xhttp.open("GET", "/wp-content/themes/soundlounge/tpl-" + page + ".php?slug=" + slug, true);
	xhttp.send();
}

loadItems( null, window.page );