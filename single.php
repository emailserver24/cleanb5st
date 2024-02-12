<?php
  get_header();
?>

<main id="site-main">
  <?php b5st_mainbody_start(); ?>

  <?php get_template_part('loops/single-post', get_post_format()); ?>

  <?php b5st_mainbody_end(); ?>
</main>

<?php
    get_footer();
?>
