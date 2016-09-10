<header class="banner hidden-xs">
  <div class="container-fluid">
    <img src="<?php echo(get_template_directory_uri()); ?>/dist/images/logo.png">
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>

<header class="banner mobile-header visible-xs">
  <div class="container-fluid">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <nav class="nav-mobile">
      <div class="menu-toggle glyphicon glyphicon-menu-hamburger"></div>
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation']);
      endif;
      ?>
    </nav>
  </div>
</header>