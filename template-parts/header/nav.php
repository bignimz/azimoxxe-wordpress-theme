<nav class="navbar navbar-expand-lg bg-transparent">
  <div class="container">
    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><span class="logo"><span class="color">Azimoxe</span> Creative</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="nav-menu">
      <?php wp_nav_menu(
        array("theme_location" => "primary_menu")
        ) ?>
    </div>
  </div>
</nav>
