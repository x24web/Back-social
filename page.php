<?php get_header(); ?>
<!-- Start Head Page -->
<?php if(!is_page('services') && !is_page('services-ar') && !$post->post_parent) : ?>
<?php if(!is_page('contact') && !is_page('contact-ar')):?>
<div id="head-page" class="style-two">
    <div class="override d-flex">
        <div class="flex-grow-1 line"></div>
        <h2 class="flex-grow-2 two-color-swap"><?php the_title(); ?></h2>
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
<?php else:?>
<div id="head-page" class="style-two contact-head">
    <div class="override d-flex justify-content-center">
        <h2 class="two-color-swap"><?php the_title();?></h2>
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
<?php endif;?>
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
if(is_page('services') || is_page('services-ar')){
?>
<div id="head-page" class="style-one">
    <div class="override d-flex">
        <div class="text">
            <h2 class="two-color-swap"><?php the_title(); ?></h2>
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
        <h2 class="flex-grow-2 border-title two-color-swap"><?php the_title(); ?></h2>
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
            setup_postdata($post); 
            echo esc_attr(htmlentities(the_content()));
        }
      ?>
      </div>
      </div>
      </section>
    <!-- POP UPS -->
    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="custom-one">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="service-pop">
                    <h2>Price Plan</h2>
                    <div class="row"></div>
                    <div class="submit d-none">
                        <button data-toggle="modal" data-target="#confirm">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="modal fade" id="confirm">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="Price-1">Confirm</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
          </div>
          <div class="contact-form pt-1">
            <h2 class="title-section pb-1">Your <span>info</span></h2>
            <?php echo do_shortcode( '[contact-form-7 id="303" title="Small Custom Order"]' ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
}
?>
<?php get_footer(); ?>