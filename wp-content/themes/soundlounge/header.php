<!-- Description: Sound Lounge Theme, designed by Jackie Russo (http://jackie-russo.com/) and built by Evan Rose http://evanrose.com/ on the Foundation framework -->
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Sound Lounge, NYC based Audio Post Production Company that provides creative audio post production services for TV and Radio commercials, films, and TV series">
<meta name="keywords" content="Audio Post Production Company NYC, Sound Lounge, New York, Premier. Audio, Post, Production, Facility">
<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
<?php wp_head(); ?>
<script type="">
	// Disable scrolling to tabs
	if (location.hash) {
		setTimeout(function() {
			window.scrollTo(0, 0);
		}, 1);
	}
</script>
</head>
<body <?php body_class(); ?>><span class="js-tablet-landscape"></span>

<div class="navigation">
	<div class="row">
		<nav class="top-bar" data-topbar role="navigation">
		    <ul class="title-area"> 
		        <li class="name"> 
		            <h1><a href="/work/"><img class="logo" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/logo.png" alt="Sound Lounge" title="Sound Lounge"></a></h1> 
		        </li> 
		         <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
		    </ul> 
			<section class="top-bar-section">
				<?php echo sl_nav_menu(); ?>
		    </section>
		</nav>
	</div>
</div>

<main>