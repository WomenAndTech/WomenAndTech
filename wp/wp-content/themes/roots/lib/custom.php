<?php

add_theme_support( 'post-thumbnails', array( 'post', 'interview' ) );

add_action( 'init', 'create_interview_type' );
add_post_type_support( 'interview', 'thumbnail' );

function create_interview_type() {
  register_post_type( 'interview', 
    array(
      'labels' => array(
        'name' => __( 'Interviews' ),
        'singular_name' => __( 'Interview' )
      ),
      'public' => true,
      'menu_position' => 2
    )
  );
}

add_action('pre_get_posts', 'homepage_gets_posts_interviews');

function homepage_gets_posts_interviews($query){
  // Do not affect queries for admin pages
  if( $query->is_admin == 1 ) return;
  // stop if wp is working on anything but the main query
  if( !$query->is_main_query() ) return;
  // stop if we are not working on an archive view
  if( $query->is_archive == 1 ) return;
  if(is_home()):
    $query->set('showposts', 1);
    $query->set('post_type', array('post','interview'));
    $query->set('order', 'DESC');
  endif;
}


?>