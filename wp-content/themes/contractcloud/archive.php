<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package contractcloud
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="jumbotron">
				<?php echo get_the_post_thumbnail( '25', 'full' ); ?>
				<div class="taglines">
					<h1>Contract Cloud Archives</h1>	
				</div>
			</div>
			<div class="container">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							printf( esc_html__( 'Author: %s', 'contractcloud' ), '<span class="vcard">' . get_the_author() . '</span>' );

						elseif ( is_day() ) :
							printf( esc_html__( 'Day: %s', 'contractcloud' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( esc_html__( 'Month: %s', 'contractcloud' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'contractcloud' ) ) . '</span>' );

						elseif ( is_year() ) :
							printf( esc_html__( 'Year: %s', 'contractcloud' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'contractcloud' ) ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							esc_html_e( 'Asides', 'contractcloud' );

						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
							esc_html_e( 'Galleries', 'contractcloud');

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							esc_html_e( 'Images', 'contractcloud');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							esc_html_e( 'Videos', 'contractcloud' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							esc_html_e( 'Quotes', 'contractcloud' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							esc_html_e( 'Links', 'contractcloud' );

						elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
							esc_html_e( 'Statuses', 'contractcloud' );

						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
							esc_html_e( 'Audios', 'contractcloud' );

						elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
							esc_html_e( 'Chats', 'contractcloud' );

						else :
							esc_html_e( 'Archives', 'contractcloud' );

						endif;
					?>
				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

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