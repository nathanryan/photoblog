<?php
/**
 * Template Name: Contact Page Template BS3 Theme
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

get_header(); ?>

<!-- Main jumbotron for a primary marketing message or call to action -->
	 <div class="container" style="color:white;">
      <div class="jumbotron">
		<h1>Contact</h1>
      </div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4"> 
			<?php while(have_posts()) : the_post(); ?>
				<p><?php the_content(''); ?></p>
			<?php endwhile; wp_reset_query(); ?>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>

<?php get_footer(); ?>