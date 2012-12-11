<?php get_header(); ?>
	<div id="home" class="content">
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'grid100' ); ?>

		<?php endwhile; ?>

	<?php else : ?>

		<article id="post-0">
			<header class="entry-header">
				<h1 class="entry-title">Page Not Found</h1>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<p>It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.</p>
				<?php get_search_form(); ?>
			</div><!-- .entry-content -->
		</article><!-- #post-0 -->

	<?php endif; ?>
	</div><!-- #articles -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>