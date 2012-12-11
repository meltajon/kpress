<?php get_header(); ?>

	<div id="error-404" class="content">

		<article id="post-0" class="grid100 module block">
			<header id="error-404-header" class="module-header">
				<h1 id="error-404-title" class="module-title"><?php _e( 'Page Not Found', 'toolbox' ); ?></h1>
			</header>

			<div id="error-404-body" class="module-content">
				<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.', 'toolbox' ); ?></p>

				<?php get_search_form(); ?>

				<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

				<div class="widget">
					<h2 class="widgettitle"><?php _e( 'Most Used Categories', 'toolbox' ); ?></h2>
					<ul>
					<?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10 ) ); ?>
					</ul>
				</div>

				<?php
				/* translators: %1$s: smilie */
				$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'toolbox' ), convert_smilies( ':)' ) ) . '</p>';
				the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
				?>

				<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

			</div><!-- .entry-content -->
		</article><!-- #post-0 -->

	</div><!-- .content -->

<?php get_footer(); ?>