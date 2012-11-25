<header class="navbar navbar-fixed-top" role="banner">
  <div class="navbar-inner">
    <div class="container">
      <a class="brand" href="<?php echo home_url(); ?>/">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-womenandtech.png" alt="Women &amp;&amp; Tech">
      </a>
      <div class="right">
        <div class="contact">
          <p class="nomination-link">
            <a href="#nomination-form" data-href="#nomination-form" data-toggle="modal" class="hidden-phone">
              <i class="icon-pencil icon-white"></i> Nominate </a>
            <a href="https://docs.google.com/spreadsheet/viewform?formkey=dDRqNXdEZElvMjItbDItbGhrZTdHRmc6MQ" class="visible-phone visible-table" target="_blank"><i class="icon-pencil icon-white"></i> Nominate</a>
          </p>
          <p class="follow">
            <a href="https://twitter.com/intent/user?screen_name=womenandtech" target="_blank" rel='tooltip' title="@womenandtech">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bird_white_16.png">Follow Us!</a>
          </p>
        </div>
        <nav id="nav-main" role="navigation">
          <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav')); endif; ?>
        </nav>
      </div>
    </div>
  </div>
</header>