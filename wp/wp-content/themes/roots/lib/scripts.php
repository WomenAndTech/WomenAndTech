<?php
/**
 * Scripts and stylesheets
 *
 * Enqueue stylesheets in the following order:
 * 1. /theme/assets/css/bootstrap.css
 * 2. /theme/assets/css/bootstrap-responsive.css
 * 3. /theme/assets/css/base.css
 * 4. /child-theme/style.css (if a child theme is activated)
 *
 * Enqueue scripts in the following order:
 * 1. /theme/assets/js/vendor/modernizr-2.6.2.min.js  (in head.php)
 * 2. jquery-1.8.2.min.js via Google CDN              (in head.php)
 * 3. /theme/assets/js/plugins.js
 * 4. /theme/assets/js/main.js
 */

function roots_scripts() {
  wp_enqueue_style('roots_bootstrap', '/assets/css/bootstrap.css', false, null);
  wp_enqueue_style('roots_bootstrap_responsive', '/assets/css/bootstrap-responsive.css', array('roots_bootstrap'), null);

  wp_enqueue_style('roots_arvo_font', 'http://fonts.googleapis.com/css?family=Arvo:400,400italic|Open+Sans:400italic,600italic,400,600', false, null);

  wp_enqueue_style('roots_app', '/assets/css/base.css', array('roots_bootstrap'), null);

  // Load style.css from child theme
  if (is_child_theme()) {
    wp_enqueue_style('roots_child', get_stylesheet_uri(), false, null);
  }

  // jQuery is loaded in header.php using the same method from HTML5 Boilerplate:
  // Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline
  // It's kept in the header instead of footer to avoid conflicts with plugins.
  if (!is_admin()) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', '', '', '1.8.2', false);
  }

  /*if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }*/

  wp_register_script('roots_plugins', '/assets/js/plugins.js', 'jquery', null, false);
  

  wp_register_script('swiffy', '/assets/js/vendor/swiffy-4.9.0.min.js', 'jquery', null, false);
  
  //Can load this in the footer:
  wp_register_script('jquery_color', 'http://code.jquery.com/color/jquery.color-git.js', 'jquery', null, true);
  wp_register_script('roots_main', '/assets/js/main.js', 'jquery', null, true);

  wp_enqueue_script('swiffy');
  wp_enqueue_script('roots_plugins');

  //Loads in the footer:
  wp_enqueue_script('jquery_color');
  wp_enqueue_script('roots_main');

}

add_action('wp_enqueue_scripts', 'roots_scripts', 100);
