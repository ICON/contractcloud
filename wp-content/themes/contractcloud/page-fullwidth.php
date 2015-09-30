<?php
/**
 * Template Name: Full-width(no sidebar)
 *
 * This is the template that displays full width page without sidebar
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
            <h1>
              <?php 
              $image = get_field('tagline-icon');
              if( !empty($image) ): ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="tagline-icon" />
              <?php endif; ?>
              <span><?php the_field('main-tagline'); ?></span>
            </h1>
            <h2><span><?php the_field('sub-tagline'); ?></span></h2>
          </div>
        </div>
        <?php
          // Checks if this is market page to enable sidebar
          if ( in_category('markets') || in_category('products') ) :
            get_template_part( 'content', 'page-with-sidebar');          
          else :
            get_template_part( 'content', 'page' );
          endif;
        ?>

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
