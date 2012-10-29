<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <?php the_content(); ?>

  </article>
  


<?php endwhile; ?>


<?php //var_dump(get_adjacent_post(false,"",false, 'interview')); ?>

<?php //var_dump(get_adjacent_post(false,"",true, 'interview')); ?>

<!-- <header>
  <h1 class="entry-title"><?php //the_title(); ?></h1>
  <?php //get_template_part('templates/entry-meta'); ?>
</header>
<div class="entry-content">
  <?php //the_content(); ?>
</div>
<footer>
  <?php //wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
  <?php //the_tags('<ul class="entry-tags"><li>','</li><li>','</li></ul>'); ?>
</footer>
<?php //comments_template('/templates/comments.php'); ?> -->