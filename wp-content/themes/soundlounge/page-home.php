<?php

	setcookie( 'bypass_home', 'true', time() + ( 86400 * 14 ), "/");
	if ( isset( $_COOKIE['bypass_home'] ) ) {

		//wp_redirect( '/work/' );
		//exit;
	}
?>

<script type="text/javascript">

	if (window.innerWidth < 1000) {

		window.location.replace("/work/");
	}
</script>

<?php get_header(); ?><?php while(have_posts()) : the_post(); ?>

<section class="home-page">

	<div class="image-container">
		<a href="/work/"><?php echo get_the_post_thumbnail(); ?></a>
	</div>
	<a href="/work/" class="alert button tiny"><?php echo wp_strip_all_tags( get_the_content() ); ?></a>

</section>

<?php endwhile; ?><?php get_footer(); ?>