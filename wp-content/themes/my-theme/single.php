<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://use.typekit.net/wib2hkz.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <title>Eursula Hicks Portfolio</title>
</head>
    <body>
        <?php if(have_posts()): ?>

        <?php while(have_posts()): ?>

        <?php the_post(); ?>
        <div class="container">
            <div class="row">
                <div class="icon-single col-lg-12 flex flex-j-center">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php echo esc_url( site_url( '/wp-content/themes/my-theme/css/img/logo.png' ) ); ?>" alt="logo">
                    </a>
                </div> 
            </div>
            <div class="row">   
                <div class="col-lg-12 flex flex-column flex-j-center">
                    <h3 class="link-title"><? the_title() ?></h3>
                    <div class="main-container flex flex-column flex-j-center">
                        <?php echo the_content(); ?>

                        <div class="single-image flex flex-j-center">
                            <?php the_post_thumbnail(); ?>

                        </div>
                        <div class="single-image flex flex-j-center">
                            <?=types_render_field('image-description-1', ['output' => 'raw'])?>
                        </div>
                        <div class="single-image flex flex-j-center">
                            <?php if (class_exists('MultiPostThumbnails')) :
                            MultiPostThumbnails::the_post_thumbnail(
                                get_post_type(),
                                'feature-image-2'
                            );
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="main-container flex flex-column flex-j-center">
                    <div class="single-image flex flex-j-center">
                        <?php if (class_exists('MultiPostThumbnails')) :
                            MultiPostThumbnails::the_post_thumbnail(
                                get_post_type(),
                                'feature-image-3'
                            );
                        endif; ?>
                    </div>
                    <div class="main-container flex flex-j-center">
                        <div class="single-image flex flex-j-center">
                            <?php if (class_exists('MultiPostThumbnails')) :
                            MultiPostThumbnails::the_post_thumbnail(
                                get_post_type(),
                                'feature-image-4'
                            );
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-button">
                <a href="<?=types_render_field('url', ['output' => 'raw'])?>" id="image-w" class="site-link flex flex-j-center" target="blank">View Site</a>
            </div>
        </div>
        <?php endwhile; ?>
                        
        <?php endif; ?>
    </body>
    
    <?php get_footer(); ?>
