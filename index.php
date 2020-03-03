<?php get_header(); ?>
  <div id="head-page" class="style-one blog-head">
    <div class="override d-flex">
      <div class="text container">
        <h1 class="text-capitalize"><span><?php wp_title(''); ?></span></h1>
        <h2 class="two-color-swap"><?php echo get_post_meta(get_queried_object_id(), 'sub-title', true); ?></h2>
      </div>
      <div class="footer-head-page">
        <img class="wave" src="<?php bloginfo('template_url'); ?>/img/Path 1.svg" alt="">
        <img class="rectangle" src="<?php bloginfo('template_url'); ?>/img/Path 2.svg" alt="">
        <?php 
          if (is_home() && get_option('page_for_posts') ) {
            $img = wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')),'full'); 
            $featured_image = $img[0];
            echo "<img src='".$featured_image."' class='attachment-full size-full wp-post-image'/>";
          }
        ?>
      </div>
    </div>
  </div>
  <?php if(have_posts()) : ?>
  <section id="all-blog">
    <div class="container">
      <div class="row">
        <?php while(have_posts()) : the_post(); ?>
        <div class="col-lg-12 mb-5">
          <div class="item"> 
            <?php if(has_post_thumbnail()) : ?>
              <div class="img wow zoomIn">
                <a href="<?php the_permalink();?>">
                  <?php the_post_thumbnail(); ?>
                </a>
              </div>
            <?php endif; ?>
            <div class="info wow slideInRight">
              <h2><?php the_title(); ?></h2>
              <p><?php the_excerpt();?></p>
              <div class="control">
                <button><a href="<?php the_permalink();?>">Read More</a></button>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
  <?php
    echo bootstrap_pagination();
  ?>
  <?php endif; ?>

<?php get_footer(); ?>