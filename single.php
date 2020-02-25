<?php get_header(); ?>

  <!-- Start blog-details section -->
  <section class="blog-details-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 posts-details">
          <!-- details post -->
          <div class="post-details">
              <?php if(is_single()) : ?>
                <?php if(has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                <?php endif; ?>
            <div class="blog-details">
              <ul class="meta wow slideInDown">
                <li>By <?php echo the_author_meta('display_name', $post->post_author); ?></li>
                <li><?php echo get_the_date();?></li>
              </ul>
              <h3 class="title wow slideInUp"><?php the_title(); ?></h3>
              <div class="content-post wow zoomIn">
                  <?php the_excerpt(); ?>
              </div>
              <?php endif; ?>
            </div>
          </div><!-- End details -->
          <!-- Comment Details -->
          <div class="row">
            <div class="col-lg-6">
              <div class="comment-details wow fadeInLeft">
                <h2 class="title">Recent Comments</h2>
                <?php comments_template(); ?>
              </div>
            </div>
              <?php if ( comments_open( $post_id ) ) {?>
              <!-- Comment Form -->
              <div class="comment-form col-lg-6 mx-auto wow fadeInRight">
                <h3 class="title">Your Comment</h3>
                <?php comment_form(array(
                  'title_reply'   => ''
                  )); ?>
              </div>
              <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End blog-posts section -->
<?php get_footer(); ?>