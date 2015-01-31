<?php get_header(); ?>


<!--rotating section -->
  <div id="pp-carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
  <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#pp-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#pp-carousel" data-slide-to="1"></li>
      <li data-target="#pp-carousel" data-slide-to="2"></li>
    </ol>
  <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active" style="width: 50%;">
        <span><i class="fa fa-leaf"></i></span>
        <p><?php the_field('carousel1'); ?></p>
      </div>
      <div class="item" style="width: 50%;">
        <span><i class="fa fa-university"></i></span>
        <p><?php the_field('carousel2'); ?></p>
      </div>
      <div class="item" style="width: 50%;">
        <span><i class="fa fa-line-chart"></i></span>
        <p><?php the_field('carousel3'); ?></p>
      </div>
  </div>
  <!-- Controls -->
    <a class="left carousel-control" href="#pp-carousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#pp-carousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div> <!-- Carousel -->

<!--how it works section-->
  <div class="how_it_works">
    <h2>HOW IT WORKS</h2>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 col-md-4 home-process-step">
          <span><i class="fa fa-unlock"></i></span>
          <h4>Clarifying What You Want</h4>
          <p> We'll clarify the direction you want to move towards in your life and/or career.</p>
        </div>
        <div class="col-sm-6 col-md-4 home-process-step">
          <span><i class="fa fa-rocket"></i></span>
          <h4>Leveraging Your Strengths</h4>
          <p>We'll explore your strengths and resources and how to leverage them.</p>
        </div>
        <div class="col-sm-6 col-md-4 home-process-step">
          <span><i class="fa fa-wrench"></i></span>
          <h4>Making It Happen</h4>
          <p> Then we'll create an action plan with manageable steps that will move you in the right direction.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p id="learn-more"><a href="<?php bloginfo('url'); ?>/career-life-coaching">Learn More</a></p>
        </div>
      </div>
    </div>
  </div>


<?php get_footer(); ?>