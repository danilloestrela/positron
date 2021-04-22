<div class="container">
  <div class="row menu-footer-row">
    <div class="col-5" id="footer-menu-wrapper">
      <?php if (has_nav_menu('footer_menu')) : ?>
        <?php wp_nav_menu(array(
          'theme_location' => 'footer_menu',
        )); ?>
      <?php endif; ?>
    </div>
    <div class="col-2" id="social-media-container">
      <a href="#" target="_blank"><img src="<?= pstImage('facebook.svg') ?>" alt="facebook" /></a>
      <a href="#" target="_blank"><img src="<?= pstImage('twitter.svg') ?>" alt="twitter" /></a>
      <a href="#" target="_blank"><img src="<?= pstImage('linkedin.svg') ?>" alt="linkedin" /></a>
    </div>
  </div>
  <div class="row footer-copy">
    <p>Positron - Copyright 2021</p>
  </div>
</div>