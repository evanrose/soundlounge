<?php get_header(); ?><?php while(have_posts()) : the_post(); ?>

<section class="contact-page">

	<?php get_template_part( 'tpl', 'title' ); ?>

	<div class="row social-row text-center">
		<div class="small-11 small-centered large-offset-7 large-5 columns">
			<ul class="small-block-grid-4">
				<li><a href="https://www.facebook.com/SoundLoungeNY/" target="_blank"><span class="icon social-icon social-facebook"></span></a></li>
				<li><a href="https://twitter.com/soundloungeny" target="_blank"><span class="icon social-icon social-twitter"></span></a></li>
				<li><a href="https://www.instagram.com/soundloungeny/" target="_blank"><span class="icon social-icon social-instagram"></span></a></li>
				<li><a href="https://www.linkedin.com/company/sound-lounge" target="_blank"><span class="icon social-icon social-linkedin"></span></a></li>
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

				<div class="small-12 column">
					<h3 class="text-center">Join our newsletter:</h3>

<!--[if lte IE 8]>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
<![endif]-->
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
<script>
 hbspt.forms.create({ 
   css: '',
   portalId: '38071',
   formId: '4a8c454e-32ea-4c1c-90e5-fd574ee78e80'
 });
</script>					
				</div>
			</div>
		</div>
	</div>
	<div class="row column" style="float: none;">
		<div class="small-12  google-maps">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9866679609718!2d-73.99241818459426!3d40.74031887932881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a3ebd851ab%3A0xa16401c174b5cecb!2sSound+Lounge!5e0!3m2!1sen!2sus!4v1479156605483" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
	
</section>

<?php endwhile; ?><?php get_footer(); ?>