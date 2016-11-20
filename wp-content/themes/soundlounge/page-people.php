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
				<option value="mix">Mixers</option>
				<option value="tele">Film + Television + ADR</option>
				<option value="cast">Casting</option>
				<option value="prod">Producers</option>
				<option value="part">Partners</option>
			</select>
			</div>
	    </div>
	</div>
	<div class="row row-people">
		<div id="people" class="small-12 columns">


		</div>
	</div>

</section>

<?php get_footer(); ?>