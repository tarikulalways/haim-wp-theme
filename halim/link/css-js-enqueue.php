<?php 
    // all css js enqueue
    if(!function_exists('hlaim_css_js_enqueue')){
        function hlaim_css_js_enqueue(){
            // css enqueue

            wp_enqueue_style('googe-fonts', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700');
            wp_enqueue_style('bootstrap', get_template_directory_uri(). '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
            wp_enqueue_style('font-awesome', get_template_directory_uri(). '/assets/css/font-awesome.min.css', array(), '1.0.0', 'all');
            wp_enqueue_style( 'fa5', 'https://use.fontawesome.com/releases/v5.13.0/css/all.css', array(), '5.13.0', 'all' );
            wp_enqueue_style( 'fa5-v4-shims', 'https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css', array(), '5.13.0', 'all' );
            wp_enqueue_style('magnific', get_template_directory_uri(). '/assets/css/magnific-popup.css', array(), '1.0.0', 'all');
            wp_enqueue_style('carousel', get_template_directory_uri(). '/assets/css/owl.carousel.css', array(), '1.0.0', 'all');
            wp_enqueue_style('main-style', get_template_directory_uri(). '/assets/css/style.css', array(), '1.0.0', 'all');
            wp_enqueue_style('responsive', get_template_directory_uri(). '/assets/css/responsive.css', array(), '1.0.0', 'all');
            wp_enqueue_style(get_stylesheet_uri());

            // js enqueue

            wp_enqueue_script('popper', get_template_directory_uri(). '/assets/js/popper.min.js', array('jquery'), '1.0.0', true);
            wp_enqueue_script('bootstrap', get_template_directory_uri(). '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
            wp_enqueue_script('carousel', get_template_directory_uri(). '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true);
            wp_enqueue_script('magnific', get_template_directory_uri(). '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true);
            wp_enqueue_script('isotope', get_template_directory_uri(). '/assets/js/isotope.min.js', array('jquery'), '1.0.0', true);
            wp_enqueue_script('imageloaded', get_template_directory_uri(). '/assets/js/imageloaded.min.js', array('jquery'), '1.0.0', true);
            wp_enqueue_script('counterup', get_template_directory_uri(). '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0.0', true);
            wp_enqueue_script('waypoint', get_template_directory_uri(). '/assets/js/waypoint.min.js', array('jquery'), '1.0.0', true);
            wp_enqueue_script('customjs', get_template_directory_uri(). '/assets/js/main.js', array('jquery'), '1.0.0', true);
        }
    }
    add_action('wp_enqueue_scripts', 'hlaim_css_js_enqueue');
?>