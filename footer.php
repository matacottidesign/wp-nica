<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<a href="#">
	<div class="bottom-btn py-2 mb-2 ml-2 fixed-bottom d-flex align-items-center justify-content-center">
		<i class="fas fa-phone-alt"></i>
	</div>
</a>

<footer class="bg-secondary mt-1">
	<div class="container">
		<div class="row pb-5">
			<div class="col-6 col-md-4">
				<!--Orari-->
				<h4 class="text-primary pt-5">Orari</h4>
				<ul class="orari-footer">
					<div class="d-flex justify-content-between">
						<li>Lun - Ven</li>
						<li><b>9 - 19</b></li>
					</div>
					<div class="d-flex justify-content-between">
						<li>Sab</li>
						<li><b>9 - 13</b></li>
					</div>
					<div class="d-flex justify-content-between">
						<li>Urgenze</li>
						<li><b>h24</b></li>
					</div>
				</ul>
				<!--Dove siamo-->
				<h4 class="text-primary pt-5">Dove siamo</h4>
				<ul class="orari-footer">
					<div class="d-flex justify-content-between">
						<li><a href="https://www.google.com/maps/place/NI.CA.+S.r.l./@41.7700256,12.659116,15z/data=!4m5!3m4!1s0x0:0xce9c24cdd6f2334e!8m2!3d41.7700256!4d12.659116">Piazza S. Barnaba, 18</a></li>
						<li>00047 | Marino (RM)</li>
					</div>
				</ul>
			</div>
			<div class="col-6 col-md-4 text-right">
				<h4 class="text-primary pt-5">Menu</h4>
				<ul class="orari-footer">
					<li class="mb-3"><a href="#">Home</a></li>
					<li class="mb-3"><a href="#">Chi siamo</a></li>
					<li class="mb-3"><a href="#">Trattamenti</a></li>
					<li class="mb-3"><a href="#">Blog</a></li>
					<li><a href="#">Contatti</a></li>
				</ul>
			</div>
			<div class="col-12 col-md-4">
				<div class="pt-5">
					<a href="#">
						<button type="button" class="btn btn-primary w-100">
							Chiama lo studio
						</button>
					</a>
				</div>
				<div>
					<a href="#">
						<button type="button" class="btn btn-danger mt-3 w-100">
							Chiama per urgenze
						</button>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

