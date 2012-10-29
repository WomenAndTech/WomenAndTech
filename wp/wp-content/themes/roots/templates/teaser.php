
<?php

if (is_home()||is_single()||is_frontpage()) $ids[]=$post->ID;

//PREVIOUS INTERVIEW
$args = array( 'post_type' => 'interview', 'posts_per_page' => 1, 'post__not_in' => $ids );

$loop = new WP_Query( $args ); ?>

<?php if ($loop->have_posts()) : ?>
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

    <?php $teaser_image=get_field('teaser_image'); $image_url=$teaser_image['url'] ?>
    
  <?php endwhile; ?>
<?php else:
  $image_url=get_template_directory_uri().'/assets/img/no-previous-teaser.jpg'; 
endif; ?>

<img src="<?php echo $image_url; ?>">


<?php

//NEXT INTERVIEW
$args = array( 'post_type' => 'interview', 'posts_per_page' => 1, 'post__not_in' => $ids, 'post_status' => array('future') );

$loop = new WP_Query( $args ); ?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

  <?php $teaser_image=get_field('teaser_image'); $image_url=$teaser_image['url'] ?>
  
<?php endwhile; ?>

<img src="<?php echo $image_url; ?>">