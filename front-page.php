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
        <h2><?php the_field('motto_del_sito'); ?></h2>
    </div>
</div>

<div class="pt-8">

        <?php get_template_part('global-templates/custom-facciata'); ?>

        <?php get_template_part('global-templates/custom-nostri-trattamenti'); ?>

        <?php get_template_part('global-templates/custom-banner-prenotazioni'); ?>
        

        

        <!--MAIN-->
        <?php //get_template_part('global-templates/main'); ?>

        <!--FACEBOOK-->
        <?php //get_template_part('global-templates/facebook'); ?>
        
</div>


<?php endwhile; ?>

<?php get_footer(); ?> 
