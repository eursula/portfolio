<?php get_header(); ?>

        <div class="container">
            <?php if ( have_posts()) :
           while ( have_posts()) : the_post(); ?>

           <h2><?php echo the_title(); ?></h2>

           <?php echo the_content(); ?>

            <?php endwhile; else: ?>
           
            <div class="container" id="1">
                <div class="title-box flex flex-column flex-j-center">
                    <h2 id="name">EURSULA HICKS</h1>
           
                    <h1 id="title">WEB DEVELOPER</h1>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="flex flex-j-center">
            <h1 class="link-title" id="2">ABOUT</h1>
        </div>
        <div class="flex flex-j-center">
            <img src="<?php echo esc_url( site_url( '/wp-content/themes/my-theme/css/img/my-image.jpg' ) ); ?>" class="my-pic" alt="Eursula Hicks">
        </div>
        <div class="paragraph flex flex-j-center">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, aliquam, sed officia enim eaque sint doloribus sunt numquam tempore voluptatem eius saepe ea soluta corporis fuga dolorum a nobis molestias.</p>
        </div>
    </section>
    <section>
        <div class="flex flex-j-center">
            <h1 class="link-title" id="3">WORK</h1>
        </div>
        <div class="item-box flex flex-j-around">
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
            </div>
        </div>
    </section>
    <section class="dark">
        <div class="contact-box">
            <div class="flex flex-j-center">
                <h1 class="link-title" id="4">CONTACT</h1>
            </div>
        </div>
    <?php endif; ?>

<?php get_footer(); ?>