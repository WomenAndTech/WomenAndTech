<div class="container-fluid ">
  <div class="row-fluid">
    <div class="span12 page-header">
<?php get_template_part('templates/page', 'header'); ?>
</div>
</div>
</div>

<div class="container-fluid">
  <div class="row-fluid">
    <?php  $post_count = 0; ?>
    <?php while (have_posts() ) : the_post(); ?>
      <?php
        $post_count++;
        $post_type = get_post_type();
        $permalink = $post->post_status == 'future' ? '#' : get_permalink();
      ?>

      <article class="span4 past-listing <?php echo implode(get_post_class(), " ")?>">
      <a href="<?php echo $permalink; ?>" alt="<?php the_title(); ?>">
        <?php
          if ( has_post_thumbnail() ) { 
            the_post_thumbnail();
          }
          else{ ?>
            <img src='<?php echo get_template_directory_uri(); ?>/assets/img/no-featured-image.jpg'>
          <?php } ?>
        </a>
        <?php if ($post_type == 'interview'): ?>
          <div class="interview-number">
            <?php echo get_field('interview_number')?>
          </div>
        <?php endif; ?>
        <div class='title-block clear clearfix'>
            <h2>
              <a href="<?php echo $permalink; ?>" alt="<?php the_title(); ?>">
                <?php echo the_title(); ?>
              </a>
            </h2>
          
          <p class='author'><?php echo ($post_type == 'interview' ? 'with' : 'by'); ?> <strong><?php the_author_posts_link(); ?></strong></p>
        </div>
        <?php echo get_field('archive_excerpt'); ?>
      </article>
  <?php if ($post_count==3): 
      $post_count=0; ?>
  </div>
  <div class="row-fluid new-row">
  <?php endif;?>
    <?php endwhile; ?>   
  </div><!-- row -->
</div><!-- container -->