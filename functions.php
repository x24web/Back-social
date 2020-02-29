<?php
    require_once('wp-bootstrap-navwalker.php');
    require_once('wp-bootstrap-paginate.php');
    require_once('childern-page.php');

    // add_theme_support
    add_theme_support( 'post-thumbnails', array( 'post','page'));

    function themename_custom_logo_setup() {
        $defaults = array(
        'height'      => 30,
        'width'       => 124,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
        );
        add_theme_support( 'custom-logo', $defaults );
    }
    add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

    // Navbar support
    function wpb_theme_setup(){
        register_nav_menus(array(
            'primary' => _('Primary Menu'),
            'social-list' => 'Social Media'
        ));
    }
    add_action('after_setup_theme', 'wpb_theme_setup');

    // rebuild the_excerpt
    function wpdocs_custom_excerpt_length( $length ) {
        return 37;
    }
    add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

    function wpdocs_excerpt_more( $more ) {
        return '...';
    }
    add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
    

    add_filter( 'comment_form_default_fields', 'change_fields_comments' );
    function change_fields_comments( $fields ) {
        $fields['author'] = '<div class="row mb-4">
                                <div class="col-lg-6">
                                <input id="author" name="author" type="text" class="form-control" placeholder="Name*">
                                </div>';
        $fields['email'] = '    <div class="col-lg-6">
                                    <input id="email" name="email" type="email" class="form-control" placeholder="Email*">
                                </div>
                            </div>';
        unset($fields['cookies']);
        unset($fields['url']);
        return $fields;
        
    }
    
    function crunchify_init() {
        add_filter('comment_form_defaults','crunchify_comments_form_defaults');
    }
    add_action('after_setup_theme','crunchify_init');
    
    function crunchify_comments_form_defaults($default) {
        $default['comment_notes_before'] = '';
        unset($default['title_reply']);
        $default['submit_button'] = '<button name="submit" type="submit" id="submit" class="btn-style btn-two mt-4">Submit</button>';
        $default['comment_field'] =
        '<div class="row">
            <div class="col-lg-12">
            <textarea  id="comment" name="comment" class="form-control" placeholder="Comment*" cols="30" rows="10"></textarea>
            '. $default['submit_button'] .'
            </div>  
         </div>';
         $default['submit_button'] = '';
         $default['logged_in_as'] = '';
         $default['must_log_in'] = '';
        return $default;
    }

    function contact_widget() {
        register_sidebar( array(
            'name'          => __( 'Contact', 'Contact' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ));
    }
    add_action( 'widgets_init', 'contact_widget' );
?>