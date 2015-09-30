<?php
/**
 * Template Name: Home Page
 *
 * This is the template that displays front/homepage only
 *
 * @package contractcloud
 */

get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>
        <div class="jumbotron">
          <?php the_post_thumbnail( 'contractcloud-featured', array( 'class' => 'single-featured' )); ?>
          <div class="taglines text-right">
            <h1><?php the_field('main-tagline'); ?></h1>
            <h2><span><?php the_field('sub-tagline'); ?></span></h2>
          </div>
        </div>
        <section id="home-bullets">
          <div class="container">
            <h2><?php the_field('bullet-tagline'); ?></h2>
            <div class="row">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-sm-6 bullet">
                    <span><i class="fa fa-2x <?php the_field('bullet-icon1'); ?>"></i></span>
                    <div>
                      <h3><?php the_field('bullet-header1'); ?></h3>
                      <p><?php the_field('bullet-text1'); ?></p>
                    </div>
                  </div>
                  <div class="col-sm-6 bullet">
                    <span><i class="fa fa-2x <?php the_field('bullet-icon2'); ?>"></i></span>
                    <div>
                      <h3><?php the_field('bullet-header2'); ?></h3>
                      <p><?php the_field('bullet-text2'); ?></p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6 bullet">
                    <span><i class="fa fa-2x <?php the_field('bullet-icon3'); ?>"></i></span>
                    <div>
                      <h3><?php the_field('bullet-header3'); ?></h3>
                      <p><?php the_field('bullet-text3'); ?></p>
                    </div>
                  </div>
                  <div class="col-sm-6 bullet">
                    <span><i class="fa fa-2x <?php the_field('bullet-icon4'); ?>"></i></span>
                    <div>
                      <h3><?php the_field('bullet-header4'); ?></h3>
                      <p><?php the_field('bullet-text4'); ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
              </div>
            </div><!--/.row-->
            <?php 
            $image = get_field('screenshot-image');
            if( !empty($image) ): ?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="bullet-screenshot" />
            <?php endif; ?>
          </div><!--/.container-->
        </section>

        <?php get_template_part( 'content', 'home' ); ?>

        <?php
          // If comments are open or we have at least one comment, load up the comment template
          if ( get_theme_mod( 'contractcloud_page_comments' ) == 1 ) :
            if ( comments_open() || '0' != get_comments_number() ) :
              comments_template();
            endif;
          endif;
        ?>

      <?php endwhile; // end of the loop. ?>

    </main><!-- #main -->

  </div><!-- #primary -->

<?php get_footer(); ?>
