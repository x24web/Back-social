  <!-- Start Footer -->
  <footer class="footer-web">
    <div class="container">
      <?php
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , '30' );
        if ( has_custom_logo() ) {
          echo '<a href="'.home_url().'"><img src="' . $logo[0] . '" alt="' . get_bloginfo( 'name' ) . '"/></a>';
        }
      ?>
      <?php
        wp_nav_menu( array(
          'theme_location'    => 'primary',
          'depth'             => 2,
          'menu_class'        => 'menu wow slideInUp',
        ));
      ?>
      <?php
        wp_nav_menu( array(
          'theme_location'    => 'social-list',
          'depth'             => 2,
          'menu_class'        => 'social-list wow slideInUp',
        ));
      ?>
    </div>
    <div class="copyright"><p>Copyright recived by <span><?php bloginfo('name'); ?></span></p></div>
  </footer>
  <?php wp_footer(); ?>
  <!-- End Footer -->
  <script src="<?php bloginfo('template_url'); ?>/js/jquery-3.4.1.slim.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/popper.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
  <script src="//code.tidio.co/xlrt4qvwj3jjt8d248m6prajopvkalnh.js" async></script>
</body>
</html>