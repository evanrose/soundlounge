<?php get_header(); ?>

<?php setup_postdata( $post ); ?>

<section class="sidecar-page">

	<?php if ( isset( $_POST['_wpcf7'] ) ) { ?>

		<div class="row">
			<div class="small-12 column">
				<div data-alert class="alert-box">
	  				<h5></h5>
		  			<a href="#" class="close">&times;</a>
				</div>	  			
		  	</div>
		</div>
	<?php } ?>

	<div class="row logo-row text-center">
		<div class="small-12 column">
			<img alt="Sidecar Casting" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/sidecar-logo.png">
		</div>
	</div>

	<div class="row">
		<div class="small-12 column">
			<ul class="inline-list">
				<li><a href="#about">About</a></li>
				<li><a href="#work">Work</a></li>
				<li><a href="#people">People</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</div>
	</div>

	<a name="about"></a>
	<div class="row with-border">
		<div class="small-12 column">
			<h2>About</h2>
		</div>
		<div class="small-12 medium-6 column">
			<?php the_content(); ?>
		</div>
		<div class="small-12 medium-6 column">
			<?php the_post_thumbnail(); ?>
		</div>
	</div>

	<a name="work"></a>
	<div class="row with-border">
		<div class="small-12 column">
			<h2>Recent Work</h2>
		</div>
		<div class="small-12">
			<div id="" class="row row-projects" data-equalizer data-options="equalize_on_stack: true">

				<?php

				$args = array();
				$args = array(
				    'post_type' => 'project',
				    'posts_per_page' => -1,
				    'tax_query' => array(
				    	array(
					        'taxonomy' => 'role',
							'field'    => 'slug',
							'terms'    => 'sidecar',
						)
				    )
				);

				$query = new WP_Query( $args );

				while ( $query->have_posts() ) : $query->the_post(); ?>

					<div style="float: left;" class="small-12 medium-6 large-4 project-container" data-equalizer-watch>
						<a class="" href="//player.vimeo.com/video/<?php the_field( 'vimeo-id' ); ?>" data-lity="">
							<div class="project-meta">
								<h3><?php the_title(); ?></h3>
								<h4><?php //echo implode(' &#149; ', $roles); ?></h4>
								<?php if ( isset( $awards ) ) { ?>
									<h4><?php echo $awards; ?></h4>
								<?php } ?>
							</div>
							<div class="image-container"><?php echo get_the_post_thumbnail(); ?></div>
						</a>
					</div>
				
					<?php wp_reset_postdata(); ?>
				<?php endwhile; ?>

			</div>
		</div>
	</div>

	<a name="people"></a>
	<div class="row with-border">
		<div class="small-12 column">
			<h2>People</h2>
		</div>
		<div class="small-12">
			<div id="" class="row row-projects" data-equalizer data-options="equalize_on_stack: true">

				<?php

				$args = array();
				$args = array(
				    'post_type' => 'person',
				    'posts_per_page' => -1,
				    'tax_query' => array(
				    	array(
					        'taxonomy' => 'position',
							'field'    => 'slug',
							'terms'    => 'sidecar',
						)
				    )
				);

				$query = new WP_Query( $args );

				while ( $query->have_posts() ) : $query->the_post(); ?>

					<div style="float:left;" class="small-12 medium-4 large-3 person-container" data-equalizer-watch>
													
						<div class="image-container"><img src="<?php the_field( 'sidecar_image' ); ?>" alt="<?php the_title(); ?>"></div>
						<div class="people-meta">
							<h3><?php the_title(); ?></h3>
							<h4><?php the_field( 'sidecar_title'); ?></h4>
						</div>
					</div>
				
					<?php wp_reset_postdata(); ?>
				<?php endwhile; ?>	

			</div>
		</div>
	</div>

	<a name="contact"></a>
	<div class="row form-row">
		
		<div class="small-12 medium-10 large-8 medium-centered column">
		<form method="post" data-abide>

			<div class="row fields-row">
				<div class="small-12">

					<div class="small-12 column">
						<h3 class="text-center">Casting Inquiries</h3>
					</div>	
					
					<?php echo do_shortcode( '[contact-form-7 id="328"]' ); ?>

				</div>	
			</div>
		</div>
	</div>
	

	<div class="row" data-equalizer data-equalizer-mq="large-up">
		<div class="small-12 large-6 column google-maps" data-equalizer-watch>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9866679609718!2d-73.99241818459426!3d40.74031887932881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a3ebd851ab%3A0xa16401c174b5cecb!2sSound+Lounge!5e0!3m2!1sen!2sus!4v1479156605483" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="small-12 large-6 column map-meta-container" data-equalizer-watch>
			<div class="map-meta">
				<h3>On Camera Casting Director</h3>
				<h4>Anthony Pichette</h4>
				
				<?php $email_address = antispambot( 'anthony@sidecarcasting.com' ); ?>
				
				<p><a href="mailto:<?php echo $email_address; ?>"><?php echo $email_address; ?></a></p>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="small-12 column text-center">
			<p>&copy; Copyright Sidecar Casting <?php echo date( 'Y' ); ?>. All Rights Reserved.</p>
		</div>
	</div>
	
</section>

<?php get_footer(); ?>