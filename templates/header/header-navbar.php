<header id="navbar">
  <div class="navbar">
    <div class="navbar__container">
      <a href="<?php echo esc_url(site_url('/')); ?>" class="navbar__brand">
        <img class="navbar__logo" src="https://media-01.imu.nl/storage/moneyfulness.me/2192/moneyfulness.png" alt="">
      </a>
      <nav class="navbar__links">
        <?php wp_nav_menu([
          'menu_class' => '',
          'container' => '',
          'theme_location' => 'navbar-menu',
        ]); ?>

        <!-- <div class="navbar__footer">
          <a href="/offerte/" class="btn btn--primary btn--sm">Offerte aanvragen</a>
        </div> -->

      </nav>
      <!-- <a href="/contact/" class="navbar__cta" title="">Stel je vraag</a> -->
      <div class="navbar__toggle">
        <div class="navbar__toggle-1"></div>
        <div class="navbar__toggle-2"></div>
        <div class="navbar__toggle-3"></div>
      </div>
    </div>
  </div>
</header>