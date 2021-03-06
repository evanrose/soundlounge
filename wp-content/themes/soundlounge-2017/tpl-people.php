<?php
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );
?>

<div style="text-align: center; "><img class="loading" alt="loading" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/loading.gif"></div>
<div class="grid"><div class="grid-sizer"></div>

<?php

if ( $_GET['slug'] ) {
	$slug = $_GET['slug'];
}
else {
	$slug = 'all';
}

$args = array();
$args = array(
    'post_type' => 'person',
    'posts_per_page' => -1,
);

$query = new WP_Query( $args );

while ( $query->have_posts() ) : $query->the_post();

	
	$positions = wp_get_post_terms( $post->ID, 'position');
	$positions = wp_list_pluck( $positions, 'name' );
	$positions = array_diff( $positions, array( 'Sidecar' ) );
	
	$positions_clean = array();
	foreach( $positions as $position ) {
		$positions_clean[] = str_replace( 'Sidecar', '+ Sidecar', $position );
	}

	if ( $slug == 'all' || contains( $slug, $positions ) ) {

		$img_array 	= get_field( 'people_page_thumbnail' );
		$w 			= $img_array['width'];
		$h 			= $img_array['height'];
		$img_url 	= $img_array['url'];
		$orientation = check_orientation( $w, $h );
		
		?>

		<div class="grid-item grid-item-<?php echo $orientation; ?>">
			<a href="<?php the_permalink(); ?>">							
				<div class="image-container"><img alt="<?php the_title(); ?>" src="<?php echo $img_url; ?>"></div>
				<div class="people-meta">
					<h3><?php the_title(); ?></h3>
					<h4><?php echo implode( ' &#149; ', $positions_clean ); ?></h4>
				</div>
			</a>
		</div>
	<?php } ?>

	<?php wp_reset_postdata(); ?>

<?php endwhile; ?>	
</div>
</body>
</html>