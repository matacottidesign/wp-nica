<?php
/**
 * Template Name: Chi siamo
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

    <div class="py-8">
        <?php the_field('storia'); ?>
    </div>

</div>


    <!--Banner-->
    <?php $img_bg_banner = get_field('immagine_background_banner'); ?>
    <div style="background-image: url('<?php echo $img_bg_banner[url]; ?>');" class="bg-banner">
        <div class="container">

                <h2 class="text-white"><?php the_field('titolo_banner_1'); ?></h2>

                <div class="d-flex justify-content-center">
                <?php 
                $link = get_field('link_banner_1');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                            <button type="button" class="btn btn-primary my-5 mx-5">
                                <?php echo esc_html( $link_title ); ?>
                            </button>
                        </a>
                <?php endif; ?>

                <?php 
                $link = get_field('link_banner_2');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                            <button type="button" class="btn btn-danger my-5 mx-5">
                                <?php echo esc_html( $link_title ); ?>
                            </button>
                        </a>
                <?php endif; ?>
                </div>

        </div>
    </div>


<div class="container">
    <!--Studio-->
    <div class="row pt-8">
        <div class="col-12 col-md-8">
            <h2><?php the_field('titolo1'); ?></h2>
            <?php the_field('descrizione1'); ?>
        </div>
        <div class="col-12 col-md-4">
            <?php 
            $immagine = get_field('immagine1');
            if( !empty( $immagine ) ): ?>
                <img src="<?php echo esc_url($immagine['url']); ?>" alt="<?php echo esc_attr($immagine['alt']); ?>" />
            <?php endif; ?>
        </div>
    </div>

    <!--Team-->
    <div class="pb-8">
        <h2><?php the_field('titolo2'); ?></h2>
    </div>

</div>

<?php get_footer(); ?>