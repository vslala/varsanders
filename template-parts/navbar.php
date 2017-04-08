<nav class="navbar navbar-bma">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
            <span style="color: #ffc400; font-size: medium;"><?php bloginfo('description'); ?></span>
      </a>
    </div>
    <?php 
      $args = [
        'menu_class' => 'nav navbar-nav navbar-nav-bma',
        'theme_location' => 'primary'
      ];
      wp_nav_menu ($args);
    ?>
  </div>
</nav>