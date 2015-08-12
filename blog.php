<?php
/**
 * Template Name: Blog Page Template BS3
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
		<h1>Blog Posts</h1>
      </div>
	</div>

	<div class="container">
	<?php
		query_posts('posts_per_page=1');
		while(have_posts()) : the_post(); ?>
		
		<div class="panel panel-default panel-body">
			<h2>Latest Post:</h2>
			<h2><a href= "<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p><?php the_excerpt(); ?></p>
		</div>
	</div>
	
	<?php endwhile; wp_reset_query(); ?>
	
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
			
				<div class="panel panel-default">
					<div class="panel-body">
						<?php 
						query_posts('posts_per_page=10');
						while(have_posts()) : the_post(); ?>
			
						<h3><a href= "<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p><?php the_excerpt(); ?></p>
						<p class="text-muted">Posted by <?php the_author(); ?> on <?php the_time('F jS, Y'); ?></p>
			
						<?php endwhile; wp_reset_query(); ?>
					</div>
				</div>
				
			</div>
			<div class="col-lg-3">
				<div class="list-group">
					<div class="list-group"><h4 class="list-group-item-heading">Other Posts</h4>
						<?php query_posts('posts_per_page=8'); while(have_posts()) : the_post(); ?>
						<a href="<?php the_permalink(); ?>" class="list-group-item">
							<h4 class="list-group-item-heading"><?php the_title(); ?></h4>
							<p class="list-group-item-text">Posted by <?php the_author(); ?> on <?php the_time('F jS, Y'); ?></p>
						</a>
						<?php endwhile; wp_reset_query(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>