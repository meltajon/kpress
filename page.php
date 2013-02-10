<?php get_header(); ?>

		<div id="page" class="grid75 content module clearfix">
			<div class="block clearfix">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'grid75' ); ?>

			<?php endwhile; // end of the loop. ?>
			</div><!-- .block -->

		</div><!-- #page -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>