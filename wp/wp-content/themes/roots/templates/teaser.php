
<?php
$args = array( 'post_type' => 'interview', 'posts_per_page' => 1 );

//PREVIOUS POST
if (is_home()||is_single()):
  $prev_interview=get_adjacent_post(false,"",true, 'interview');
  if ($prev_interview): ?>
    
  <?php else: //else: no $prev_interview ?>
    
  <?php endif; //endif $prev_interview ?>
     
<?php

else: //else: not home/single

endif; //endif: is home/single ?> 

<?php //$loop = new WP_Query( $args ); ?>

<?php //while ( $loop->have_posts() ) : $loop->the_post(); ?>

  <?php //$teaser_image=get_field('teaser_image'); ?>

  <!-- <img src="<?php //echo $teaser_image['url']; ?>"> -->
  
<?php //endwhile; ?>


