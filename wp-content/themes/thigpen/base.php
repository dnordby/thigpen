<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <?php get_template_part('templates/loader');?>
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="wrap container-fluid" role="document">
      <div class="content row">
        <main class="main">
          <?php include Wrapper\template_path(); ?>
        </main>
      </div>
    </div>
    <script type="text/javascript" src="<?php echo(get_template_directory_uri()); ?>/assets/scripts/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="<?php echo(get_template_directory_uri()); ?>/assets/scripts/packery-mode.pkgd.min.js"></script>
    <script type="text/javascript" src="<?php echo(get_template_directory_uri()); ?>/assets/scripts/swiper.min.js"></script>
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
