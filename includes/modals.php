<div id="search-fixed-bg"></div>
<div id="search-fixed">
  <div class="search-container">
    <div class="search-close"><img src="<?= pstImage('close.svg'); ?>" /></div>
    <div class="search-form">
      <form action="#" method="post">
        <input type="search" name="search" placeholder="Search">
      </form>
    </div>
  </div>
</div>

<div id="sitemap-fixed-bg"></div>
<div id="sitemap-fixed">
  <div class="container">
    <div class="row title-row">
      <div class="sitemap-title">
        Site Map
      </div>
      <div class="sitemap-close"><img src="<?= pstImage('close.svg'); ?>" /></div>
    </div>
    <div class="row">
      <?php if (has_nav_menu('sitemap_menu')) : ?>
        <?php wp_nav_menu(array(
          'theme_location' => 'sitemap_menu',
        )); ?>
      <?php endif; ?>
    </div>
  </div>
</div>

<div id="mobile-menu-fixed-bg"></div>
<div id="mobile-menu-fixed">
  <div class="container">
    <div class="row title-row">
      <div class="mobile-menu-title">
        Menu
      </div>
      <div class="mobile-menu-close"><img src="<?= pstImage('close.svg'); ?>" /></div>
    </div>
    <div class="row">

      <?php if (has_nav_menu('mobile_menu')) : ?>
        <?php wp_nav_menu(array(
          'theme_location' => 'mobile_menu',
        )); ?>
      <?php endif; ?>

    </div>
  </div>
</div>