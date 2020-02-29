<?php get_header(); ?>
<!-- Start Head Page -->
<?php if(!is_page('services') && !$post->post_parent) : ?>
<div id="head-page" class="style-two">
    <div class="override d-flex">
        <div class="flex-grow-1 line"></div>
        <h2 class="flex-grow-2"><?php the_title(); ?></h2>
        <div class="flex-grow-1"></div>
    </div>
    <?php 
        $args = array(
            'post_type' => 'page',
            'post_status' => 'publish'
        );
        $pages = get_pages($args); 
        echo get_the_post_thumbnail( $page->ID, 'full');
    ?>
</div>
<!-- End Head Page -->
<section id="pages">
    <div class="container">
        <div class="content">
        <?php if ( have_posts() ) {
                    setup_postdata($post); 
                    echo esc_attr(htmlentities(the_content()));
                }
            ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php
if(is_page('services')){
?>
<div id="head-page" class="style-one">
    <div class="override d-flex">
        <div class="text">
            <h2><?php the_title(); ?></h2>
        </div>
        <div class="footer-head-page">
            <img class="wave" src="<?php bloginfo('template_url'); ?>/img/Path 1.svg" alt="">
            <img class="rectangle" src="<?php bloginfo('template_url'); ?>/img/Path 2.svg" alt="">
            <?php 
                $args = array(
                    'post_type' => 'page',
                    'post_status' => 'publish'
                );
                $pages = get_pages($args); 
                echo get_the_post_thumbnail( $page->ID, 'full');
            ?>
        </div>
    </div>
</div>
<?php
echo do_shortcode('[show_service]');
    if ( have_posts() ) {
        wp_reset_query();
        setup_postdata($post); 
        echo esc_attr(htmlentities(the_content()));
    }
?>
<?php
}
?>
<?php 
if($post->post_parent){
?>
<div id="head-page" class="style-two">
    <div class="override d-flex">
        <div class="flex-grow-1"></div>
        <h2 class="flex-grow-2 border-title"><?php the_title(); ?></h2>
        <div class="flex-grow-1"></div>
        <?php 
            $args = array(
                'post_type' => 'page',
                'post_status' => 'publish'
            );
            $pages = get_pages($args); 
            echo get_the_post_thumbnail( $page->ID, 'full');
        ?>
    </div>
</div>
<section id="server-page">
    <div class="container">
      <div class="content wow zoomIn">
      <?php 
      if ( have_posts() ) {
            wp_reset_query();
            setup_postdata($post); 
            echo esc_attr(htmlentities(the_content()));
        }
      ?>
      </div>
      </div>
      </section>
<?php
}
?>
<?php get_footer(); ?>