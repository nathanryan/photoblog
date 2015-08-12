<!DOCTYPE html>
<html>
	<head>
		<title><?php wp_title(' | Jenny Ryan', true, 'right'); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- JS Files -->
		<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
		
		<!-- Include JQuery -->
		<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
		<!-- Quicksand Plugin -->
		<script src="<?php bloginfo('template_url'); ?>/js/jquery.quicksand.js"></script>
		<!-- Fancybox js -->
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/fancybox/jquery.fancybox-buttons.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/fancybox/jquery.fancybox-media.js?v=1.0.6"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/fancybox/jquery.fancybox-thumbs.js?v=1.0.7"></script>	
		
		<!-- CSS Files -->
		<link href = "<?php bloginfo('stylesheet_url'); ?>" rel = "stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/carousel.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/gallery.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" />
		
		<!-- Add fancyBox CSS -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fancybox/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fancybox/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
		
		<?php wp_head(); ?>
	</head>
	<body>
	<div class="navbar-wrapper">
      <div class="container">
			<div class = "navbar navbar-inverse navbar-fixed-top">
				<div class = "container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand">Jenny Ryan</a>
					</div>
					<div class="navbar-collapse collapse navbar-right">
							
						
						<?php
							wp_nav_menu( array(
								'menu'              => 'primary',
								'theme_location'    => 'primary',
								'depth'             => 2,
								'menu_class'        => 'nav navbar-nav navbar-right',
								'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
								'walker'            => new wp_bootstrap_navwalker())
							);
						?>
						
					
					</div>
				</div>
			</div>
	    </div>
	</div>