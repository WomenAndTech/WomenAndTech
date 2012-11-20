<header class="navbar" role="banner">
  <div class="navbar-inner">
    <div class="container-fluid">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
  <!-- /wp/wp-content/themes/roots/assets/ -->
  <div id="logo">
    <div id="womenandtech-logo" style="width: 228px; height: 115px"></div>
  </div>
      <a class="brand" href="<?php echo home_url(); ?>/">  
	 	
      </a>      
      <div class="right">
        <div class="contact">
          <p class="follow">
            <a href="https://twitter.com/intent/user?screen_name=womenandtech" target="_blank" rel='tooltip' title="@womenandtech">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bird_white_16.png">Follow Us!</a>
          </p>
          <p class="email">
            <a href="#subscribe" title="Subscribe!"> <i class="icon-envelope icon-white"></i>
              Sign up for updates
            </a>
          </p>
        </div>
        <nav id="nav-main" class="nav-collapse" role="navigation">
          <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
            endif;
          ?>
        </nav>
      </div><!-- right -->
    </div>
  </div>
</header>