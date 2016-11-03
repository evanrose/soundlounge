<?php get_header(); ?><?php while(have_posts()) : the_post(); ?>

<section class="">

	<?php get_template_part( 'temp', 'title' ); ?>

	<div class="row social-row text-center">
		<div class="small-11 small-centered large-offset-7 large-5 columns">
			<ul class="small-block-grid-4">
				<li><span class="icon social-icon social-facebook"></span></li>
				<li><span class="icon social-icon social-twitter"></span></li>
				<li><span class="icon social-icon social-instagram"></span></li>
				<li><span class="icon social-icon social-linkedin"></span></li>
			</ul>
		</div>
	</div>

	<div class="row principals-row centered">
		<div class="small-12 medium-6 large-4 columns">
			<h3 class="contact-name">contact-name</h3>
			<span class="green">contact-title</span>
			<span class="contact-title">contact-email</span>
		</div>
			<div class="small-12 medium-6 large-4 columns">
			<h3 class="contact-name">contact-name</h3>
			<span class="blue">contact-title</span>
			<span class="contact-title">contact-email</span>
		</div>
		<div class="small-12 medium-6 medium-centered large-4 large-uncentered columns">
			<h3 class="contact-name">contact-name</h3>
			<span class="pink">contact-title</span>
			<span class="contact-title">contact-email</span>
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