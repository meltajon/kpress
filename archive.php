<?php get_header(); ?>

		<section id="archives" class="content">

		<?php if ( have_posts() ) : ?>

			<header id="archives-header" class="module-header">
				<h1 id="archives-title" class="module-title block">
					<?php
						if ( is_day() ) :
							printf( __( 'Daily Archives: %s', 'toolbox' ), '<span>' . get_the_date() . '</span>' );
						elseif ( is_month() ) :
							printf( __( 'Monthly Archives: %s', 'toolbox' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
						elseif ( is_year() ) :
							printf( __( 'Yearly Archives: %s', 'toolbox' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
						else :
							_e( 'Archives', 'toolbox' );
						endif;
					?>
				</h1>
			</header>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; ?>

		<?php else : ?>

			<article id="post-0" class="module">
				<header class="module-header">
					<h1 class="module-title"><?php _e( 'Nothing Found', 'toolbox' ); ?></h1>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'toolbox' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		<?php endif; ?>

		</section><!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>