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

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
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
                                            <ul class="pl-0">
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
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo doloremque porro recusandae, molestiae repellendus omnis quos nihil dolore suscipit, sint dolorum minima tempora sapiente at nam sunt cumque eum corrupti!
                                    </div>

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
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. At dolorem omnis pariatur quaerat quibusdam optio accusamus soluta, dolores eum ex voluptatem, quae doloribus aut ipsa quidem necessitatibus error, in consectetur.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae error dolores sunt facilis quasi vitae corrupti iste, possimus dolorum expedita, quibusdam nulla, voluptatibus doloremque impedit repudiandae quidem optio a eligendi?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde doloremque suscipit veritatis porro eligendi ea? Impedit eius quis consectetur officia, earum vel aut modi aspernatur architecto enim nemo at ut?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores maiores, atque, facilis molestiae quia dolore, iure doloremque nihil quas ea explicabo voluptatibus enim libero a sunt vero quod excepturi sequi.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum eius numquam adipisci. Ea rem possimus voluptas, earum architecto veritatis reiciendis consequatur facere. Architecto voluptatibus vero quasi iste temporibus. Voluptatibus, aperiam.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque et laudantium explicabo suscipit fugit nemo molestias, sint sed architecto quia dicta velit aliquam libero ratione expedita aut minus, eius iusto!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui labore quam autem minima, animi nihil quod nesciunt officia dolor temporibus illum obcaecati soluta cum hic maxime nostrum impedit? Totam, numquam.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. At dolorem omnis pariatur quaerat quibusdam optio accusamus soluta, dolores eum ex voluptatem, quae doloribus aut ipsa quidem necessitatibus error, in consectetur.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae error dolores sunt facilis quasi vitae corrupti iste, possimus dolorum expedita, quibusdam nulla, voluptatibus doloremque impedit repudiandae quidem optio a eligendi?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde doloremque suscipit veritatis porro eligendi ea? Impedit eius quis consectetur officia, earum vel aut modi aspernatur architecto enim nemo at ut?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores maiores, atque, facilis molestiae quia dolore, iure doloremque nihil quas ea explicabo voluptatibus enim libero a sunt vero quod excepturi sequi.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum eius numquam adipisci. Ea rem possimus voluptas, earum architecto veritatis reiciendis consequatur facere. Architecto voluptatibus vero quasi iste temporibus. Voluptatibus, aperiam.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque et laudantium explicabo suscipit fugit nemo molestias, sint sed architecto quia dicta velit aliquam libero ratione expedita aut minus, eius iusto!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui labore quam autem minima, animi nihil quod nesciunt officia dolor temporibus illum obcaecati soluta cum hic maxime nostrum impedit? Totam, numquam.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. At dolorem omnis pariatur quaerat quibusdam optio accusamus soluta, dolores eum ex voluptatem, quae doloribus aut ipsa quidem necessitatibus error, in consectetur.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae error dolores sunt facilis quasi vitae corrupti iste, possimus dolorum expedita, quibusdam nulla, voluptatibus doloremque impedit repudiandae quidem optio a eligendi?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde doloremque suscipit veritatis porro eligendi ea? Impedit eius quis consectetur officia, earum vel aut modi aspernatur architecto enim nemo at ut?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores maiores, atque, facilis molestiae quia dolore, iure doloremque nihil quas ea explicabo voluptatibus enim libero a sunt vero quod excepturi sequi.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum eius numquam adipisci. Ea rem possimus voluptas, earum architecto veritatis reiciendis consequatur facere. Architecto voluptatibus vero quasi iste temporibus. Voluptatibus, aperiam.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque et laudantium explicabo suscipit fugit nemo molestias, sint sed architecto quia dicta velit aliquam libero ratione expedita aut minus, eius iusto!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui labore quam autem minima, animi nihil quod nesciunt officia dolor temporibus illum obcaecati soluta cum hic maxime nostrum impedit? Totam, numquam.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. At dolorem omnis pariatur quaerat quibusdam optio accusamus soluta, dolores eum ex voluptatem, quae doloribus aut ipsa quidem necessitatibus error, in consectetur.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae error dolores sunt facilis quasi vitae corrupti iste, possimus dolorum expedita, quibusdam nulla, voluptatibus doloremque impedit repudiandae quidem optio a eligendi?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde doloremque suscipit veritatis porro eligendi ea? Impedit eius quis consectetur officia, earum vel aut modi aspernatur architecto enim nemo at ut?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores maiores, atque, facilis molestiae quia dolore, iure doloremque nihil quas ea explicabo voluptatibus enim libero a sunt vero quod excepturi sequi.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum eius numquam adipisci. Ea rem possimus voluptas, earum architecto veritatis reiciendis consequatur facere. Architecto voluptatibus vero quasi iste temporibus. Voluptatibus, aperiam.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque et laudantium explicabo suscipit fugit nemo molestias, sint sed architecto quia dicta velit aliquam libero ratione expedita aut minus, eius iusto!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui labore quam autem minima, animi nihil quod nesciunt officia dolor temporibus illum obcaecati soluta cum hic maxime nostrum impedit? Totam, numquam.
        </p>
        <?php //get_template_part('global-templates/presentazione'); ?>

        <!--MAIN-->
        <?php //get_template_part('global-templates/main'); ?>

        <!--FACEBOOK-->
        <?php //get_template_part('global-templates/facebook'); ?>
        
    </div>
</div>

<?php endwhile; ?>

<?php get_footer(); ?> 
