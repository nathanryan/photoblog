<?php 
/**
 * Template Name: Gallery Page Template BS3 Theme
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>


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


		<script>
			//Call Fancybox
			$(document).ready(function(){
				$(".fancybox").fancybox();
			});
		</script>
		
		
		
      <div class="container">
			<div class = "navbar navbar-inverse navbar-fixed-top">
				<div class = "container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand">Jenny Ryan</a>
					</div>
					<div class="navbar-collapse collapse navbar-right" id="bs-example-navbar-collapse-1">
							
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
	
	
    <!-- Main jumbotron for a primary marketing message or call to action -->
	 <div class="container" style="color:white">
      <div class="jumbotron">
        <h1>Gallery</h1>
      </div>
	</div>
	
	<div class="container">
	
	<!-- gallery nav -->
		<div class="navbar-wrapper">
			<div class="container" style="margin-top:250px;">
				<div class = "navbar navbar-inverse navbar-static-top">
					<div class="container">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand">Gallery</a>
							</div>
					
							<div class="navbar-collapse collapse navbar-right" id="bs-example-navbar-collapse-2">
								<ul id="galnavbar" class="nav navbar-nav">
									
								</ul>
							</div>
					</div>
				</div>
			</div>
		</div>
	<!-- gallery nav -->
		
		<div class="galcontainer">
			<section id="main">
				<ul id="gallery">
				<!-- Butterflies Bees and Flowers start -->
					<li data-tags="Butterflies Bees and Flowers, Butterflies"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/1.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/1_thumb.jpg"></a></li>
					<li data-tags="Butterflies Bees and Flowers, Butterflies"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/2.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/2_thumb.jpg"></a></li>
					<li data-tags="Butterflies Bees and Flowers, Flowers"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/3.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/3_thumb.jpg"></a></li>
					<li data-tags="Butterflies Bees and Flowers, Butterflies"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/4.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/4_thumb.jpg"></a></li>
					<li data-tags="Butterflies Bees and Flowers, Flowers"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/5.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/5_thumb.jpg"></a></li>
					<li data-tags="Butterflies Bees and Flowers, Butterflies"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/6.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/6_thumb.jpg"></a></li>
					<li data-tags="Butterflies Bees and Flowers, Butterflies"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/7.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/7_thumb.jpg"></a></li>
					<li data-tags="Butterflies Bees and Flowers, Flowers"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/8.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/8_thumb.jpg"></a></li>
					<li data-tags="Butterflies Bees and Flowers, Flowers"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/9.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/9_thumb.jpg"></a></li>
					<li data-tags="Butterflies Bees and Flowers, Flowers"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/10.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/10_thumb.jpg"></a></li>
					<li data-tags="Butterflies Bees and Flowers"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/11.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/11_thumb.jpg"></a></li>
					<li data-tags="Butterflies Bees and Flowers"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/12.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/12_thumb.jpg"></a></li>
					<li data-tags="Butterflies Bees and Flowers, Flowers"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/13.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/13_thumb.jpg"></a></li>
					<li data-tags="Butterflies Bees and Flowers, Flowers"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/14.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/14_thumb.jpg"></a></li>
					<li data-tags="Butterflies Bees and Flowers, Flowers"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/15.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/15_thumb.jpg"></a></li>
					<li data-tags="Butterflies Bees and Flowers"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/16.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/16_thumb.jpg"></a></li>
					<li data-tags="Butterflies Bees and Flowers, Flowers"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/17.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/17_thumb.jpg"></a></li>
					<li data-tags="Butterflies Bees and Flowers, Flowers"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/18.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/18_thumb.jpg"></a></li>
					<li data-tags="Butterflies Bees and Flowers, Butterflies"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/19.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/19_thumb.jpg"></a></li>
					<li data-tags="Butterflies Bees and Flowers, Flowers, Butterflies"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/20.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/butterflies_bees_flowers/20_thumb.jpg"></a></li>
				<!-- Butterflies Bees and Flowers end -->
				
				<!-- Birds start -->
					<li data-tags="Birds"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/birds/1.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/birds/1_thumb.jpg"></a></li>
					<li data-tags="Birds"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/birds/2.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/birds/2_thumb.jpg"></a></li>
					<li data-tags="Birds"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/birds/3.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/birds/3_thumb.jpg"></a></li>
					<li data-tags="Birds"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/birds/4.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/birds/4_thumb.jpg"></a></li>
					<li data-tags="Birds"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/birds/5.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/birds/5_thumb.jpg"></a></li>
					<li data-tags="Birds"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/birds/6.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/birds/6_thumb.jpg"></a></li>
					<li data-tags="Birds"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/birds/7.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/birds/7_thumb.jpg"></a></li>
					<li data-tags="Birds"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/birds/8.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/birds/8_thumb.jpg"></a></li>
					<li data-tags="Birds"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/birds/9.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/birds/9_thumb.jpg"></a></li>
					<li data-tags="Birds"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/birds/10.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/birds/10_thumb.jpg"></a></li>
					<li data-tags="Birds"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/birds/11.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/birds/11_thumb.jpg"></a></li>
					<li data-tags="Birds"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/birds/12.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/birds/12_thumb.jpg"></a></li>
					<li data-tags="Birds"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/birds/13.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/birds/13_thumb.jpg"></a></li>
					<li data-tags="Birds"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/birds/14.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/birds/14_thumb.jpg"></a></li>
					<li data-tags="Birds"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/birds/15.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/birds/15_thumb.jpg"></a></li>
					<li data-tags="Birds"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/birds/16.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/birds/16_thumb.jpg"></a></li>
					<li data-tags="Birds"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/birds/17.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/birds/17_thumb.jpg"></a></li>
					<li data-tags="Birds"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/birds/18.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/birds/18_thumb.jpg"></a></li>
					<li data-tags="Birds"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/birds/19.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/birds/19_thumb.jpg"></a></li>
					<li data-tags="Birds"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/birds/20.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/birds/20_thumb.jpg"></a></li>
				<!-- Birds end -->
					
				<!-- Seen on TV start -->
					<li data-tags="Featured on TV"><a class="fancybox" rel="group" href="<?php bloginfo('template_directory'); ?>/img/gallery/14.jpg"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/14.jpg"></a></li>
				<!-- Seen on TV end -->
				
				</ul>
		</section>
	</div>
   </div><!-- container -->


<?php get_footer(); ?>