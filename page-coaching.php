<?php
/*
Template Name: Coaching
*/
?>

<?php get_header(); ?>
<?php get_template_part('content', 'button'); ?>


  <div class="desc"> <!--description of process-->
    <div id="steps-intro">
      <h1>Career + Life Coaching</h1>
      <h2 id="desc-head">This page describes the general steps of my coaching process, although when we work together
          we'll develop a fully customized plan that focuses on just the areas most important to you.</h2>
    </div>
    <p id="steps-head"><a href="<?php bloginfo('url'); ?>/fees">Many of my clients are able to get clarity and results in just
        4 to 6 sessions. Get started with a free consultation.</a></p>
    <div class ="container" id="steps-row">
      <div class="row">
        <div class="col-sm-6 col-md-4 steps-mobile">
          <span class="steps-icon"><i class="fa fa-unlock fa-3x"></i></span>
          <h3 class="steps-process">Clarifying What You Want</h3>
          <p class="steps-details">We’ll clarify the direction you want to move towards in your life and/or career, and
              use that clarity to set concrete coaching goals. </p>
          <p class="steps-details2">If you're not sure about what you want, we'll look for
              solid evidence of when you were at your best and identify your areas of greatest potential.</p>
        </div>
        <div class="col-sm-6 col-md-4 steps-mobile">
          <span class="steps-icon"><i class="fa fa-rocket fa-3x"></i></span>
          <h3 class="steps-process">Leveraging Your Strengths</h3>
          <p class="steps-details">Next, we’ll explore what intrinsically motivates you and how you can use your
              strengths and resources to get to where you want to go. </p>
          <p class="steps-details2">We may discover untapped strengths, unrealized resources, and a greater
              appreciation of all that you have available to you.</p>
        </div>
        <div class="col-sm-6 col-md-4 steps-mobile">
          <span class="steps-icon"><i class="fa fa-wrench fa-3x"></i></span>
          <h3 class="steps-process">Making it Happen</h3>
          <p class="steps-details">Then we’ll create an action plan with manageable steps that will get
            you from here to there.</p>
          <p class="steps-details2">We'll set concrete commitments and consider how to manage potential obstacles,
              and get you on the path to achieving what you want for your life and/or career.</p>
        </div>
      </div>
    </div>
  </div>



<?php get_footer(); ?>