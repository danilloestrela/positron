<?php get_header(); ?>

<div class="container-fluid ajust-container">

  <?= pstInclude('modals'); ?>

  <header>
    <div class="container">
      <?php pstInclude('menu'); ?>
    </div>

    <div class="container-fluid header-banner ajust-container">
      <?php pstInclude('headerBanner'); ?>
    </div>
  </header>

  <div class="container-fluid pst-align-center-flex results-conf ajust-container">
    <?php pstInclude('results'); ?>
  </div>

  <div class="container-fluid pst-align-center-flex quick-conf ajust-container">
    <?php pstInclude('quick'); ?>
  </div>

  <div class="container-fluid pst-align-center-flex contact-conf ajust-container">
    <?php pstInclude('contact'); ?>
  </div>

  <div class="container-fluid pst-align-center-flex footer-conf ajust-container">
    <?php pstInclude('footer-menu'); ?>
  </div>

</div>

<?php get_footer(); ?>