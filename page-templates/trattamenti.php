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

    <div class="mt-5">
        <div class="row">
            <div class="col-12 col-md-8">
                <?php the_field('descrizione_pagina_trattamenti'); ?>
            </div>
            <div style="font-size: 100px; color: #00477e;" class="col-12 col-md-4 d-flex justify-content-center align-items-center">
                <i class="fas fa-clipboard-list"></i>
            </div>
        </div>
    </div>

    <div id="accordionExample" class="container pb-5">
        <?php get_template_part('global-templates/custom-trattamenti-lista'); ?>
    </div>

</div>

<?php get_footer(); ?>