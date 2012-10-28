<?php

// Custom functions


add_action( 'init', 'create_my_post_types' );

function create_my_post_types() {
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