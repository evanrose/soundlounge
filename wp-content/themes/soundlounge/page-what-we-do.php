<?php get_header(); ?><?php while(have_posts()) : the_post(); ?>

<section class="what-we-do">
	
	<?php get_template_part( 'tpl', 'title' ); ?>

<div class="row small-12 wwd-tabs">
	<div class="columns">
		<form class="select-style show-for-small-only">
	        <select>
	        	<option value="service1">Service 2</option>
		        <option value="service2">Service 2</option>
		        <option value="service3">Service 3</option>
		        <option value="service4">Service 4</option>
		        <option value="service5">Service 5</option>
    		</select>
    	</form>
		
		<ul class="tabs show-for-medium-up" data-tab role="tablist" data-options="deep_linking: true; scroll_to_content: true">


			<?php 
				$i = 1;
				while( $i <= 5 ) {

					$tab_title_field = 'tab_' . $i . '_title';
					$tab_title = get_field( $tab_title_field );
					$tab_title_slug = explode( ' ', $tab_title );

					if ( $i == 1 ) {
						$active = 'active';
						$selected = 'true';
						//echo 'true';
					}
					else {
						$active = 'not-active';
						$selected = 'false';
					}

					$tab_index = $i-1;
    				echo '<li class="tab-' . $i . ' tab-title ' . $active . '" role="presentation"><a href="#' . $tab_title_slug[0] . '" role="tab" tabindex="' . $tab_index . '" aria-selected="' . $selected . '" aria-controls="' . $tab_title_slug[0] . '">';
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

					$tab_title_field = 'tab_' . $i . '_title';
					$tab_title = get_field( $tab_title_field );
					$tab_title_slug = explode( ' ', $tab_title );

					?>

					<section role="tabpanel" aria-hidden="false" class="content <?php echo $tab_title_field; ?> <?php if ( $i == 1 ) echo 'active'; ?>" id="<?php echo $tab_title_slug[0]; ?>">
						
						<div class="row columns">
							<div class="small-8 large-12 column end">
								<h2 class=""><?php echo $tab_title; ?></h2>
						</div>
						
						<div class="small-12 column">
						<div class="row">

							<!-- left 1 -->
							<div class="small-12 medium-6 column">
								
								<?php $tab_copy = 'tab_' . $i . '_copy'; ?>
								<?php the_field( $tab_copy ); ?>
							
							</div>

							<!-- right 1 -->
							<div class="small-12 medium-6 column">

								<?php $tab_copy = 'tab_' . $i . '_copy_2'; ?>
								<?php $has_2 = get_field( $tab_copy ); ?>
								<?php if ( $has_2 ) { ?>
									<?php the_field( $tab_copy ); ?>
								<?php } else { ?>

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
								<?php } ?>	
							</div>
						</div>
					</div>

						<?php if ( $has_2 ) { ?>

							<div class="small-12 column">
							<div class="row">

								<!-- left 2 -->
								
								<div class="small-12 medium-6 column">
									
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

								<!-- right 2 -->
								
								<div class="small-12 medium-6 column">

									<?php $tab_bullets = 'tab_' . $i . '_bullets_2'; ?>

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
							</div>
							</div>

						<?php } ?>

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
						<img src="https://placeholdit.imgix.net/~text?txtsize=33&amp;w=1280&amp;h=720" />
					</li>
					<li>
						<img src="https://placeholdit.imgix.net/~text?txtsize=33&amp;w=1280&amp;h=720" />
					</li>
					<li>
						<img src="https://placeholdit.imgix.net/~text?txtsize=33&amp;w=1280&amp;h=720" />
					</li>
					<li>
						<img src="https://placeholdit.imgix.net/~text?txtsize=33&amp;w=1280&amp;h=720" />
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

</section>

<?php endwhile; ?><?php get_footer(); ?>
