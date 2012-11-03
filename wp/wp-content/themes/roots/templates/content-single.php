<?php 
global $custom_html_php;
  while (have_posts()) : the_post(); ?>
    
    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <?php if (!$custom_html_php):   
          the_content();
        else:
          get_template_part("custom-html/$custom_html_php");
      endif; ?>
    </div>
<?php endwhile; ?>