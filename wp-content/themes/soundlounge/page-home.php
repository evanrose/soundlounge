<?php get_header(); ?><?php while(have_posts()) : the_post(); ?>

<section class="<?php echo $post->post_name; ?>-page">

<div class="image-container">
	<a href="/work/"><?php echo get_the_post_thumbnail(); ?></a>
</div>
<a href="/work/" class="alert button tiny"><?php echo wp_strip_all_tags( get_the_content() ); ?></a>	

</section>

<?php endwhile; ?><?php get_footer(); ?>