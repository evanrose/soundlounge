<?php get_header(); ?>

<script type="text/javascript">window.page = "projects";</script>

<section class="projects-page">

	<?php while(have_posts()) : the_post(); ?>
		<?php get_template_part( 'tpl', 'title' ); ?>
	<?php endwhile; ?>

	<div class="row">
	    <div class="small-12 medium-4 medium-centered columns ">
			<div class="select">
				<select onChange="loadItems(this.value, window.page)">
				<option value="featured">Featured</option>
				<option value="commercial-mix">Commercial Mix</option>
				<option value="long-format-mix">Long Format Mix</option>
				<option value="casting">Casting</option>
				<option value="radio">Radio</option>
				<option value="all">All</option>
				</select>
			</div>
	    </div>
	</div>
	<div id="projects" class="row row-projects collapse" data-equalizer data-options="equalize_on_stack: true">
	</div>

</section>

<?php get_footer(); ?>