<?php get_header(); ?>

		<section id="archives" class="content">

		<?php if ( have_posts() ) : ?>

			<header id="archives-header" class="module-header">
				<h1 id="archives-title" class="module-title block">
					Posted 
					<?php if ( is_day() ) : ?>
						<span><?php print get_the_date(); ?></span>
					<?php elseif ( is_month() ) : ?>
						<span><?php print get_the_date( 'F Y' ); ?></span>
					<?php elseif ( is_year() ) : ?>
						in <span><?php print get_the_date( 'Y' ); ?></span>
					<?php endif; ?>
				</h1>
			</header>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; ?>

		<?php else : ?>

			<article id="post-0" class="module">
				<header class="module-header">
					<h1 class="module-title">Nothing Found</h1>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<p>It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.</p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		<?php endif; ?>

		</section><!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>