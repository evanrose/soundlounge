<?php

$slug = 'featured';

if ( $_GET['slug'] ) {
	$slug = $_GET['slug'];
	if ( $slug == 'all') {
		$slug = 0;
	} 
}

$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );

$args = array(
    'post_type' => 'project',
    'posts_per_page' => -1,
);

if ( $slug ) {
    $args['tax_query'] = array(
    	array(
	        'taxonomy' => 'role',
			'field'    => 'slug',
			'terms'    => $slug,
		)
    );
}

$query = new WP_Query( $args );

while ( $query->have_posts() ) : $query->the_post(); ?>

		<?php 
			$roles = wp_get_post_terms( $post->ID, 'role');
			//var_dump( $positions );
			$roles = wp_list_pluck( $roles, 'name' );
			$awards = get_field( 'awards' );
		 ?>

		<div class="small-12 medium-6 large-4 columns project-container" data-equalizer-watch>
			<a href="<?php the_permalink(); ?>">
				<div class="project-meta">
					<h3><?php the_title(); ?></h3>
					<h4><?php echo implode(' &#149; ', $roles); ?></h4>
					<?php if ( $awards) { ?>
						<h4><?php echo $awards; ?></h4>
					<?php } ?>
				</div>
				<div class="image-container"><?php echo get_the_post_thumbnail(); ?></div>
			</a>
		</div>
	
	<?php wp_reset_postdata(); ?>
<?php endwhile; ?>