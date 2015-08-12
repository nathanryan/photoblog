<?php get_header(); ?>

<div class="container">
	<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container" style="color:white;">
        <h1>Jenny Ryan Photography Blog</h1>
		<p>Here you will find a variety of photographs including Astronomy, Wildlife and Nature.</p>
		<p>You will also find photographs that have been featured on Irish television such as TV3 and 3e.</p>
		<p><a class="btn btn-lg btn-primary" href="<?php bloginfo('template_url'); ?>/gallery/" role="button">View Gallery</a></p>
      </div>
    </div>
</div>
	<div class="container">
	<!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="<?php bloginfo('template_directory'); ?>/img/avi.jpg" alt="avi" width="200" height="200">
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-6" style="background-color: #f6f6f6;">
          <h2>About</h2>
          <p>Hi, I'm Jenny Ryan</p>
		  <p>Photography is my hobby and I love Wildlife and Astronomy</p>
          <p><a class="btn btn-default" href="<?php bloginfo('template_url'); ?>/contact/" role="button">Contact</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
	</div>

<?php get_footer(); ?>