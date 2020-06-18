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
			<a href="tel:069388398">
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
			<li>Lunedì – Venerdì: <b>9:00 – 19:00</b></li>
			<li>Sabato: <b>9:00 – 13:00</b></li>
			<li>Urgenze: disponibilità <b>h24</b></li>
		</ul>

		<p>
			In questo momento lo studio è 
			<span id="ora_esatta">...</span>
		</p>

		<script>
			let data = new Date();
			let Dd, Hh, Mm;
			Dd = data.getDay();
			Hh = data.getHours();
			Mm = data.getMinutes();
			Ss = data.getSeconds();

			//let settimana = ['Domenica', 'Lunedì', 'Martedì', 'Mercoledì', 'Giovedì', 'Venerdì', 'Sabato'];
			//document.getElementById("ora_esatta").innerHTML = settimana[Dd] + ', ' + Hh + ':' + Mm + ':' + Ss;

			if(Dd >= 1 && Dd <= 5){
				//Dal Lun-Ven dalle 9.00 alle 19.00
				if(Hh >= 9 && Hh <= 18){
					document.getElementById("ora_esatta").innerHTML = " aperto";
					document.getElementById("ora_esatta").style.color = "rgb(100, 197, 184)";
				}else{
					document.getElementById("ora_esatta").innerHTML = " chiuso";
					document.getElementById("ora_esatta").style.color = "#dc3545";
				}
			}else if(Dd === 6){
				//Sabato dalle 9.00 alle 13.00
				if(Hh >= 9 && Hh <= 12){
					document.getElementById("ora_esatta").innerHTML = " aperto";
					document.getElementById("ora_esatta").style.color = "rgb(100, 197, 184)";
				}else{
					document.getElementById("ora_esatta").innerHTML = " chiuso";
					document.getElementById("ora_esatta").style.color = "#dc3545";
				}
			}else{
				document.getElementById("ora_esatta").innerHTML = " chiuso";
				document.getElementById("ora_esatta").style.color = "#dc3545";
			}

			console.log(Dd);
			console.log(Hh);
		</script>

		<hr>
<?php endif; ?>
<?php dynamic_sidebar( 'right-sidebar' ); ?>

</div><!-- #right-sidebar -->
