
<!--side bar of blog-->
<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
  <div class="sidebar-module">

    <?php if( !dynamic_sidebar( 'blog' ) ): ?>

      <h5 class="sidebar-module">Sidebar Setup</h5>
      <p>Please add widgets via the admin area</p>

    <?php endif; ?>

</div><!-- /.blog-sidebar -->