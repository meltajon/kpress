<article id="post-<?php the_ID(); ?>" class="grid33 module block">
	<header class="module-header">
		<a class="module-thumb" href="<?php the_permalink(); ?>" title="Full Post: <?php the_title_attribute('echo=0'); ?>">
			<?php if(has_post_thumbnail()) {
				echo the_post_thumbnail('small-image');
				}
			?>
		</a>
		<h1 class="module-title title"><a class="title-link" href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'toolbox' ), the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></a></h1>
	</header><!-- .module-header -->
	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="module-excerpt">
		<?php the_excerpt(); ?>
	</div><!-- .module-excerpt -->
	<?php else : ?>
	<div class="module-body">
		<?php the_content('Continue reading <span class="meta-nav">&rarr;</span>'); ?>
	</div><!-- .module-body -->
	<footer id="module-footer">
		<p class="read-more"><a class="more-link" href="<?php the_permalink(); ?>" title="Full Post: <?php the_title_attribute( 'echo=0' ) ); ?>">Read more...</a></p>
	</footer><!-- #module-footer -->
	<?php endif; ?>
</article><!-- .block -->