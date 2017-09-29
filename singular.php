<?php get_header(); ?>
<div>
	<?php the_post(); ?>
	<div id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
		</div>
	</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
