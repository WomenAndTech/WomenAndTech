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


?>