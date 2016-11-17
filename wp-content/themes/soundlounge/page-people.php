<?php get_header(); ?>

<script type="text/javascript">window.page = "people";</script>

<section class="people-page">

	<?php while(have_posts()) : the_post(); ?>
		<?php get_template_part( 'tpl', 'title' ); ?>
	<?php endwhile; ?>

	<div class="row">
	    <div class="small-12 medium-4 medium-centered columns select">
	    	<div class="">
			<select onChange="loadItems(this.value, window.page)">
				<option value="">All</option>
				<option value="mixer">Mixers</option>
				<option value="adr-mixer-film-television">Film + Television + ADR</option>
				<option value="casting-director">Casting</option>
				<option value="producer">Producers</option>
				<option value="partner">Partners</option>
			</select>
			</div>
	    </div>
	</div>
	<div id="people" class="row row-projects" data-equalizer data-options="equalize_on_stack: true"><!--  data-equalizer-mq="medium-up" -->

	</div>

</section>

<?php get_footer(); ?>