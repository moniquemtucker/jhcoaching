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
          <h3 class="steps-process">Evidence-based approach</h3>
          <p class="steps-details">We'll look for evidence of when you were at your best, identifying your greatest strengths and values. It's easy to overlook small signs in areas where you have potential, so this is a crucial step.</p>
          <p class="steps-details2">We'll uncover your best experiences and identify real seeds of potential, however small. The key is we're not building something out of nothing -- we're building on things that you already did.</p>
        </div>
        <div class="col-sm-6 col-md-4 steps-mobile">
          <span class="steps-icon"><i class="fa fa-wrench fa-3x"></i></span>
          <h3 class="steps-process">Clarifying what you want</h3>
          <p class="steps-details">We’ll clarify the direction you want to move towards in your life and/or career. Often in our complex, fast-paced culture we get lost in too many options, too many choices. It's important to know what to subtract.</p>
          <p class="steps-details2">Focusing on your greatest strengths and values -- the things that work best for you -- helps us understand what goals are right for you, and helps us remove the clutter and know which options to not pursue.</p>
        </div>
        <div class="col-sm-6 col-md-4 steps-mobile">
          <span class="steps-icon"><i class="fa fa-rocket fa-3x"></i></span>
          <h3 class="steps-process">Making it Happen</h3>
          <p class="steps-details">We'll then create an action plan with manageable steps that will get you from here to there.</p>
          <p class="steps-details2">We'll explore how you can leverage your strengths to manage potential obstacles, and we'll set concrete commitments and get you on the path to achieving what you want for your life and/or career.</p>
        </div>
      </div>
    </div>
  </div>



<?php get_footer(); ?>