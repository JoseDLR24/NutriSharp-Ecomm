<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nutrisharp
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="bg-primary text-white pt-5 pb-5">
			<div class="container">
				<div class="row">
					<div class="col-2">
						About
					</div>
					<div class="col-2">
						Company
					</div>
					<div class="col-2">
						Keep in Touch
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col">
					<p>&copy; <?php bloginfo('name');?><?php echo date('Y'); ?></p>
				</div>
				<div class="col h-25 d-inline-block text-end">
					<img src="<?php echo get_template_directory_uri(); ?>/img/payment-methods.png" class="img-fluid"  alt="">
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
