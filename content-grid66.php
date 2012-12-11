<article id="post-<?php the_ID(); ?>" class="grid66 block">
	<header class="module-header">
		<h1 class="module-title title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'toolbox' ), the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></a></h1>
	</header><!-- .module-header -->
	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="module-excerpt">
		<?php the_excerpt(); ?>
	</div><!-- .module-excerpt -->
	<?php else : ?>
	<div class="module-body">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'toolbox' ) ); ?>
	</div><!-- .module-body -->
	<footer id="module-footer">
		<p class="read-more"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'toolbox' ), the_title_attribute( 'echo=0' ) ); ?>">Read more...</a></p>
	</footer><!-- #module-footer -->
	<?php endif; ?>
</article><!-- .block -->