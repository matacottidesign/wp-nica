<?php
/**
 * Template Name: Trattamenti
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

    <div id="accordionExample" class="container pt-5">
        <div class="row">
    
            <div class="col-12 col-md-3 list-group list-group-flush">
    
                <a class="list-group-item list-group-item-action bg-light" data-toggle="collapse" href="#collapseExample"
                    role="button" aria-expanded="true" aria-controls="collapseExample">
                    <?php the_field('voce_menu_1') ?>
                </a>
    
                <a class="list-group-item list-group-item-action bg-light" data-toggle="collapse" href="#Endodonzia"
                    role="button" aria-expanded="false" aria-controls="Endodonzia">
                    <?php the_field('voce_menu_2') ?>
                </a>
    
                <a class="list-group-item list-group-item-action bg-light" data-toggle="collapse" href="#Ortodonzia"
                    role="button" aria-expanded="false" aria-controls="Ortodonzia">
                    <?php the_field('voce_menu_3') ?>
                </a>
    
                <a class="list-group-item list-group-item-action bg-light" data-toggle="collapse" href="#Igiene-Orale"
                    role="button" aria-expanded="false" aria-controls="Igiene-Orale">
                    <?php the_field('voce_menu_4') ?>
                </a>
    
    
                <a class="list-group-item list-group-item-action bg-light accordion" id="test" data-toggle="collapse"
                    data-target="#collapseOne" role="button" aria-expanded="false" aria-controls="collapseOne">
                    <?php the_field('voce_menu_5') ?>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#test">
                    <div class="list-group-item list-group-item-action bg-light">
                        <ul>
                            <li>
                                <a class="list-group-item list-group-item-action bg-light" data-toggle="collapse"
                                    href="#Denti-Inclusi" role="button" aria-expanded="true" aria-controls="Denti-Inclusi">
                                    <?php the_field('voce_menu_5-1') ?>
                                </a>
                            </li>
                            <li>
                                <a class="list-group-item list-group-item-action bg-light" data-toggle="collapse"
                                    href="#Cisti" role="button" aria-expanded="true" aria-controls="Cisti">
                                    <?php the_field('voce_menu_5-2') ?>
                                </a>
                            </li>
                            <li>
                                <a class="list-group-item list-group-item-action bg-light" data-toggle="collapse"
                                    href="#Impiantologia" role="button" aria-expanded="true" aria-controls="Impiantologia">
                                    <?php the_field('voce_menu_5-3') ?>
                                </a>
                            </li>
                            <li>
                                <a class="list-group-item list-group-item-action bg-light" data-toggle="collapse"
                                    href="#Rigenerativa" role="button" aria-expanded="true" aria-controls="Rigenerativa">
                                    <?php the_field('voce_menu_5-4') ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
    
    
                <a class="list-group-item list-group-item-action bg-light accordion" id="protesi" data-toggle="collapse"
                    data-target="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseOne">
                    <?php the_field('voce_menu_6') ?>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#protesi">
                    <div class="list-group-item list-group-item-action bg-light">
                        <ul>
                            <li>
                                <a class="list-group-item list-group-item-action bg-light" data-toggle="collapse"
                                    href="#Fissa" role="button" aria-expanded="true" aria-controls="Fissa">
                                    <?php the_field('voce_menu_6-1') ?>
                                </a>
                            </li>
                            <li>
                                <a class="list-group-item list-group-item-action bg-light" data-toggle="collapse"
                                    href="#Rimovibile" role="button" aria-expanded="true" aria-controls="Rimovibile">
                                    <?php the_field('voce_menu_6-2') ?>
                                </a>
                            </li>
                            <li>
                                <a class="list-group-item list-group-item-action bg-light" data-toggle="collapse"
                                    href="#Combinata" role="button" aria-expanded="true" aria-controls="Combinata">
                                    <?php the_field('voce_menu_6-3') ?>
                                </a>
                            </li>
                            <li>
                                <a class="list-group-item list-group-item-action bg-light" data-toggle="collapse"
                                    href="#Implantare" role="button" aria-expanded="true" aria-controls="Implantare">
                                    <?php the_field('voce_menu_6-4') ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
    
                <a class="list-group-item list-group-item-action bg-light" data-toggle="collapse" href="#Medicina"
                    role="button" aria-expanded="false" aria-controls="Medicina">
                    <?php the_field('voce_menu_7') ?>
                </a>
            </div>
    
            <div class="col-12 col-md-9">
                <div class="collapse" id="collapseExample" data-parent="#accordionExample">
                    <div class="card card-body">
                        <?php the_field('descrizione_1') ?>
                    </div>
                </div>
    
                <div class="collapse" id="Endodonzia" data-parent="#accordionExample">
                    <div class="card card-body">
                        <?php the_field('descrizione_2') ?>
                    </div>
                </div>
    
                <div class="collapse" id="Ortodonzia" data-parent="#accordionExample">
                    <div class="card card-body">
                        <?php the_field('descrizione_3') ?>
                    </div>
                </div>
    
                <div class="collapse" id="Igiene-Orale" data-parent="#accordionExample">
                    <div class="card card-body">
                        <?php the_field('descrizione_4') ?>
                    </div>
                </div>
    
                <!--=================================================================================================-->
                <div class="collapse" id="Denti-Inclusi" data-parent="#accordionExample">
                    <div class="card card-body">
                        <?php the_field('descrizione_5-1') ?>
                    </div>
                </div>
    
                <div class="collapse" id="Cisti" data-parent="#accordionExample">
                    <div class="card card-body">
                        <?php the_field('descrizione_5-2') ?>
                    </div>
                </div>
    
                <div class="collapse" id="Impiantologia" data-parent="#accordionExample">
                    <div class="card card-body">
                        <?php the_field('descrizione_5-3') ?>
                    </div>
                </div>
    
                <div class="collapse" id="Rigenerativa" data-parent="#accordionExample">
                    <div class="card card-body">
                        <?php the_field('descrizione_5-4') ?>
                    </div>
                </div>
    
                <!--=================================================================================================-->
                <div class="collapse" id="Fissa" data-parent="#accordionExample">
                    <div class="card card-body">
                        <?php the_field('descrizione_6-1') ?>
                    </div>
                </div>
    
                <div class="collapse" id="Rimovibile" data-parent="#accordionExample">
                    <div class="card card-body">
                        <?php the_field('descrizione_6-2') ?>
                    </div>
                </div>
    
                <div class="collapse" id="Combinata" data-parent="#accordionExample">
                    <div class="card card-body">
                        <?php the_field('descrizione_6-3') ?>
                    </div>
                </div>
    
                <div class="collapse" id="Implantare" data-parent="#accordionExample">
                    <div class="card card-body">
                        <?php the_field('descrizione_6-4') ?>
                    </div>
                </div>
    
                <!-- Medicina Estetica -->
                <div class="collapse" id="Medicina" data-parent="#accordionExample">
                    <div class="card card-body">
                        <?php the_field('descrizione_7') ?>
                    </div>
                </div>
    
            </div>

        </div>
    </div>

</div>

<?php get_footer(); ?>