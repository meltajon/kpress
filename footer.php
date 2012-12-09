	</div><!-- .wrapper -->
</section><!-- #main -->

<hr />

<footer id="footer">
	<div class="wrapper">

		<aside id="facebook-likebox" class="small-width block">
			<header class="aside-header">
				<h1 class="aside-title title"><a href="#">Facebook</a></h1>
			</header><!-- .aside-header -->
			<div class="aside-body">
				<div class="fb-like-box" data-href="http://www.facebook.com/kolabagency" data-width="300" data-show-faces="true" data-stream="false" data-header="false"></div>
			</div><!-- .aside-body -->
			<footer id="aside-footer">
				<p class="read-more"><a href="#">Read more...</a></p>
			</footer><!-- #aside-footer -->
		</aside><!-- .small-width -->
		
		<aside id="tweets" class="small-width block">
			<header id="twitter-header" class="aside-header">
				<h1 id="twitter-title" class="aside-title title"><a href="#">Twitter</a></h1>
			</header><!-- .aside-header -->
			<div id="twitter-body" class="aside-body">

			    <script src="<?php echo get_template_directory_uri(); ?>/js/chirp.min.js"></script>
				
				<script>Chirp({
					user:'kolabagency',
					max:3,
					templates: {
						base: '<ul id="tweets-list">{{tweets}}</ul>',
						tweet: '<li class="tweet"><span class="tweet-body">{{html}}</span><time class="tweet-time"><a href="http://twitter.com/{{user.screen_name}}/statuses/{{id_str}}">{{time_ago}}</a></time></li>'
					}
				})</script>

			</div><!-- .aside-body -->
			<footer id="twitter-footer" class="aside-footer">
				<p class="read-more"><a href="#">Read more...</a></p>
			</footer><!-- .aside-footer -->
		</aside><!-- .small-width -->
		
		<aside id="instagram" class="small-width block">
			<header id="instagram-header" class="aside-header">
				<h1 id="instagram-title" class="aside-title title"><a href="#">Instagram</a></h1>
			</header><!-- .aside-header -->
			<div id="instagram-body" class="aside-body">
			</div><!-- .aside-body -->
			<footer id="instagram-footer" class="aside-footer">
				<p class="read-more"><a href="#">Read more...</a></p>
			</footer><!-- #aside-footer -->
		</aside><!-- .small-width -->
	
		<nav id="footer-menu" class="menu">
			<?php wp_nav_menu( 
				array( 
					// 'theme_location'  => 'primary',
					'menu'            => 'Primary', 
					'container'       => false, 
					// 'container_class' => '', 
					// 'container_id'    => '',
					'menu_class'      => '', 
					'menu_id'         => 'menu-list',
					// 'echo'            => true,
					// 'fallback_cb'     => 'wp_page_menu',
					// 'before'          => '<li class="nav-item">',
					// 'after'           => '</li>',
					'link_before'     => '',
					'link_after'      => '',
					// 'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					// 'walker'          => ''
					) 
				); 
			?>
		</nav><!-- #access -->
		
	</div><!-- .wrapper -->
</footer><!-- #footer -->

<?php wp_footer(); ?>

</body>
</html>