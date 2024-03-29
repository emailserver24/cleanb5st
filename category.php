<?php
  get_header();
?>

<main id="site-main">
  <?php b5st_mainbody_start(); ?>

  <header class="container py-5 text-center">
    <span class="h3 mt-5 fw-light"><?php _e('Category:', 'b5st'); ?></span>
    <h1 class="display-4 mt-3">
      <?php echo single_cat_title(); ?>
    </h1>
  </header>

  <?php
    get_template_part('loops/index-loop');
    b5st_mainbody_end();
  ?>
</main>

<?php
  get_footer(); 
?>