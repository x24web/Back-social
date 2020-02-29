<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>"/>
  <title><?php bloginfo('name');?> | <?php is_front_page() ? bloginfo('description') : wp_title('') ?></title>
  <link href="https://fonts.googleapis.com/css?family=Almarai:400,800&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/css/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/css/owl.theme.default.min.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/css/animate.css" rel="stylesheet">
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/css/rtl.css" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body>
  <!-- Start Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
    <div class="container">
      <?php
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , '30' );
        if ( has_custom_logo() ) {
          echo '<a class="navbar-brand" href="'.home_url().'"><img height="30" src="' . $logo[0] . '" alt="' . get_bloginfo( 'name' ) . '"/></a>';
        } else {
          echo '<a class="navbar-brand" href="'.home_url().'"><h3>'. bloginfo('name') .'</h3></a>';
        }
      ?>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php
        wp_nav_menu( array(
          'theme_location'    => 'primary',
          'depth'             => 2,
          'container'         => 'div',
          'container_class'   => 'collapse navbar-collapse',
          'container_id'      => 'navbarSupportedContent',
          'menu_class'        => 'navbar-nav ml-auto',
          'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
          'walker'            => new WP_Bootstrap_Navwalker(),
        ));
      ?>
    </div>
  </nav>
  <!-- End Navbar -->