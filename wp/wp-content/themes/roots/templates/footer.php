<footer role="contentinfo">
  <div id='footer-background' class='visible-phone'></div>
  <div class="container">
  	<?php if (is_page(48)) : // The Plan page ?>
  		<div class="timeline-end"></div>
  	<?php endif; ?>
    <?php get_template_part('templates/teaser'); ?>
    <?php get_template_part('templates/byline'); ?>
  </div>
</footer>

<script>
  var _gaq=[['_setAccount','UA-7465650-13'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

<?php wp_footer(); ?>
