<?php
$args = array( 'post_type' => array('post','interview'), 'posts_per_page' => 999, 'post_status' => array('publish', 'future'), 'order' => 'ASC' );

query_posts( $args ); ?>

<?php get_template_part('templates/content', 'blocks'); ?>

<?php wp_reset_query(); ?>