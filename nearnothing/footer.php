<div id="footer">
  <ul id="bottomnav">
    <?php wp_nav_menu(array('theme_location' => 'footer_nav')); ?>
  </ul>
  <p>&copy; <?php echo date('Y') ?> <a href="<?php bloginfo('url') ?>">
    <?php bloginfo('name') ?>
    </a> | Powered by <a href="http://wordpress.org">WordPress</a> | Theme by <a href="http://fabapps.com" title="Fab Apps: wordpress, web, and mobile apps">Fab Apps</a></p>
  <?php wp_footer(); ?>
</div>
</div>
</div>
</body></html>