<article id="post-<?php the_ID(); ?>" class="billboard-width block">
	<header class="aside-header">
		<h1 class="aside-title title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'toolbox' ), the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></a></h1>
	</header><!-- .aside-header -->
	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="aside-excerpt">
		<?php the_excerpt(); ?>
	</div><!-- .aside-excerpt -->
	<?php else : ?>
	<div class="aside-body">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'toolbox' ) ); ?>
	</div><!-- .aside-body -->
	<footer id="aside-footer">
		<p class="read-more"><a href="#">Read more...</a></p>
	</footer><!-- #aside-footer -->
	<?php endif; ?>
</article><!-- .block -->

<aside class="thumb-width block">
	<header class="aside-header">
		<h1 class="aside-title title"><a href="#">Article Title</a></h1>
	</header><!-- .aside-header -->
	<div class="aside-body">
		<p>In West Philadelphia, born and raised, on the playground is where I spent most of my days. Chillin' out back, relaxin', all cool. All shootin' some bball, outside of the school.</p>
	</div><!-- .aside-body -->
	<footer id="aside-footer">
		<p class="read-more"><a href="#">Read more...</a></p>
	</footer><!-- #aside-footer -->
</aside><!-- .quarter -->