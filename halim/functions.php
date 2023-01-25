<?php 

// theme demo import
require_once(get_template_directory().'/demo-import/import-demo.php');
require_once(get_template_directory().'/demo-export-file/halim-acf-export.php');

    // basic theme function

    if(!function_exists('hlaim_css_js_enqueue')){
        function halim_setup_theme(){
            add_theme_support('title-tag');
            add_theme_support('post-thumbnails', array('slider', 'team', 'testimonial', 'post', 'protfolio'));
            add_theme_support( 'automatic-feed-links' );
            load_theme_textdomain( 'halim', get_template_directory(). '/languages' );

            // menu register

            register_nav_menus(array(
                'main-menu' => esc_html__('Primary Menu', 'halim')
            ));
        }
    }
    add_action('after_setup_theme', 'halim_setup_theme');

    // css js enqueue
    get_template_part('link/css-js-enqueue');
    
    // plugins activation
    require_once(get_template_directory(). '/plugin-install/install.php');
    // theme options 
    require_once(get_template_directory(). '/theme-option/theme-options.php');

    // comment rearange
    if(!function_exists('halim_comment_fiend')){
        function halim_comment_fiend( $fields ) {
            $comment_field = $fields['comment'];
            $comment_cookie = $fields['cookies'];
            unset( $fields['comment'] );
            unset( $fields['cookies'] );
            $fields['comment'] = $comment_field;
            $fields['cookies'] = $comment_cookie;
            return $fields;
        }
    }
    add_filter( 'comment_form_fields', 'halim_comment_fiend' );

    // widgets register

    if(!function_exists('halim_widgets')){
        function halim_widgets(){
            // footer one
            register_sidebar(array(
                'id' => 'footer_one',
                'name' => esc_html__('Footer widgets one', 'halim'),
                'description' => esc_html__( 'This is a footer one description', 'halim' ),
                'before_widget' => '<div class="single-footer footer-logo">',
                'after_widget' => '</div>',
                'before_title' => '<h3>',
                'after_title' => '</h3>'
            ));

            // footer two
            register_sidebar(array(
                'id' => 'footer_two',
                'name' => esc_html__('Footer widgets two', 'halim'),
                'description' => esc_html__( 'This is a footer two description', 'halim' ),
                'before_widget' => '<div class="single-footer">',
                'after_widget' => '</div>',
                'before_title' => '<h4>',
                'after_title' => '</h4>'
            ));

            // footer three
            register_sidebar(array(
                'id' => 'footer_three',
                'name' => esc_html__('Footer widgets three', 'halim'),
                'description' => esc_html__( 'This is a footer three description', 'halim' ),
                'before_widget' => '<div class="single-footer">',
                'after_widget' => '</div>',
                'before_title' => '<h4>',
                'after_title' => '</h4>'
            ));

            // footer four
            register_sidebar(array(
                'id' => 'footer_four',
                'name' => esc_html__('Footer widgets four', 'halim'),
                'description' => esc_html__( 'This is a footer four description', 'halim' ),
                'before_widget' => '<div class="single-footer contact-box">',
                'after_widget' => '</div>',
                'before_title' => '<h4>',
                'after_title' => '</h4>'
            ));

            // sidebar
            register_sidebar(array(
                'id' => 'sidebar1',
                'name' => esc_html__('Sidebar for blog', 'halim'),
                'description' => esc_html__('This is a blog for sidebar', 'halim'),
                'before_widget' => '<div class="single-sidebar">',
                'after_widget' => '</div>',
                'before_title' => '<h4>',
                'after_title' => '</h4>'
            ));
        }
    }
    add_action('widgets_init', 'halim_widgets');

    
?>