<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>

</div> <!--! end of #wrapper -->

<!-- Footer -->
  <footer class="clearfix">
      <div class="wrap-section">
          <?php wp_nav_menu( array('menu' => 'Primary Nav', 'menu_class' => 'menu-footer clearfix' )); ?>
          <div class="social-links right clearfix">
              <div class="soc soc-a right">
                  <a href="https://www.facebook.com/scott.obrien.9028" target="_blank"></a>
              </div>
              <div class="soc soc-b right">
                  <a href="http://www.linkedin.com/pub/scott-o-brien/31/a84/5a1" target="_blank"></a>
              </div>
          </div>
          <a href="#" class="scrollup">Scroll</a>
      </div>
  </footer>


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo $GLOBALS["TEMPLATE_RELATIVE_URL"] ?>resources/js/vendor/jquery-1.8.0.min.js"><\/script>')</script>


  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."resources/js/plugins.js") ?>
  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."resources/js/main.js") ?>

  <script>
    var _gaq=[['_setAccount','UA-31814339-1'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
			   
  <?php wp_footer(); ?>

</body>
</html>
