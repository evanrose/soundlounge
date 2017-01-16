<?php get_header(); ?>

<?php 
	$positions = wp_get_post_terms( $post->ID, 'position');
	$positions = wp_list_pluck( $positions, 'name' );
	$positions = array_diff( $positions, array( 'Sidecar' ) );
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
					<h4><?php echo implode(' &#149; ', $positions); ?></h4>
					<p><?php the_field( 'bio' ) ?></p>
				</div>
				<div class="small-12 large-6 column">
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
				</div>
				<div class="small-12 column">
					
					<?php 

					if ( get_field( 'email_address' ) ) {
						$email_address = get_field( 'email_address' );
						$email_text = '';
					}
					if ( in_array( 'Sound Designer', $positions ) ) { 
						$email_address = 'producers@soundlounge.com';
						$email_text = 'For Scheduling: ';

					}

					//hiding the email for now

					//$email_address = 0;

					if ( $email_address ) { ?>

						<div class="email-icon-container">
								<p>
									<span class="icon-container">
										<span class="icon social-icon email-icon email-icon-40">
									</span>
								</span>
								<span class="text text-40"><?php echo $email_text; ?>
									<?php //<a class="email-address" href="mailto:<?php echo $email_address; ?>
										<?php echo antispambot( $email_address ); ?>
									<?php //</a> ?>
								</span></p>
						</div>

					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>