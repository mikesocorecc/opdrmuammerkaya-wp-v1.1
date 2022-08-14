<?php
    function addCss()
    {



        wp_enqueue_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1', 'all');
        

        wp_enqueue_style('owlcarousel', '/wp-content/themes/OPDRMUAMMERKAYA/OwlCarousel/dist/assets/owl.carousel.min.css', array(), '1.0', 'all');
        

        wp_enqueue_style('datepicker', '/wp-content/themes/OPDRMUAMMERKAYA/datepicker/dist/css/bootstrap-datepicker.min.css', array(), '1.0', 'all');
        

        wp_enqueue_style('style', '/wp-content/themes/OPDRMUAMMERKAYA/assets/css/style.min.css', array(), '1.0', 'all');

        
        

        wp_enqueue_style('all', '/wp-content/themes/OPDRMUAMMERKAYA/assets/vendor/css/all.min.css', array(), '1.0', 'all');
        

    }
    add_action('wp_enqueue_scripts', 'addCss');

   

    function addJs()
    {
        wp_enqueue_script('my-jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);
        wp_enqueue_script('bootstrap-bundle', '/wp-content/themes/OPDRMUAMMERKAYA/js/bootstrap.bundle.min.js', array(), '1', true);
        wp_enqueue_script('my-jquery-waypoint', '/wp-content/themes/OPDRMUAMMERKAYA/js/jquery.waypoints.min.js', array(), '1', true);
        wp_enqueue_script('owl-carousel', '/wp-content/themes/OPDRMUAMMERKAYA/OwlCarousel/dist/owl.carousel.min.js', array(), '1', true);
        wp_enqueue_script('datepicker', '/wp-content/themes/OPDRMUAMMERKAYA/datepicker/dist/js/bootstrap-datepicker.min.js', array(), '1', true);
        wp_enqueue_script('imagesloaded', '/wp-content/themes/OPDRMUAMMERKAYA/js/plugins/imagesloaded.pkgd.min.js', array(), '1', true);
        wp_enqueue_script('isotope', '/wp-content/themes/OPDRMUAMMERKAYA/js/plugins/isotope.pkgd.min.js', array(), '1', true);
        wp_enqueue_script('main', '/wp-content/themes/OPDRMUAMMERKAYA/js/main.min.js', array(), '1', true);
       


        

    }
    add_action('wp_enqueue_scripts', 'addJs');

?>

 