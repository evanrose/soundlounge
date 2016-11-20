<?php get_header(); ?>

<section class="people-page">

	<?php while(have_posts()) : the_post(); ?>
		<?php get_template_part( 'tpl', 'title' ); ?>
	<?php endwhile; ?>

	
	<div class="row row-news">
		<div id="news" class="small-12 columns">

			<div class="grid"><div class="grid-sizer"></div>

				<?php

				$args = array(
				    'post_type' => 'news',
				    'posts_per_page' => 24,
				);

				$query = new WP_Query( $args );

				while ( $query->have_posts() ) : $query->the_post();

						$orientation = array( 'horizontal', 'vertical', 'square' );
						$orientation = $orientation[array_rand($orientation)];						
					?>

					<div class="grid-item grid-item-<?php echo $orientation; ?>">
						<a href="<?php the_permalink(); ?>">							
							<div class="image-container"><?php the_post_thumbnail( $orientation ); ?></div>
							<div class="people-meta">
								<h3><?php the_title(); ?></h3>
								<h4><?php the_field( 'sub_headline' ); ?></h4>
							</div>
						</a>
					</div>
					
					<?php wp_reset_postdata(); ?>
				<?php endwhile; ?>	
			</div>

		</div>
	</div>

</section>

<?php get_footer(); ?>