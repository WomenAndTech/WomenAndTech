<?php
/*
Template Name: Homepage
*/
?>


<?php
  $args = array(
    'post_type'=> array(
                  'post',
                  'interview'
                  ),
    'showposts' => 1,
    'order' => 'DESC'
  );

  // Get latest post
  query_posts($args);
?>

<?php get_template_part('templates/content', 'single'); ?>