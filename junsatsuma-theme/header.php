<!doctype html>

<html <?php language_attributes(); ?> class="no-js">

	<head>
		<meta charset="utf-8">

		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<link rel='stylesheet' id='junsatsuma-custom'  href='<?php echo esc_url( get_template_directory_uri() . '/custom.css' ); ?>' type='text/css' media='all' />
		<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() . '/images/favicon.ico' ); ?>" type="image/vnd.microsoft.icon" />
		<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() . '/images/favicon.ico' ); ?>" type="image/vnd.microsoft.icon" />
		<meta property="fb:app_id" content="246337272193151" />

		<!-- theme options from options panel -->
		<?php get_wpbs_theme_options(); ?>

		<!-- typeahead plugin - if top nav search bar enabled -->
		<?php require_once('library/typeahead.php'); ?>
				
	</head>
	
	<body <?php body_class(); ?>>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=246337272193151";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
				
		<header role="banner">
		
			<div id="inner-header" class="clearfix">
				
				<div class="navbar navbar-fixed-top">
					<div class="navbar-inner">
						<div class="container-fluid nav-container">
							<nav role="navigation">
								<a class="brand" id="logo" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>">
									<?php if(of_get_option('branding_logo','')!='') { ?>
										<img src="<?php echo of_get_option('branding_logo'); ?>" alt="<?php echo get_bloginfo('description'); ?>">
										<?php }
										if(of_get_option('site_name','1')) bloginfo('name'); ?></a>
								
								<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
								</a>
								
								<div class="nav-collapse">
									<?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
								</div>
								
							</nav>
							
							<?php if(of_get_option('search_bar', '1')) {?>
							<form class="navbar-search pull-right" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
								<input name="s" id="s" type="text" class="search-query" autocomplete="off" placeholder="<?php _e('Search','bonestheme'); ?>" data-provide="typeahead" data-items="4" data-source='<?php echo esc_attr( $typeahead_data ); ?>'>
							</form>
							<?php } ?>
							
						</div> <!-- end .nav-container -->
					</div> <!-- end .navbar-inner -->
				</div> <!-- end .navbar -->
			
			</div> <!-- end #inner-header -->
		
		</header> <!-- end header -->
		
		<div class="container-fluid">
