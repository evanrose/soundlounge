<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
<?php wp_head(); ?>
<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/bower_components/modernizr/modernizr.js"></script>
</head>
<body <?php body_class(); ?>>

<!-- nav -->

<div class="navigation">
	<div class="row">
		<nav class="top-bar" data-topbar role="navigation">
		    <ul class="title-area"> 
		        <li class="name"> 
		            <h1><a href="/"><img class="logo" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/logo.png" alt="Sound Lounge" title="Sound Lounge"></a></h1> 
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