<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="site-wrapper"> <!-- Layout wrapper start -->

  <header class="site-header">
    <div class="header-container">
      <h1 class="site-title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Baizonn Learning Centre</a>
      </h1>

      <nav class="main-menu">
        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'menu-1',
              'menu_id'        => 'primary-menu',
            )
          );
        ?>
      </nav>
    </div>
  </header>
