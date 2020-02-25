<?php
    require_once('wp-bootstrap-navwalker.php');

    // add_theme_support
    add_theme_support( 'post-thumbnails', array( 'post'));

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





    // theme support
    function wpb_theme_setup(){
        register_nav_menus(array(
            'primary' => _('Primary Menu')
        ));
    }

    add_action('after_setup_theme', 'wpb_theme_setup');


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
?>