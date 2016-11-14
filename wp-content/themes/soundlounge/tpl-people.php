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
			$positions = wp_get_post_terms( $post->ID, 'position');
			//var_dump( $positions );
			$positions = wp_list_pluck( $positions, 'name' );
		 ?>

		<div class="small-12 medium-6 large-4 columns person-container" data-equalizer-watch>
			<a href="<?php the_permalink(); ?>">							
				<div class="image-container"><?php echo get_the_post_thumbnail(); ?></div>
				<div class="people-meta">
					<h3><?php the_title(); ?></h3>
					<h4><?php echo implode(' &#149; ', $positions); ?></h4>
				</div>
			</a>
		</div>
	
	<?php wp_reset_postdata(); ?>
<?php endwhile; ?>	