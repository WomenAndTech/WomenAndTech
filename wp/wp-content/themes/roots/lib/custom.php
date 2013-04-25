<?php

add_theme_support( 'post-thumbnails', array( 'post', 'interview' ) );

add_action( 'init', 'create_interview_type' );
add_post_type_support( 'interview', array('thumbnail', 'author') );

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
  if( $query->is_archive == 1 || $query->is_author == 1 ):
    $query->set('post_type', array('post','interview'));
    $query->set('post_status', array('publish', 'future'));
  endif;
  if(is_home()):
    $query->set('showposts', 1);
    $query->set('post_type', array('post','interview'));
    $query->set('order', 'DESC');
  endif;

  if(is_single()):
      $post_status = array('publish');
      if (true) $post_status = array('publish', 'future');
      $query->set('post_status', $post_status);
      // $query->set('post_type', array('post','interview', 'revision'));
  endif;
}

function myfeed_request($qv) {
  if (isset($qv['feed']))
    $qv['post_type'] = array('post','interview');
  return $qv;
}
add_filter('request', 'myfeed_request');

//[share]
function share_func($atts){
  extract( shortcode_atts( array(
      'float' => "",
      'margin' => "",
      'tweet' => ""
    ), $atts ) );
  if (empty($tweet) || $tweet == ""):
    $tweet = get_the_title()." -- via @womenandtech";
  endif;

 return '<div class="share_buttons" data-url="'.get_permalink($post->ID).'" data-text="'.$tweet.'" style="float:'.$float.'; margin:'.$margin.'"></div><div style="clear:both"></div>';
}
add_shortcode( 'share', 'share_func' );

function get_image($img, $alt = "") {
  $root = get_home_url();
  $path = '/assets/img/';
  echo "<img src='$root$path$img' alt='$alt'>";
}

?>