<?php get_header(); ?><?php while(have_posts()) : the_post(); ?>

<section class="">

	<?php get_template_part( 'tpl', 'title' ); ?>

	<?php //the_content(); ?>
	
</section>

<?php endwhile; ?><?php get_footer(); ?>