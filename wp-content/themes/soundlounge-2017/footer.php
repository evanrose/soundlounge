</main>

<footer>
    <div class="row footer-content">
        <div class="small-12 columns" style="float: none;">
            <ul class="small-block-grid-2 medium-block-grid-4">
            	<li>
	            	<h6>Menu</h6>
	            	<?php sl_footer_menu(); ?>
	            </li>
	            <li>
	            	<h6>Address</h6>
	            	<p><a href="http://goo.gl/mbLZf1">149 Fifth Avenue 13th Flr<br>New York, NY 10010</a></p>
	            </li>
	            <li class="contact">
	            	<h6>Contact</h6>
	            	<p><a class="telephone-link" href="tel:1-212-388-1212">212.388.1212</a></p>
	            	<div class="email-icon-container">
						<a class="email-address" href="mailto:<?php echo antispambot( 'producers@soundlounge.com' ); ?>">
							<span class="icon-container"><span class="icon social-icon email-icon"></span></span><span class="text">Producers</span></a>
					</div>
					<div class="email-icon-container">
						<a class="email-address" href="mailto:<?php echo antispambot( 'careers@soundlounge.com' ); ?>">
							<span class="icon-container"><span class="icon social-icon email-icon"></span></span><span class="text">Careers</span>
						</a>
					</div>
	            </li>
	            <li>
	            	<h6>Services</h6>
	            	<ul>
	            		<li><a href="/what-we-do/#Commercials">Commercial + Radio</a></li>
	            		<li><a href="/what-we-do/#Casting">Casting</a></li>
	            		<li><a href="/what-we-do/#Film">Film + Television + ADR</a></li>
	            		<li><a href="/what-we-do/#Sound">Sound Design</a></li>
	            		<li><a href="/what-we-do/#Remote">Remote Services</a></li>
	            	</ul>
	            </li>
	            <!-- <li>
	            	<div class="row collapse social-row">
						<div class="small-6 columns">
							<a href="https://www.facebook.com/SoundLoungeNY/" target="_blank"><span class="icon social-icon social-facebook"></span></a>
						</div>
						<div class="small-6 columns">
							<a href="https://twitter.com/soundloungeny" target="_blank"><span class="icon social-icon social-twitter"></span></a>
						</div>
					</div>
					<div class="row collapse social-row">
						<div class="small-6 columns">
							<a href="https://www.instagram.com/soundloungeny/" target="_blank"><span class="icon social-icon social-instagram"></span></a>
						</div>
						<div class="small-6 columns">
							<a href="https://www.linkedin.com/company/sound-lounge" target="_blank"><span class="icon social-icon social-linkedin"></span></a>
						</div>
					</div>
				</li> -->
			</ul>
        </div>

	    <div class="small-12 horiz-social-row medium-4 medium-centered columns">
			<ul class="small-block-grid-4">
				<li><a href="https://www.facebook.com/SoundLoungeNY/" target="_blank"><span class="icon social-icon social-facebook"></span></a></li>
				<li><a href="https://twitter.com/soundloungeny" target="_blank"><span class="icon social-icon social-twitter"></span></a></li>
				<li><a href="https://www.instagram.com/soundloungeny/" target="_blank"><span class="icon social-icon social-instagram"></span></a></li>
				<li><a href="https://www.linkedin.com/company/sound-lounge" target="_blank"><span class="icon social-icon social-linkedin"></span></a></li>
			</ul>
	    </div>

       <div class="small-12 column text-center">
			<p>&copy; 2008-<?php echo date( 'Y' ); ?>. All rights reserved.</p>
		</div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html> 