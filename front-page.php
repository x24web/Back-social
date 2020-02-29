<?php get_header(); ?>
  <!-- Start Carousel -->
  <div id="carouselhead" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselhead" data-slide-to="0" class="active"></li>
      <li data-target="#carouselhead" data-slide-to="1"></li>
      <li data-target="#carouselhead" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="override"></div>
        <img src="img/img1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h1 class="display-1 text-left">Rise up</h1>
          <h4 class="display-4 text-left">With hight level of <span>Busness</span></h4>
          <button class="btn btn-lg bg-white">More <span>info</span></button>
        </div>
      </div>
      <div class="carousel-item">
        <div class="override"></div>
        <img src="img/img1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h1 class="display-1 text-left">Rise up</h1>
          <h4 class="display-4 text-left">With hight level of <span>Busness</span></h4>
          <button class="btn btn-lg bg-white">More <span>info</span></button>
        </div>
      </div>
      <div class="carousel-item">
        <div class="override"></div>
        <img src="img/img1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h1 class="display-1 text-left">Rise up</h1>
          <h4 class="display-4 text-left">With hight level of <span>Busness</span></h4>
          <button class="btn btn-lg bg-white">More <span>info</span></button>
        </div>
      </div>
    </div>
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
  <!-- Start Section What We Do -->
  <section id="what-we-do-section">
    <div class="container">
      <h2 class="title-section">what we <span>Do</span></h2>
      <div class="row">
        <div class="col-md-4 mb-5 wow slideInLeft">
          <!-- Start item -->
          <div class="item wow pulse" data-wow-duration="2s" data-wow-iteration="100">
            <a href="service.html">
              <i class="fas fa-users"></i>
              <h3>Page mangement</h3>
            </a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique voluptatibus illum molestiae, vero numquam provident qui animi quo quia ea?</p>
          </div>
          <!-- End item -->
        </div>
        <div class="col-md-4 mb-5 wow slideInUp">
          <!-- Start item -->
          <div class="item wow pulse" data-wow-duration="2s" data-wow-iteration="100">
            <a href="service.html">
              <i class="fas fa-bullhorn"></i>
              <h3>Page mangement</h3>
            </a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique voluptatibus illum molestiae, vero numquam provident qui animi quo quia ea?</p>
          </div>
          <!-- End item -->
        </div>
        <div class="col-md-4 mb-5 wow slideInRight">
          <!-- Start item -->
          <div class="item wow pulse" data-wow-duration="2s" data-wow-iteration="100">
            <a href="service.html">
              <i class="fas fa-layer-group"></i>
              <h3>Page mangement</h3>
            </a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique voluptatibus illum molestiae, vero numquam provident qui animi quo quia ea?</p>
          </div>
          <!-- End item -->
        </div>
      </div>
    </div>
  </section>
  <!-- End Section What We Do -->
  <!-- Start About-us -->
  <section id="about-section">
    <div class="override">
      <div class="container">
        <h2 class="title-section">what we <span>Do</span></h2>
        <div class="row">
          <div class="col-lg-6 d-none d-lg-block wow slideInLeft">
            <div class="shape">
              <h2>
                <span>work</span> steps
              </h2>
            </div>
          </div>
          <div class="col-lg-6 wow slideInRight">
            <ul id="number-list">
              <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga eveniet atque aliquam quibusdam amet qui quaerat repudiandae quasi facilis rerum.</p></li>
              <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga eveniet atque aliquam quibusdam amet qui quaerat repudiandae quasi facilis rerum.</li>
              <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga eveniet atque aliquam quibusdam amet qui quaerat repudiandae quasi facilis rerum.</li>
              <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga eveniet atque aliquam quibusdam amet qui quaerat repudiandae quasi facilis rerum.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About-us -->
  <!-- Start Blog -->
  <?php if(have_posts()) : ?>
  <section id="blog-section">
    <div class="container">
      <h2 class="title-section">lastest <span>Blogs</span></h2>
      <div class="row">
      <?php while(have_posts()) : the_post(); ?>
        <!-- Start item -->
        <div class="col-lg-4 col-md-6 mb-5 wow slideInLeft">
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
      <?php endwhile; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <!-- End Blog -->
  <!-- Start Testimonial -->
  <section id="testimonial-section">
    <div class="container">
      <h2 class="title-section">Testi<span>monial</span></h2>
      <div class="owl-carousel owl-theme">
        <div class="item">
          <div class="img">
            <img src="img/personal.png" alt=""/>
          </div>
          <h4>ahmed <span>hamed</span></h4>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem minus ex nihil molestias tenetur distinctio.</p>
        </div>
        <div class="item">
          <div class="img">
            <img src="img/personal.png" alt=""/>
          </div>
          <h4>ahmed <span>hamed</span></h4>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem minus ex nihil molestias tenetur distinctio.</p>
        </div>
        <div class="item">
          <div class="img">
            <img src="img/personal.png" alt=""/>
          </div>
          <h4>ahmed <span>hamed</span></h4>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem minus ex nihil molestias tenetur distinctio.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Testimonial -->
  <!-- Start Contact -->
  <?php if(is_dynamic_sidebar('contact_widget')){ ?>
  <section id="contact-section">
    <div class="override">
      <div class="container">
        <h2 class="title-section">Contact <span>US</span></h2>
        <?php dynamic_sidebar('Contact') ?>
      </div>
    </div>
  </section>
  <?php } ?>
  <!-- End Contact -->
<?php get_footer(); ?>