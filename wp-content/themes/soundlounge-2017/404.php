<?php 

	$path = $_SERVER['REQUEST_URI'];
	$dir = explode( '/', $path );
	$dir = $dir[1];

	if ( $dir == 'staff' ) {

		$new_dir = 'people';
	}

	if ( $dir == 'news' ) {

		$new_dir = 'news';
	}

	if ( isset( $new_dir ) ) {

		wp_redirect( '/' . $new_dir . '/', 301 );
	}
?>

<?php get_header(); ?>

<section class="<?php echo $post->post_name; ?>-page">

	<div class="row large-collapse page-title">
		<div class="small-10 medium-6 medium-offset-5 end columns">
			<h2>Page Not Found</h2>
		</div>
	</div>

	<div class="row">
		<div class="small-10 medium-7 columns large-5 large-offset-1">
			<p>Sorry about that! The link you clicked on is broken. Please hit your back button or one of the links above to get back on the right track.</p>
		</div>
	</div>
	
</section>

<?php get_footer(); ?>