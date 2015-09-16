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
            <div class="container flex col-lg-12 flex-column flex-j-center">
                <h3 class="link-title"><? the_title() ?></h3>
                <a href="<?=types_render_field('url', ['output' => 'raw'])?>" id="image-w" target="blank">View Site</a>

                <?php echo the_content(); ?>

                <?php the_post_thumbnail(); ?>

                <?php if (class_exists('MultiPostThumbnails')) :
                    MultiPostThumbnails::the_post_thumbnail(
                        get_post_type(),
                        'feature-image-3'
                    );
                endif; ?>
            </div>
        </div>
        <?php endwhile; ?>
                        
        <?php endif; ?>
    </body>
    
    <?php get_footer(); ?>
