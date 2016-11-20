<?php get_header(); ?>

<?php setup_postdata( $post ); ?>

<section class="person-page">
	<div class="row">
		<div class="small-12 column text-right">
			<a href="/news/"><span class="icon-container icon-container-20"><span class="icon close-icon"></span></span></a>
		</div>
	</div>
	<div class="row">
		<div class="small-12 large-5 column">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="small-12 large-7 column">
			<div class="row">
				<div class="small-12 column">
					<h2><?php the_title(); ?></h2>
					<div class="people-meta">
						<?php if ( get_field( 'sub_headline' ) ) { ?>
							<h5><?php the_field( 'sub_headline' ); ?></h5>
						<?php } ?>
						<p><?php the_content(); ?></p>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>