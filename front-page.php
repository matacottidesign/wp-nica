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
        <h1><?php the_field('motto_del_sito'); ?></h1>
    </div>
</div>

<div class="pt-8">

        <?php get_template_part('global-templates/custom-facciata'); ?>

        <?php get_template_part('global-templates/custom-nostri-trattamenti'); ?>

        <?php get_template_part('global-templates/custom-banner-prenotazioni'); ?>

        <!--Cards-->
        <div class="bg-skills">
            <div class="container">
                <h2 class="pt-8">Articoli recenti</h2>
                <div class="row">

                    <div class="col-12 col-md-6">
                        <!--Articolo-->
                        <div class="pt-5">
                            <div class="blog-card blog-card-blog">
                                <div class="blog-card-image mx-5">
                                    <?php 
                                    $image = get_field('immagine_card_1');
                                    if( !empty( $image ) ): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="blog-table">
                                    <h3 class="blue-primary text-center"><?php the_field('titolo_card_1'); ?></h3>
                                    <p class="py-2"><?php the_field('descrizione_card_1'); ?></p>

                                    <div class="d-flex justify-content-end">
                                        <div class="pb-2">
                                            <?php 
                                            $link = get_field('link_card_1');
                                            if( $link ): 
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                                $link_target = $link['target'] ? $link['target'] : '_self';
                                                ?>
                                                    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                                        <button type="button" class="btn btn-warning">
                                                            <?php echo esc_html( $link_title ); ?>
                                                        </button>
                                                    </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <!--Articolo-->
                        <div class="pt-5">
                            <div class="blog-card blog-card-blog">
                                <div class="blog-card-image mx-5">
                                    <?php 
                                    $image = get_field('immagine_card_2');
                                    if( !empty( $image ) ): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="blog-table">
                                    <h3 class="blue-primary text-center"><?php the_field('titolo_card_2'); ?></h3>
                                    <p class="py-2"><?php the_field('descrizione_card_2'); ?></p>

                                    <div class="d-flex justify-content-end">
                                        <div class="pb-2">
                                            <?php 
                                            $link = get_field('link_card_2');
                                            if( $link ): 
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                                $link_target = $link['target'] ? $link['target'] : '_self';
                                                ?>
                                                    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                                        <button type="button" class="btn btn-warning">
                                                            <?php echo esc_html( $link_title ); ?>
                                                        </button>
                                                    </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
       
                </div>
                <div class="pb-8 text-right">
                    <a href="#">Entra nel Blog</a>
                </div>
            </div>
        </div>
        

        

        <!--MAIN-->
        <?php //get_template_part('global-templates/main'); ?>

        <!--FACEBOOK-->
        <?php //get_template_part('global-templates/facebook'); ?>
        
</div>


<?php endwhile; ?>

<?php get_footer(); ?> 
