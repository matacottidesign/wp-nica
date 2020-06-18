<?php
/**
 * The right sidebar containing the main widget area.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( 'both' === $sidebar_pos ) : ?>
	<div class="col-md-3 widget-area" id="right-sidebar" role="complementary">
<?php else : ?>
	<div class="col-md-4 widget-area py-8" id="right-sidebar" role="complementary">

		<div>
			<a href="#">
				<button type="button" class="btn btn-primary w-100">
					Chiama lo studio
				</button>
			</a>
			<a href="#">
				<button type="button" class="btn btn-danger mt-3 w-100">
					Chiama per urgenze
				</button>
			</a>
		</div>

		<!--Dove siamo-->
		<h4 class="text-primary pt-5">Dove siamo</h4>
		<ul>
			<li><a href="https://www.google.com/maps/place/NI.CA.+S.r.l./@41.7700256,12.659116,15z/data=!4m5!3m4!1s0x0:0xce9c24cdd6f2334e!8m2!3d41.7700256!4d12.659116">Piazza S. Barnaba, 18</a></li>
			<li>00047 | Marino (RM)</li>
		</ul>

		<!--Orari-->
		<h4 class="text-primary pt-5">Orari</h4>
		<ul>
			<li>Lunedì – Venerdì: 9:00 – 19:00</li>
			<li>Sabato: 9:00 – 13:00</li>
			<li>Urgenze: disponibilità h24</li>
		</ul>

		<hr>
<?php endif; ?>
<?php dynamic_sidebar( 'right-sidebar' ); ?>

</div><!-- #right-sidebar -->
