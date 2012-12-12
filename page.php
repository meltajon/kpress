<?php get_header(); ?>

		<div id="page" class="content">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #page -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>