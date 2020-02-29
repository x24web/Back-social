<?php
function show_childpages_shortcode() {
    ob_start();
    if ( is_page() ) {
        $current_page_id = get_the_ID();
        $child_pages = get_pages( array( 
            'child_of' => $current_page_id,  
        ) );
        if ($child_pages) {
            echo '<section id="all-services">
            <div class="container">
            <div class="row">';
            foreach ($child_pages as $child_page) {
                $page_id    = $child_page->ID;
                $page_link  = get_permalink( $page_id ); 
                $page_img   = get_the_post_thumbnail( $page_id, 'full' );
                $page_title = $child_page->post_title;
                $page_content = $child_page->post_content;

            ?>
            <div class="col-lg-12 mb-5">
                <div class="item"> 
                    <div class="img wow zoomIn">
                        <div class="overload">
                            <?php echo get_post_meta($page_id, 'icon', true); ?>
                        </div>
                        <?php echo $page_img; ?>
                    </div>
                    <div class="info wow slideInUp">
                        <h2 class="title-price-services"><?php echo $page_title; ?></h2>
                        <p><?php echo substr(strip_tags($page_content),0,340); ?></p>
                        <div class="custom-big-plans-services d-none">
                        <?php
                            setup_postdata($page_id); 
                            echo esc_attr(htmlentities(the_content()));
                        ?>
                        </div>
                        <div class="control">
                            <button class="view"><a href="<?php echo $page_link ?>">Read More</a></button>
                            <button class="price"><a data-toggle="modal" data-target="#Price-service">Price Plan</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            echo '</div></div></section>';
        }
    }
    ?>
    <!-- POP UPS -->
    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="Price-service">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Marking</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <div class="service-pop">
                <h2>Price Plan</h2>
            </div>
            </div>
        </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode( 'show_service', 'show_childpages_shortcode' );
?>