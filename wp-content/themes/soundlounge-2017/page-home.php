<?php
	$time = 1;
	$time = 86400 * 7;
	setcookie( 'bypass_home', 'true', time() + ( $time ), '/' );
	if ( isset( $_COOKIE['bypass_home'] ) ) {
		//wp_redirect( '/work/' );
		//exit;
	}
?>

<script type="text/javascript">
	if ( window.innerWidth < 1000 ) {
		//alert('less!');
		//window.location.replace( '/work/' );
	}
</script>

<?php get_header(); ?>

<?php setup_postdata( $post ); ?>

<div class="image-container">
	<a href="/work/"><?php echo get_the_post_thumbnail(); ?></a>
	<a href="/work/" class="alert button tiny">Come on In</a>
</div>

<section class="home-page">

	<?php while(have_posts()) : the_post(); ?>
		<?php get_template_part( 'tpl', 'title' ); ?>
	<?php endwhile; ?>

</section>

<?php get_footer(); ?>