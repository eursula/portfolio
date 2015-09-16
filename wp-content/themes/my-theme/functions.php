<?php 


# Template Directory
$dir = get_template_directory_uri();


if(!is_admin()){

   # jQuery
    wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js',
        false,
        false,
        true
    );
    wp_enqueue_script('jquery');

    # Bootstrap style
    wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css');

    # Theme style
    wp_enqueue_style('theme', $dir.'/css/style.css');

    # Onepagescroll style
    //wp_enqueue_style('onepagescroll', $dir.'/css/onepage-scroll.css');

    # Scrolling Nav style
    wp_enqueue_style('scrolling-nav-style', $dir.'/css/scrolling-nav.css');


    # Bootstrap script
    wp_enqueue_script( 'bootstrap-script', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', false, false, true);

    # One Page Scroll script
    /*wp_register_script('onepagescroll', $dir.'/js/jquery.onepage-scroll.js',
        false,
        false,
        true
    );
    wp_enqueue_script('onepagescroll');*/

    # Easing script
    wp_register_script('easing-nav', $dir.'/js/jquery.easing.min.js',
        false,
        false,
        true
    );
    wp_enqueue_script('easing-nav');

    # Scrolling Nav script
    wp_register_script('scrolling-nav', $dir.'/js/scrolling-nav.js',
        false,
        false,
        true
    );
    wp_enqueue_script('scrolling-nav');

    # Theme script
    wp_register_script('theme', $dir.'/js/script.js',
        false,
        false,
        true
    );
    wp_enqueue_script('theme');


    add_theme_support( 'post-thumbnails' );  
    

}

if (class_exists('MultiPostThumbnails')) {
        new MultiPostThumbnails(
            array(
                'label'     => '2nd Feature Image',
                'id'        => 'feature-image-2',
                'post_type' => 'work'
            )
        );
        new MultiPostThumbnails(
            array(
                'label'     => '3rd Feature Image',
                'id'        => 'feature-image-3',
                'post_type' => 'work'
            )
        );
        new MultiPostThumbnails(
            array(
                'label'     => '4th Feature Image',
                'id'        => 'feature-image-4',
                'post_type' => 'work'
            )
        );
    }  

add_filter('show_admin_bar', '__return_false');

?>