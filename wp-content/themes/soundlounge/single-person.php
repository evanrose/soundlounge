<?php get_header(); ?>

<?php 
	$roles = wp_get_post_terms( $post->ID, 'role');
	$roles = wp_list_pluck( $positions, 'name' );
 ?>

<section class="person-page">
	<div class="row">
		<div class="small-12 column text-right">
			<a href="/people/"><span class="icon-container icon-container-20"><span class="icon close-icon"></span></span></a>
		</div>
	</div>
	<div class="row">
		<div class="small-12 large-5 column">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="small-12 large-7 column">
			<div class="row">
				<div class="small-12 column">
					<h2><?php the_title(); ?></h2>
					<h5><?php echo implode(' &#149; ', $positions); ?></h5>
					<p><?php the_field( 'bio' ) ?></p>
				</div>
				<div class="column">
					<ul class="small-block-grid-4">
						<?php if ( get_field( 'facebook_url' ) ) { ?>
							<li><a href="<?php the_field( 'facebook_url' ); ?>"><span class="icon-container"><span class="icon social-icon social-facebook"></span></span></a></li>
						<?php } ?>
						<?php if ( get_field( 'twitter_url' ) ) { ?>
							<li><a href="<?php the_field( 'twitter_url' ); ?>"><span class="icon-container"><span class="icon social-icon social-twitter"></span></span></a></li>
						<?php } ?>
						<?php if ( get_field( 'instagram_url' ) ) { ?>
							<li><a href="<?php the_field( 'instagram_url' ); ?>"><span class="icon-container"><span class="icon social-icon social-instagram"></span></span></a></li>
						<?php } ?>
						<?php if ( get_field( 'linkedin_url' ) ) { ?>
							<li><a href="<?php the_field( 'linkedin_url' ); ?>"><span class="icon-container"><span class="icon social-icon social-linkedin"></span></span></a></li>
						<?php } ?>
					</ul>
					
					<?php if ( get_field( 'email_address' ) ) { ?>
						<div class="email-icon-container">
							<a href="mailto:<?php the_field( 'email_address') ?>"><span class="icon-container"><span class="icon social-icon email-icon email-icon-40"></span></span><span class="text text-40">Scheduling</span></a>
						</div>
					<?php } ?>

				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>