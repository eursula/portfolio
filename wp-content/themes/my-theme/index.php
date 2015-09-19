<?php  

require('../wp-config.php');

$wp->init();
$wp->parse_request();
$wp->query_posts();
$wp->register_globals();

$postID = get_the_ID();

$attachment_id = get_post_thumbnail_id( $postID ); // attachment ID
//$thumb = get_post_thumbnail_id();
$img_url = wp_get_attachment_url( $attachment_id,'full'); //get img URL

get_header(); ?>
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <?php if ( have_posts()) :
                while ( have_posts()) : the_post(); ?>
                <?php endwhile; else: ?>
                <div class="col-lg-12">
                    <div class="title-box flex flex-column flex-j-center">
                        <h2 id="name">EURSULA HICKS</h1>
                        <h1 id="title">PERSONAL PORTFOLIO</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="link-title" id="2">ABOUT</h1>
                    
                        <img src="<?php echo esc_url( site_url( '/wp-content/themes/my-theme/css/img/my-image.jpg' ) ); ?>" class="my-pic" alt="Eursula Hicks">
                    
                    <div class="paragraph col-lg-12">
                        <p><span class="greeting">Hello!</span> and thanks for visting my site.</p>
                        <p>My name is Eursula Hicks and </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="work" class="work-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="link-title" id="3">WORK</h1>
                    <div class="flex flex-j-around flex-wrap">
                    <?php
                        $args = [
                            'post_type' => 'work',
                            'order'     => 'DESC',
                            'orderby'   => 'menu_order',
                            'showposts' => -1
                        ];

                            query_posts($args);
                        ?>
                    <?php if(have_posts()): ?>

                    <?php while(have_posts()): ?>

                    <?php the_post(); ?>
                    
                    <!--
                    <div class="item-box flex flex-j-around flex-wrap">
                        <div class="item flex flex-column flex-j-center">
                            <a href="">
                                <div class="round">
                                    <img src="<?php echo esc_url( site_url( '/wp-content/themes/my-theme/css/img/nz-fest-3.png' ) ); ?>" alt="">
                                </div>
                                <h3>NZ Student Film Festival</h3>
                            </a>
                        </div>
                        <div class="item flex flex-column flex-j-center">
                            <a href="">
                                <div class="round">
                                    <img src="<?php echo esc_url( site_url( '/wp-content/themes/my-theme/css/img/beauty-boutique.png' ) ); ?>" alt="">
                                </div>
                                <h3>Beauty Boutique</h3>
                            </a>
                        </div>
                        <div class="item flex flex-column flex-j-center">
                            <a href="">
                                <div class="round">
                                    <img src="<?php echo esc_url( site_url( '/wp-content/themes/my-theme/css/img/forme.png' ) ); ?>" alt="">
                                </div>
                                <h3>Forme Hair Design</h3>
                            </a>
                        </div>-->
                        <div class="item flex flex-column flex-j-center">
                            <a href="<?php the_permalink(); ?>">
                                <div class="round">
                                    <?=types_render_field('image', ['url' => false]); ?>
                                </div>
                                <h3><? the_title() ?></h3>
                            </a>
                        </div>
                    <?php endwhile; ?> 
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-box">
                        <div class="flex flex-j-center">
                            <h1 class="link-title" id="4">CONTACT</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <?php endif; ?>

    <?php get_footer(); ?>