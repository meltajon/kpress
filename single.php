<?php get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php if(has_post_thumbnail()) { ?>
			<div id="billboard" class="billboard-width block">				
				<?php echo the_post_thumbnail('billboard-image'); ?>
			</div><!-- #billboard -->
			<?php } ?>

			<?php get_template_part( 'content', 'grid100' ); ?>

		<?php endwhile; ?>

	<?php else : ?>

		<article id="post-0">
			<header class="module-header">
				<h1 class="module-title">Page Not Found</h1>
			</header><!-- .module-header -->

			<div class="module-content">
				<p>It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.</p>
				<?php get_search_form(); ?>
			</div><!-- .module-content -->
		</article><!-- #post-0 -->

	<?php endif; ?>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>