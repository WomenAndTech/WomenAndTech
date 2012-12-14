<?php get_template_part('templates/head'); ?>
<?php global $post;
$permalink = get_permalink($post->ID);
?>
<body <?php body_class(); ?> data-permalink="<?php echo $permalink; ?>" data-url-encoded-permalink="<?php echo urlencode($permalink); ?>">

  <!--[if lt IE 7]><div class="alert">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</div><![endif]-->

  <?php
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-dynamic-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>
  
  <?php include roots_template_path(); ?>

  <?php get_template_part('templates/footer'); ?>

<div class="modal hide fade in" id="nomination-form">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">×</button>
  </div>
  <iframe src="https://docs.google.com/spreadsheet/embeddedform?formkey=dDRqNXdEZElvMjItbDItbGhrZTdHRmc6MQ" width="580" height="550" frameborder="0" marginheight="0" marginwidth="0"></iframe>
</div>

</body>
</html>
