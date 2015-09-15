
<?php if(have_posts()): ?>

    <?php while(have_posts()): ?>

    <?php the_post(); ?>
    <body>
        <div class="single-container">
            <h3><? the_title() ?></h3>

            <?php echo the_content(); ?>

            <?php the_post_thumbnail(); ?>
            
            <?php if (class_exists('MultiPostThumbnails')) :
                MultiPostThumbnails::the_post_thumbnail(
                    get_post_type(),
                    'feature-image-3'
                );
            endif; ?>
            
            <?php endwhile; ?>
                    
            <?php endif; ?>
        </div>
    <?php get_footer(); ?>
