<article id="post-<?php the_ID(); ?>" class="grid75 block">
	<header class="aside-header">
		<a class="aside-thumb" href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'toolbox' ), the_title_attribute( 'echo=0' ) ); ?>">
			<?php if(has_post_thumbnail()) {
				echo the_post_thumbnail('large');
				}
			?>
		</a>
		<h1 class="aside-title title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'toolbox' ), the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></a></h1>
	</header><!-- .aside-header -->

	<?php if ( is_single() || is_page() ) : ?>
	<div class="aside-body">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'toolbox' ) ); ?>
	</div><!-- .aside-body -->
	<?php else : ?>
	<div class="aside-excerpt">
		<?php the_excerpt(); ?>
	</div><!-- .aside-excerpt -->
	<footer id="aside-footer">
		<p class="read-more"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'toolbox' ), the_title_attribute( 'echo=0' ) ); ?>">Read more...</a></p>
	</footer><!-- #aside-footer -->
	<?php endif; ?>
</article><!-- .block -->