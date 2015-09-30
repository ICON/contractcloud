<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package contractcloud
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="jumbotron">
				<?php echo get_the_post_thumbnail( '25', 'full' ); ?>
				<div class="taglines">
					<h1>Search Results</h1>	
				</div>
			</div>
			<div class="container">
				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h2 class="page-title show"><?php printf( esc_html__( 'Search Results for: %s', 'contractcloud' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
					</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'search' ); ?>

					<?php endwhile; ?>

					<?php contractcloud_paging_nav(); ?>

				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>
			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php #get_sidebar(); ?>
<?php get_footer(); ?>
