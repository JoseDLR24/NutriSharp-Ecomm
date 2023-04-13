<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nutrisharp
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section class="container pb-5 pt-4">
			<div id="carouselExampleIndicators" class="carousel slide overflow-hidden rounded-4">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="<?php echo get_template_directory_uri(); ?>/img/slider/gym1.png" class="d-block w-100" alt="slider image example 1">
					</div>
					<div class="carousel-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/slider/gym2.png" class="d-block w-100" alt="slider image example 2">
					</div>
					<div class="carousel-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/slider/gym3.png" class="d-block w-100" alt="slider image example 3">
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</section>

		<section class="container">
			<div class="row d-flex justify-content-center">
				<h1 class="text-center pt-5">Popular Products</h1>
				<p class="w-50">We offer a great variety of products from where you can pick the one that suits you better</p>
			</div>
			<div class="pt-5 pb-5">
				<?php echo do_shortcode('[products columns=4 limit=4]') ?>
			</div>
		</section>
		
		<section class="container pt-5" style="padding-top: 400px;">

		</section>
	</main>

<?php
// get_footer();
