<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<?php wp_head(); ?>
</head>

<body>
<!-- <h1><?php bloginfo( 'name' ); ?></h1><h2><?php bloginfo( 'description' ); ?></h2> -->

<div class="full navigation">
	<div class="row">
		<nav class="top-bar" data-topbar role="navigation">
		    <ul class="title-area"> 
		        <li class="name"> 
		            <h1><a href="#">Logo</a></h1> 
		        </li> 
		         <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li><!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone --> 
		    </ul> 
		    
		    <section class="top-bar-section">
		    	<?php echo sl_nav_menu(); ?>
		        <!-- <ul class="right">     
		            <li class="active"><a href="#">Work</a></li>
				    <li><a href="#">People</a></li>
				    <li><a href="#">What We Do</a></li>
				    <li><a href="#">Gallery</a></li>
				    <li><a href="#">Contact</a></li>
		        </ul>
				-->
		    </section> 
		</nav>
	</div>
</div>

<hr />
