<?php
/**
 * The Sidebar widget area for static frontpage.
 *
 * @package contractcloud
 */
?>

	<?php
	// If footer sidebars do not have widget let's bail.

	if ( ! is_active_sidebar( 'sidebar-widget-1' ) && ! is_active_sidebar( 'sidebar-widget-2' ) && ! is_active_sidebar( 'sidebar-widget-3' ) )
		return;
	// If we made it this far we must have widgets.
	?>
	<div class="sidebar-widget-area">
		<?php if ( is_active_sidebar( 'sidebar-widget-1' ) ) : ?>
		<div class="sidebar-widget" role="complementary">
			<?php dynamic_sidebar( 'sidebar-widget-1' ); ?>
		</div><!-- .widget-area .first -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-widget-2' ) ) : ?>
		<div class="sidebar-widget" role="complementary">
			<?php dynamic_sidebar( 'sidebar-widget-2' ); ?>
		</div><!-- .widget-area .second -->
		<?php endif; ?>

		<?php #if ( is_active_sidebar( 'sidebar-widget-3' ) ) : ?>
		<div class="sidebar-widget" role="complementary">
			<?php dynamic_sidebar( 'sidebar-widget-3' ); ?>
		</div> <!--.widget-area .third -->
		<?php #endif; ?>
	</div>

