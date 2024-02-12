<?php
  get_header();
?>

<main id="site-main">
  <?php 
    b5st_mainbody_start();
    get_template_part('loops/search-results');
    b5st_mainbody_end();
  ?>
</main>

<?php
  get_footer(); 
?>