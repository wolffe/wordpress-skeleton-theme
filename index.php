<?php get_header(); ?>

<div>
	<?php while (have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</div>
	<?php endwhile; ?>

	<div id="nav-below" class="navigation">
		<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'sandbox' )) ?></div>
		<div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox' )) ?></div>
	</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
