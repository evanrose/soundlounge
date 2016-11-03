<?php get_header(); ?>

<?php 
	$roles = wp_get_post_terms( $post->ID, 'role');
	$roles = wp_list_pluck( $roles, 'name' );
	
 ?>

<section class="project-page">

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
			<h5><?php echo implode(' &#149; ', $roles); ?></h5>
			<?php if ( get_field( 'awards' ) ) { ?>
				<p><?php the_field( 'awards' ); ?></p>
			<?php } ?>
		</div>
		<div class="small-12 medium-6 column project-meta">
			<div class="row">
				<div class="small-12 medium-9 column medium-text-right">
					<a class="button" href="/work/">More Work</a>
				</div>
				<div class="small-12 medium-3 column">
					<span class="icon-container"><span class="icon arrow-icon"></span></span>
				</div>
			</div>
		</div>


	</div>

</section>

<?php get_footer(); ?>
