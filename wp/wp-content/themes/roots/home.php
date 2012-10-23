<?php
/*
Template Name: Homepage
*/
?>


<?php 
  // Get latest post 
  query_posts('post_type=post&showposts=1');
?>

<?php get_template_part('templates/content', 'single'); ?>