<div id="sidebar">
  <ul id="sidebarmain">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
    <li class="widget">
      <h2>Pages</h2>
      <ul>
        <?php wp_list_pages('title_li='); ?>
      </ul>
    </li>
    <li class="widget">
      <h2>Archives</h2>
      <ul>
        <?php wp_get_archives( 'type=monthly' ); ?>
      </ul>
    </li>
    <li class="widget">
      <h2>Meta</h2>
      <ul>
        <?php wp_register(); ?>
        <li>
          <?php wp_loginout(); ?>
        </li>
        <?php wp_meta(); ?>
      </ul>
    </li>
    <li class="widget">
      <h2>Login</h2>
      <?php wp_login_form(); ?>
    </li>
    <?php else : ?>
    <?php endif; ?>
  </ul>
</div>
