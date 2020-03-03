<?php get_header(); ?>
  <!-- Start Carousel -->
  <div id="carouselhead" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselhead" data-slide-to="0" class="active"></li>
    </ol>
    <div class="carousel-inner">
    </div>
    <?php dynamic_sidebar('slider'); ?>
    <a class="carousel-control-prev" href="#carouselhead" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselhead" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- End Carousel -->
  <?php include('service-front-page.php'); ?>
  <!-- Start About-us -->
  <?php if(is_dynamic_sidebar('what-we-do')){ ?>
  <!-- Start About-us -->
  <section id="about-section">
    <div class="override">
      <div class="container">
        <h2 class="title-section two-color-swap"></h2>
          <?php dynamic_sidebar('what-we-do'); ?>
      </div>
    </div>
  </section>
  <!-- End About-us -->
  <?php } ?>
  <!-- End About-us -->
  <!-- Start Blog -->
  <?php
  if(have_posts()) : ?>
  <section id="blog-section">
    <div class="container">
      <h2 class="title-section two-color-swap"><?php if(get_language_attributes() == 'lang="ar"'){?>
        آخر المقالات
      <?php }else{ ?>
        lastest Blogs
      <?php }?>
      </h2>
      <div class="row">
      <?php $the_query = new WP_Query( 'posts_per_page=3' ); $i = 0; ?>
      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?> 
        <?php if($i == 0){?>
        <div class="col-lg-4 col-md-6 mb-5 wow slideInLeft">
        <?php } ?>
        <?php if($i == 1){?>
        <div class="col-lg-4 col-md-6 mb-5 wow slideInUp">
        <?php } ?>
        <?php if($i == 2){?>
        <div class="col-lg-4 col-md-6 mb-5 wow slideInRight">
        <?php } ?>
        <?php $i++; ?>
          <div class="blog">
            <?php if(has_post_thumbnail()) : ?>
              <a href="<?php the_permalink();?>">
              <?php the_post_thumbnail(); ?>
              </a>
            <?php endif; ?>
          <div>
              <h2><?php the_title(); ?></h2>
              <p><?php the_excerpt(); ?></p>
              <button class="btn"><a href="<?php the_permalink();?>">View more</a></button>
            </div>
          </div>
        </div>
        <!-- End item -->
        <?php 
        endwhile;
        ?>
    </div>
    </div>
  </section>
  <?php endif; ?>
  <!-- End Blog -->
  <!-- Start Testimonial -->
  <?php if(is_dynamic_sidebar('Testimonial')){ ?>
  <section id="testimonial-section">
    <div class="container">
      <h2 class="title-section two-color-swap"></h2>
      <div class="owl-carousel owl-theme">
      </div>
    </div>
    <?php dynamic_sidebar('Testimonial'); ?>
  </section>
  <?php } ?>
  <!-- End Testimonial -->
  <!-- Start Contact -->
  <?php if(is_dynamic_sidebar('contact_widget')){ ?>
  <?php dynamic_sidebar('Contact'); ?>
  <?php } ?>
  <!-- End Contact -->
<?php get_footer(); ?>