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


<?php if (GOOGLE_ANALYTICS_ID) : ?>
<script>
  var _gaq=[['_setAccount','<?php echo GOOGLE_ANALYTICS_ID; ?>'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php endif; ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/waat-pull-quote-tweet.js"></script>

<?php wp_footer(); ?>
