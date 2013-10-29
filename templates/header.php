<header class="banner container" role="banner">
  <div class="fej">
    <a class="logo" href="<?php echo home_url(); ?>/" title="<?php bloginfo('name'); ?>">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/koszta_logo.png" alt="<?php bloginfo('name'); ?>">
    </a>
    <span class="slogan"><?php bloginfo('description'); ?></span>
  </div>    
</header>
<div class="nav-row">
  <a class="brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
  <nav class="nav-main" role="navigation">
    <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
      endif;
    ?>
  </nav>
</div>