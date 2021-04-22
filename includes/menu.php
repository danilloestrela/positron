<div class="row">
  <div class="col-4">
    <img src="<?= pstImage('positron.svg'); ?>" alt="logo">
  </div>
  <div class="col-6" id="menu-wrapper">
    <?php if (has_nav_menu('top_menu')) : ?>
      <?php wp_nav_menu(array(
        'theme_location' => 'top_menu',
      )); ?>
    <?php endif; ?>
  </div>
  <div class="col-2 right-side-menu">
    <div class="language"><a href="#">EN</a></div>
    <div class="search">
      <img src="<?= pstImage('search.svg'); ?>">
    </div>
  </div>
</div>