<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'toolbox' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel='stylesheet' type="text/css" media='all' href='<?php bloginfo('stylesheet_directory'); ?>/reset.css' />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel='stylesheet' type="text/css" media='all' href='<?php bloginfo('stylesheet_directory'); ?>/style-diagnostic.css' />
<link rel='stylesheet' type="text/css" media='screen and (max-width: 480px)' href='<?php bloginfo('stylesheet_directory'); ?>/style-480.css' />
<link rel='stylesheet' type="text/css" media='screen and (min-width: 481px) and (max-width: 720px)' href='<?php bloginfo('stylesheet_directory'); ?>/style-720.css' />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.instagram.js"></script>

<script>
  $(document).ready(function() {
    
    $("#instagram-body").instagram({
		clientId: 'e6d996c45321483aa432af79bfa7497c',
		// userId: '235097719',
		hash: "foodromance",
		show: 9,
		image_size: 'thumbnail'
    });

  });
</script>

</head>

<body <?php body_class(); ?>>
	
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=425764234139189";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<section id="top">
		<div class="wrapper">
			<nav id="social-links" class="align-right">
				<a class="social-link" href="#"><img class="social-icon" src="<?php bloginfo('template_directory'); ?>/images/icon-facebook.png" /></a>
				<a class="social-link" href="#"><img class="social-icon" src="<?php bloginfo('template_directory'); ?>/images/icon-twitter.png" /></a>
				<a class="social-link" href="#"><img class="social-icon" src="<?php bloginfo('template_directory'); ?>/images/icon-instagram.png" /></a>
				<a class="social-link" href="#"><img class="social-icon" src="<?php bloginfo('template_directory'); ?>/images/icon-youtube.png" /></a>
				
				<form id="search-form" method="get" action="<?php bloginfo('home'); ?>"> 
					<input type="hidden" />
					<input class="s" type="text" value="<?php echo wp_specialchars($s);  ?>" name="s" size="18" placeholder="Search"/>
				</form><!-- #searchform -->
				
			</nav><!-- #social-links -->
		</div><!-- .wrapper -->
	</section><!-- #top -->

	<header id="header" class="wrapper">
		<div class="wrapper">
			<hgroup class="grid100 module">
				<div class="block">
					<h1 id="site-title"><a id="home-link" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img id="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.gif" alt="<?php bloginfo( 'name' ); ?> Logo" /></a></h1>
					<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
				</div><!-- .block -->
			</hgroup><!-- .module -->
		</div><!-- .wrapper -->

		<nav id="main-nav" class="nav">
			<div class="wrapper">
				<div class="grid100 module">
				<?php wp_nav_menu( 
					array( 
						// 'theme_location'  => 'primary',
						'menu'            => 'Primary', 
						'container'       => false, 
						// 'container_class' => '', 
						// 'container_id'    => '',
						'menu_class'      => 'block menu-list', 
						'menu_id'         => 'main-menu-list',
						// 'echo'            => true,
						// 'fallback_cb'     => 'wp_page_menu',
						// 'before'          => '<li class="nav-item">',
						// 'after'           => '</li>',
						'link_before'     => '',
						'link_after'      => '',
						// 'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 1,
						// 'walker'          => ''
						) 
					); 
				?>
				</div><!-- .module -->
			</div><!-- .wrapper -->
		</nav><!-- #main-nav -->
	</header><!-- #header -->

	<hr />

	<div id="main" class="clearfix">
		<div class="wrapper">