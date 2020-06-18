<?php
/**
 * Template Name: Contatti
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header(); ?>

<?php $image = get_field('immagine_background'); ?>
<div style="background-image: url('<?php echo $image[url]; ?>');" class="custom-bg d-flex justify-content-center align-items-center">
    <?php the_title( '<h1>', '</h1>' ); ?>
</div>

<div class="container">

    <div class="row">
        <div class="col-12 col-md-8 pt-5 pb-3">
            <?php echo do_shortcode('[contact-form-7 id="13143" title="Modulo di contatto 1"]'); ?>
        </div>
        <div class="col-12 col-md-4 py-5">
            <div class="testo-contatti">
                <?php the_field('info_contatti'); ?>
                <hr>
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
            </div>
        </div>
    </div>
        
</div>

<?php get_footer(); ?>