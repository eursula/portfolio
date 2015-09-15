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

    # Theme styles
    wp_enqueue_style('theme', $dir.'/css/style.css');

    # Onepagescroll styles
    wp_enqueue_style('onepagescroll', $dir.'/css/onepage-scroll.css');

    wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css');

    # Bootstrap script
    wp_enqueue_script( 'bootstrap-script', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', false, false, true);

    # Theme script
    wp_register_script('theme', $dir.'/js/script.js',
        false,
        false,
        true
    );
    wp_enqueue_script('theme');

    # Theme script
    wp_register_script('onepagescroll', $dir.'/js/jquery.onepage-scroll.js',
        false,
        false,
        true
    );
    wp_enqueue_script('onepagescroll');

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