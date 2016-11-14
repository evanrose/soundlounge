<?php get_header(); ?><?php while(have_posts()) : the_post(); ?>

<section class="">

	<?php get_template_part( 'tpl', 'title' ); ?>

	<div class="row">
		<div class="small-12 column">
			<?php the_field( 'page_content' ); ?>
		</div>
	</div>
	
</section>

<?php endwhile; ?><?php get_footer(); ?>