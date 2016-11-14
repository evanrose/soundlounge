<?php get_header(); ?><?php while(have_posts()) : the_post(); ?>

<section class="contact-page">

	<?php get_template_part( 'tpl', 'title' ); ?>

	<div class="row social-row text-center">
		<div class="small-11 small-centered large-offset-7 large-5 columns">
			<ul class="small-block-grid-4">
				<li><a href="https://www.facebook.com/SoundLoungeNY/"><span class="icon social-icon social-facebook"></span></a></li>
				<li><a href="https://twitter.com/soundloungeny"><span class="icon social-icon social-twitter"></span></a></li>
				<li><a href="https://www.instagram.com/soundloungeny/"><span class="icon social-icon social-instagram"></span></a></li>
				<li><a href="https://www.linkedin.com/company/sound-lounge"><span class="icon social-icon social-linkedin"></span></a></li>
			</ul>
		</div>
	</div>

	<div class="row principals-row centered">
		<div class="small-12 medium-6 large-4 columns">
			<h3 class="contact-name">Mike Gullo</h3>
			<h5 class="contact-title green">Executive Producer</h5>
			<span class="contact-email"><a class="email-address" href="mailto:mike@soundlounge.com">mike@soundlounge.com</a></span>
		</div>
			<div class="small-12 medium-6 large-4 columns">
			<h3 class="contact-name">Rob Browning</h3>
			<h5 class="contact-title pink">Executive Producer, Film &#149; Television</h5>
			<span class="contact-email"><a class="email-address" href="mailto:robb@soundlounge.com">robb@soundlounge.com</a></span>
		</div>
		<div class="small-12 medium-6 medium-centered large-4 large-uncentered columns">
			<h3 class="contact-name">Carrie Faverty</h3>
			<h5 class="contact-title purple">Casting Director</h5>
			<span class="contact-email"><a class="email-address" href="mailto:carrie@soundlounge.com">carrie@soundlounge.com</a></span>
		</div>
	</div>

	<div class="row form-row">
		<div class="small-12 medium-10 large-8 medium-centered column">

			<div class="row fields-row">

				<div class="small-12">
					
					<div class="small-12 column">
						<h3 class="text-center">Join our newsletter:</h3>
					</div>
					
					<div class="small-12 medium-6 column">
						<label>First Name
	        			<input type="text" placeholder="">
	      				</label>

					</div>
					<div class="small-12 medium-6 column">
						<label>Last Name
	        			<input type="text" placeholder="">
	      				</label>
					</div>
					<div class="small-12 medium-12 column">
						<label>Email Address
	        			<input type="email" placeholder="">
	      				</label>
					</div>
					<div class="small-12 show-for-small-only column">
						<input type="submit" class="button" value="Get updates!">
					</div>
					<div class="hide-for-small medium-6 column medium-centered">
						<input type="submit" class="button" value="Get updates from us!">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row map-row">
		<div classs="small-12 column">
			<img src="/wp-content/themes/soundlounge/images/map.png" alt="Map of 149 5th Ave., New York, NY 10010">
		</div>
	</div>
	
</section>

<?php endwhile; ?><?php get_footer(); ?>