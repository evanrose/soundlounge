<?php get_header(); 

$post_type = get_post_type();
if ( $post_type )
{
    $post_type_data = get_post_type_object( $post_type );
    $post_type_slug = $post_type_data->rewrite['slug'];
    echo $post_type_slug;
}

?>

<?php if ( have_posts() ) : ?>

<section class="">

	<?php get_template_part( 'temp', 'title' ); ?>

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