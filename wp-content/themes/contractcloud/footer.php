<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package contractcloud
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!--close .main-content-area -->	
</div><!-- close .site-content -->

	<div id="footer-area">
		<div class="container footer-inner">
			<div class="row">
				<?php get_sidebar( 'footer' ); ?>
			</div>
		</div>

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info container">
				<div class="row">
					<div class="col-sm-2">
						<ul class="footer-nav">
							<li class="footer-nav-header">Learn More</li>
							<li><a href="#">What We Do</a></li>
							<li><a href="#">Markets</a></li>
							<li><a href="#">Products</a></li>
						</ul>
					</div>
					<div class="col-sm-2">
						<ul class="footer-nav">
							<li class="footer-nav-header">Resources</li>
							<li><a href="#">News</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Press Releases</a></li>
							<li><a href="#">Case Studies</a></li>
						</ul>
					</div>
					<div class="col-sm-2">
						<ul class="footer-nav">
							<li class="footer-nav-header">Contact</li>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Request Demo</a></li>
						</ul>
					</div>
					<div class="col-sm-2">
						<ul class="footer-nav">
							<li class="footer-nav-header">Legal</li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Terms</a></li>
						</ul>
					</div>
					<div class="col-sm-2">
						<div class="footer-nav-header">Social</div>
						<?php contractcloud_social(); ?>
					</div>
					<div class="col-sm-2">
						<a href="/demo" class="btn btn-lg btn-primary">Try Our Demo</a>
					</div>
				</div>
					<!-- <nav role="navigation" class="col-md-6"> -->
						<?php #contractcloud_footer_links(); ?>
					<!-- </nav> -->
				<div class="copyright text-center">
					&copy; Contract Cloud, Inc. 
					<script>document.write(new Date().getFullYear())</script>.
					All rights reserved. 
					<?php echo of_get_option( 'custom_footer_text', 'contractcloud' ); ?>
					<?php #contractcloud_footer_info(); ?>
				</div>
			</div><!-- .site-info -->
			<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
		</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>