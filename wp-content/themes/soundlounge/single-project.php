<?php get_header(); ?>

<?php 
	$roles = wp_get_post_terms( $post->ID, 'role');
	$roles = wp_list_pluck( $roles, 'name' );
	$roles = array_diff( $roles, array( 'Featured' ) );
?>

<section class="project-page">
	<div class="row">
		<div class="small-12 column text-right">
			<a href="/work/"><span class="icon-container icon-container-20"><span class="icon close-icon"></span></span></a>
		</div>
	</div>
	<div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
		<div class="modal-wrapper row small-12 large-10">
			<div class="video-wrapper">
			  <iframe id="myModal"  src="https://player.vimeo.com/video/150474666?color=df5840&amp;title=0&amp;portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
			<div class="modal-info">
				<h3><?php the_title(); ?></h3>
			</div>
			<div class="project-share small-12 medium-4"> 
				<a class="social-place facebook">f</a>
				<a class="social-place linked">l</a>
			</div>
		</div>
	</div>


	<div class="row row-full">
		<div class="small-12 column">
			<div class="video-wrapper">
		  		<iframe id="myModal"  src="https://player.vimeo.com/video/<?php the_field( 'vimeo-id' ); ?>?color=df5840&amp;title=0&amp;portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<div class="row row-full">
		<div class="small-12 medium-6 column project-meta">
			<h3><?php the_title(); ?></h3>
			<h4><?php echo implode(' &#149; ', $roles); ?></h4>
			<?php if ( get_field( 'awards' ) ) { ?>
				<h4><?php the_field( 'awards' ); ?></h4>
			<?php } ?>

		</div>
		<div class="small-12 medium-6 column project-meta">
			<div class="row">
				<div class="small-12 column medium-text-right">
					<a class="button tiny secondary" href="/work/">More Work</a>
				</div>
				<div class="small-12 column medium-text-right" style="">
					<small class="sharify-text">Share:</small> <?php echo do_shortcode( '[sharify]' ); ?> 
				</div>
			</div>
		</div>
	</div>

</section>

<?php get_footer(); ?>
