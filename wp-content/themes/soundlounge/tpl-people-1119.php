<div class="grid"><div class="grid-sizer"></div>

<?php

$slug = $_GET['slug'];

$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );

$args = array(
    'post_type' => 'person',
    'posts_per_page' => -1,
);

if ( $slug ) {
    $args['tax_query'] = array(
        array(
            'taxonomy' => 'position',
			'field'    => 'slug',
			'terms'    => $slug,
        )
    );
}

$query = new WP_Query( $args );

while ( $query->have_posts() ) : $query->the_post(); ?>

	<?php
		$img_array = get_field( 'people_page_thumbnail' );
		//var_dump( $img_array );
		$w = $img_array['width'];
		$h = $img_array['height'];
		$img_url = $img_array['url'];
		$orientation = check_orientation( $w, $h );
		
		$positions = wp_get_post_terms( $post->ID, 'position');
		$positions = wp_list_pluck( $positions, 'name' );
	?>

	<div class="grid-item grid-item-<?php echo $orientation; ?>">
		<a href="<?php the_permalink(); ?>">							
			<div class="image-container"><img alt="<?php the_title(); ?>" src="<?php echo $img_url; ?>"></div>
			<div class="people-meta">
				<h3><?php the_title(); ?></h3>
				<h4><?php echo implode(' &#149; ', $positions); ?></h4>
			</div>
		</a>
	</div>
	
	<?php wp_reset_postdata(); ?>
<?php endwhile; ?>	
</div>