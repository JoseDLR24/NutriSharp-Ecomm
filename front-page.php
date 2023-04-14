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
		
		<section class="categories pt-5 pb-5">
			<div class="container">
				<h1 class="text-center pt-5">Categories</h1>
				<p class="w-50">We offer a great variety of products from where you can pick the one that suits you better</p>
			

				<div class="row pt-5">
					<div class="categories__col col-md-4 col-sm-12">
						<a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
							<img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/img/categories/performance.jpg" alt="gym performanec exercise image" load="lazy">
							<h2 class="position-absolute bottom-0 end-0 start-0 pb-2 mb-0 text-center bg-primary text-white">Performance</h2>
						</a>
					</div>

					<div class="categories__col col-md-4 col-sm-12">
						<a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
							<img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/img/categories/wellbeing.jpg" alt="gym performanec exercise image" load="lazy">
							<h2 class="position-absolute bottom-0 end-0 start-0 pb-2 mb-0 text-center bg-primary text-white">Well being</h2>
						</a>
					</div>

					<div class="categories__col col-md-4 col-sm-12">
						<a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
							<img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/img/categories/accessories.jpg" alt="gym performanec exercise image" load="lazy">
							<h2 class="position-absolute bottom-0 end-0 start-0 pb-2 mb-0 text-center bg-primary text-white">Accessories</h2>
						</a>
					</div>
				</div>

			</div>
		</section>


		<section class="container pt-5" style="padding-top: 400px;">

		</section>
	</main>

<?php
get_footer();
