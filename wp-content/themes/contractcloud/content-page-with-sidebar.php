<?php
/**
 * The template used for displaying page content in page-fullwidth.php
 *
 * @package contractcloud
 */
?>

<div class="post-inner-content container">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header page-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="row entry-content">
    <div class="col-sm-2 category-sidebar">
      <?php get_sidebar( 'markets' ); ?>
    </div>
    <div class="col-sm-10">
      <h2><?php the_field('market-tagline'); ?></h2>

      <?php 
      $image = get_field('market-image');
      if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="market-image" />
      <?php endif; ?>

      <section id="overview" class="section-contrast">
        <h3><?php the_field('overview-title'); ?></h3>
        <p><?php the_field('overview-copy'); ?></p>
      </section>

      <!--Only displays custom fields if product overview page-->
      <?php if ( is_page('Products') ) : ?>
        <div class="product-info clearfix">
          <?php 
          $image = get_field('product-info1-image');
          if( !empty($image) ): ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="product-info1-image pull-left" />
          <?php endif; ?>
          <h3><?php the_field('product-info1-title'); ?></h3>
          <p><?php the_field('product-info1-copy'); ?></p>
        </div>  
        <div class="product-info clearfix">
          <?php 
          $image = get_field('product-info2-image');
          if( !empty($image) ): ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="product-info2-image pull-right" />
          <?php endif; ?>
          <h3><?php the_field('product-info2-title'); ?></h3>
          <p><?php the_field('product-info2-copy'); ?></p>
        </div>  
      <?php endif; ?>

      <script>
      jQuery(".product-href").click(function() {
        window.location = $(this).find("a").attr("href"); 
        return false;
      });
      </script>

      <!-- Only displays custom fields if product details page -->
      <?php if ( in_category('products') && !is_page('Products') ) : ?>
        <section id="feature-bullets">
          <h2><?php the_field('feature-header'); ?></h2>
          <div class="row">
            <div class="col-sm-6 bullet">
              <span><i class="fa fa-2x <?php the_field('feature-icon1'); ?>"></i></span>
              <p><?php the_field('feature-text1'); ?></p>
            </div>
            <div class="col-sm-6 bullet">
              <span><i class="fa fa-2x <?php the_field('feature-icon2'); ?>"></i></span>
              <p><?php the_field('feature-text2'); ?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 bullet">
              <span><i class="fa fa-2x <?php the_field('feature-icon3'); ?>"></i></span>
              <p><?php the_field('feature-text3'); ?></p>
            </div>
            <div class="col-sm-6 bullet">
              <span><i class="fa fa-2x <?php the_field('feature-icon4'); ?>"></i></span>
              <p><?php the_field('feature-text4'); ?></p>
            </div>
          </div>          
          <div class="row">
            <div class="col-sm-6 bullet">
              <span><i class="fa fa-2x <?php the_field('feature-icon5'); ?>"></i></span>
              <p><?php the_field('feature-text5'); ?></p>
            </div>
            <div class="col-sm-6 bullet">
              <span><i class="fa fa-2x <?php the_field('feature-icon6'); ?>"></i></span>
              <p><?php the_field('feature-text6'); ?></p>
            </div>
          </div>          
        </section>
        <section id="product-testimonial" class="clearfix">
          <?php 
          $image = get_field('testimonial-image');
          if( !empty($image) ): ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="testimonial-image pull-right" />
          <?php endif; ?>
          <blockquote><?php the_field('testimonial'); ?></blockquote>
          <p class="text-right"><?php the_field('testimonial-author'); ?><br /><?php the_field('testimonial-title-company'); ?></p>
        </section>
        <section id="demo-cta" class="text-center">
          <h3>See how Contract Cloud can help protect your company.</h3>
          <a href="#" class="btn btn-lg btn-primary">Try Our Demo</a>
        </section>
      <?php endif; ?>

      <?php the_content(); ?>
      <?php
        wp_link_pages( array(
          'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'contractcloud' ),
          'after'  => '</div>',
        ) );
      ?>
    </div>
	</div><!-- .entry-content -->
	<?php edit_post_link( esc_html__( 'Edit', 'contractcloud' ), '<footer class="entry-footer"><i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
</div><!--close .container -->
<script>
  jQuery('.dropdown-toggle').dropdown()
</script>