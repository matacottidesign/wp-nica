<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part('global-templates/carousel-top'); ?>

<div class="home-cover d-flex align-items-center text-right">
    <div class="container">
        <h1>Dal 1970</h1>
        <h2>curiamo il tuo sorriso</h2>
    </div>
</div>

<div class="pt-8">
    <div class="container">

        <div class="home-carousel card p-5">

            <!--Carosello | Intervallo 10 secondi (10000 millisecondi)-->
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="10000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">

                            <div class="col-6 col-md-6">
                                <div class="row slide-row">
                                    <div class="col-12 col-md-2">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="col-12 col-md-10">
                                        <h4>Prenota il tuo appuntamento</h4>
                                        <div class="d-block">
                                        <a href="#"><button type="button" class="btn btn-primary mt-3">Chiama lo studio</button></a>
                                        <a href="#"><button type="button" class="btn btn-danger mt-3">Chiama per urgenze</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-6">
                                <div class="row slide-row">
                                    <div class="col-12 col-md-2">
                                        <i class="far fa-calendar-alt"></i>
                                    </div>
                                    <div class="col-12 col-md-10">
                                        <h4>Orari</h4>
                                        <p>Orario attuale: </p>
                                        <hr>
                                        <ul>
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
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">

                            <div class="col-6 col-md-6">
                                <div class="row slide-row">
                                    <div class="col-12 col-md-2">
                                    <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="col-12 col-md-10">
                                        <h4>Dove siamo</h4>
                                        <ul>
                                            <li><a href="https://www.google.com/maps/place/NI.CA.+S.r.l./@41.7700256,12.659116,15z/data=!4m5!3m4!1s0x0:0xce9c24cdd6f2334e!8m2!3d41.7700256!4d12.659116">Piazza S. Barnaba, 18</a></li>
                                            <li>00047 Marino (RM)</li>
                                            <hr>
                                            <a href="#">info@nicaodontoiatria.it</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-6">
                              
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11902.818538417368!2d12.659116!3d41.7700256!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xce9c24cdd6f2334e!2sNI.CA.%20S.r.l.!5e0!3m2!1sit!2sit!4v1589982525245!5m2!1sit!2sit" class="w-100" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                
                            </div>

                        </div>
                    </div>
                </div>
                
            </div> <!--carousel-->
            <a class="carousel-control-prev py-2" href="#carouselExampleControls" role="button" data-slide="prev">
                <div class="text-center">
                    <span aria-hidden="true"><i class="carousel-arrow fas fa-caret-left"></i></span>
                    <span class="sr-only">Previous</span>
                </div>
            </a>
            <a class="carousel-control-next pt-1" href="#carouselExampleControls" role="button" data-slide="next">
                <div class="text-center">
                    <span aria-hidden="true"><i class="carousel-arrow fas fa-caret-right"></i></span>
                    <span class="sr-only">Next</span>
                </div>
            </a>

        </div>

        <!--CHI SIAMO-->
        <div class="pt-8"><?php the_content(); ?></div>

        <?php //get_template_part('global-templates/presentazione'); ?>

        <!--MAIN-->
        <?php //get_template_part('global-templates/main'); ?>

        <!--FACEBOOK-->
        <?php //get_template_part('global-templates/facebook'); ?>
        
    </div>
</div>

<?php endwhile; ?>

<?php get_footer(); ?> 
