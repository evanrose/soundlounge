<?php get_header(); ?>

<section class="projects-page news-page">

	<?php while(have_posts()) : the_post(); ?>
		<?php get_template_part( 'tpl', 'title' ); ?>
	<?php endwhile; ?>

	<div id="" class="row row-projects collapse" data-equalizer data-options="equalize_on_stack: true">

		<?php

			$args = array(
			    'post_type' => 'news',
			    'posts_per_page' => 12,
			);

			$query = new WP_Query( $args );

			while ( $query->have_posts() ) : $query->the_post(); ?>

			<?php 
				$roles 	= wp_get_post_terms( $post->ID, 'role');
				$roles 	= wp_list_pluck( $roles, 'name' );
				$awards = get_field( 'awards' );
			?>

			<div style="float: left;" class="small-12 medium-6 large-4 project-container" data-equalizer-watch>
				<a href="<?php the_permalink(); ?>">
					<div class="project-meta">
						<h3><?php the_title(); ?></h3>
						<h4><?php the_field( 'sub_headline' ); ?></h4>	
					</div>
					<div class="image-container"><?php echo get_the_post_thumbnail(); ?></div>
				</a>
			</div>
		
			<?php wp_reset_postdata(); ?>
		<?php endwhile; ?>
		
	</div>
</section>

<?php get_footer(); ?>