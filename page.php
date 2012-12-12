<?php get_header(); ?>

		<div id="page" class="grid75 block content">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'grid75' ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #page -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>