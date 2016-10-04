<?php

/*
	Plugin Name: Remote Uploads Directory
	Author: David "The Man" Gowrie
*/

add_filter('upload_dir', 'remote_media_upload_dir');

function remote_media_upload_dir( $upload ) {

	$upload['baseurl'] = 'https://wpaetna.build.webershandwick.com/wp-content/uploads';
	return $upload;
}