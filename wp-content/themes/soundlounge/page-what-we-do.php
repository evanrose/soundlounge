<?php get_header(); ?><?php while(have_posts()) : the_post(); ?>

<section class="what-we-do">
	
	<?php get_template_part( 'temp', 'title' ); ?>

<div class="row small-12 wwd-tabs">
	<div class="columns">
		<form class="select-style show-for-small-only">
	        <select>
	        	<option value="service1"><?php echo the_field( '_tab_1_title'); ?></option>
		        <option value="service2">Service 2</option>
		        <option value="service3">Service 3</option>
		        <option value="service4">Service 4</option>
		        <option value="service5">Service 5</option>
    		</select>
    	</form>
		
		<ul class="tabs show-for-medium-up" data-tab role="tablist">


			<?php 
				$i = 1;
				while( $i <= 5 ) {
					$tab_index = $i-1;
    				echo '<li class="test tab-title active" role="presentation"><a href="#panel2-' . $i . '" role="tab" tabindex="' . $tab_index . '" aria-selected="true" aria-controls="panel2-' . $i . '">';
					$field_name = 'tab_' . $i . '_title';
					the_field( $field_name );
    				echo '</a></li>';
    				$i++;
				} 
			?>

		</ul>

		<div class="tabs-content small-12 large-10 row">
			
			<?php 
				$i = 1;
				while( $i <= 5 ) {
					$tab_index = $i-1;

					$field_name = 'tab_' . $i . '_title';
					get_field( $field_name );

					?>

					<section role="tabpanel" aria-hidden="false" class="content <?php if ( $i == 1 ) echo 'active'; ?>" id="panel2-<?php echo $i; ?>">
						<div class="row columns">
							<div class="small-8 column end">
								<?php $tab_title = 'tab_' . $i . '_title'; ?>
								<h2><?php the_field( $tab_title ); ?></h2>
						</div>
						<div class="row columns">
							<div class="small-8 medium-6 column">
								
								<?php $tab_copy = 'tab_' . $i . '_copy'; ?>
								<?php the_field( $tab_copy ); ?>
							</div>
							<div class="small-4 show-for-small-only"></div>
							<div class="small-8 medium-6 column">

								<?php $tab_bullets = 'tab_' . $i . '_bullets'; ?>

								<?php $the_bullets = explode( "\n", get_field( $tab_bullets ) ); ?>

								<?php foreach( $the_bullets as $key => $value  ) {

									echo '<div class="plus-icon-container">';
									echo '<span class="icon-container"><span class="icon plus-icon"></span></span>';
									echo '<span class="text plus-text">';
									echo str_replace( '<br />', '', $value );
									echo '</span>';
									echo '</div>';
									}
								?>
							</div> 
							<div class="small-4 show-for-small-only"></div>
						</div>
					</section>		
					<?php
					
					$i++;
				} 
			?>

		</div>

		<div class="row">
			<div class="small-12 about-slider columns">
				<h2 class="">This is our space.</h2>
				<ul class="about-slider oribit" data-orbit data-options="animation:slide;
				                  pause_on_hover:true;
				                  animation_speed:500;
				                  navigation_arrows:true;
				                  bullets:false;
					              timer:false;
						          slide_number:false;">
					<li>
						<img src="https://placeholdit.imgix.net/~text?txtsize=33&amp;txt=our%20space&amp;w=1280&amp;h=720" />
					</li>
					<li>
						<img src="https://placeholdit.imgix.net/~text?txtsize=33&amp;txt=our%20space&amp;w=1280&amp;h=720" />
					</li>
					<li>
						<img src="https://placeholdit.imgix.net/~text?txtsize=33&amp;txt=our%20space&amp;w=1280&amp;h=720" />
					</li>
					<li>
						<img src="https://placeholdit.imgix.net/~text?txtsize=33&amp;txt=our%20space&amp;w=1280&amp;h=720" />
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

</section>

<?php endwhile; ?><?php get_footer(); ?>
