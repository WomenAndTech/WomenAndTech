<?php 
global $custom_content;
  while (have_posts()) : the_post(); ?>
    
    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <?php if (!$custom_content):   
          the_content();
        else:
          get_template_part("custom-content/$custom_content");
      endif; ?>
    </div>
<?php endwhile; ?>