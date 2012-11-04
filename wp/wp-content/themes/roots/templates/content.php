<?php if (!have_posts()) : ?>
  <div class="container">
    <div class="row">
      <div class="span12">
  <?php get_template_part('templates/page', 'header'); ?>
  <div class="alert alert-block fade in">
    <a class="close" data-dismiss="alert">&times;</a>
    <p><?php _e('Sorry, no results were found.', 'roots'); ?></p>
  </div>
  <?php get_search_form(); ?>
</div>
</div>
</div>
<?php else: ?>
  <?php get_template_part('templates/content', 'blocks'); ?>
<?php endif; ?>



<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav id="post-nav" class="pager">
    <div class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></div>
    <div class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></div>
  </nav>
<?php endif; ?>
