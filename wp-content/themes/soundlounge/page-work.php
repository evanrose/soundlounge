<?php get_header(); ?>

<section class="projects-page">

	<?php while(have_posts()) : the_post(); ?>
		<?php get_template_part( 'temp', 'title' ); ?>
	<?php endwhile; ?>

	<div class="row select">
	    <div class="small-12 medium-4 medium-centered columns">
	    	<form class="select-style">
		        <select>
		        	<option>Filter By</option>
		        	<option>Filter By</option>
		        	<option>Filter By</option>
	    		</select>
	    	</form>
	    </div>
	</div>
	<div class="row row-projects collapse">

		<?php $query = new WP_Query( array('post_type' => 'project', 'posts_per_page' => -1 ) ); ?>
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>

				<div class="small-12 medium-6 large-4 columns">
					<a href="<?php the_permalink(); ?>">
						<div class="project-meta">
							<h3><?php the_title(); ?></h3>
							<p><?php the_content(); ?></p>
						</div>
						<div class="image-container"><?php echo get_the_post_thumbnail(); ?></div>
					</a>
				</div>
			
			<?php wp_reset_postdata(); ?>
		<?php endwhile; ?>
	</div>

</section>

<?php get_footer(); ?>