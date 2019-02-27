
<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
  <aside id="primary-sidebar" class="primary-sidebar widget-area col-md-1"role="complementary" float="top">

    <?php dynamic_sidebar( 'sidebar' ); ?>
  </aside>
<?php endif; ?>
