<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="utf-8">  
  <title><?php wp_title('|', true, 'right'); ?><?php echo get_bloginfo('name'); ?></title>
  
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!--left hand header-->
<!--navigation bar-->
  <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header" id="othernav">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php bloginfo('url'); ?>" title="Home">JAMES HELLER <p>Positive Psychology Coaching</p></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php

      $defaults = array(
        'container' => false,
        'theme_location' => 'primary-menu',
        'menu_class' => 'nav navbar-nav navbar-right'
        );

      wp_nav_menu( $defaults );

    ?>
<!--         <ul class="nav navbar-nav navbar-right">
          <li><a href="/careerandlifecoaching.html">Career + Life Coaching</a></li>
          <li><a href="/aboutme.html" id="on-this-page">About</a></li>
          <li><a href="/fees.html">Fees</a></li>
          <li><a href="/blog.html">Blog</a></li>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul> -->
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->

  <?php if( is_front_page() ) : ?>
    
    <?php get_template_part('content', 'button'); ?>

    <div class="main "> <!--large main picture-->
      <p><?php the_field('jumbotron'); ?></p> 
      <p id="pp-caption"><?php the_field('caption'); ?></p>
      <h4><a href="#pp-carousel"><i class="fa fa-chevron-down" id="chevron"></i></a></h4>
    </div>

  <?php endif ?>

  </div><!-- /.container-fluid -->
</nav>


