<?php get_header(); ?><?php if ( have_posts() ) : ?>

<section class="">

	<?php get_template_part( 'tpl', 'title' ); ?>

	<?php while ( have_posts() ) : the_post(); 

		/*
		* Include the Post-Format-specific template for the content.
		* If you want to override this in a child theme, then include a file
		* called content-___.php (where ___ is the Post Format name) and that will be used instead.
		*/
		get_template_part( 'content', get_post_format() );
		echo '<div>';
		the_title();
		echo '</div>';

		endwhile;

	?>
	
</section>

<?php endif; ?><?php get_footer(); ?>