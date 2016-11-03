asdf<?php get_header(); ?><?php while(have_posts()) : the_post(); ?>

<section class="">

	<?php get_template_part( 'temp', 'title' ); ?>
	
</section>

<?php endwhile; ?><?php get_footer(); ?>
