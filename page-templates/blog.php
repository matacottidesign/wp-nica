<?php
/**
 * Template Name: Blog
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
    <div class="py-5">
        <div class="row">
        
            <?php if( have_rows('ripetitore_card') ): ?>
            <?php while( have_rows('ripetitore_card') ): the_row(); 
            

                // vars
                $image = get_sub_field('immagine_card');
                $title = get_sub_field('titolo_card');
                $description = get_sub_field('descrizione_card');
                $link = get_sub_field('link_card');

                ?>
                <div class="col-12 col-md-6">

                <!--Articolo-->
                <div class="pt-5">
                    <div class="blog-card blog-card-blog">
                        <div class="blog-card-image mx-5">
                            <?php 
                            if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="blog-table">
                            <h3 class="blue-primary text-center"><?php echo $title ?></h3>
                            <p class="py-2"><?php echo $description ?></p>

                            <div class="d-flex justify-content-end">
                                <div class="pb-2">
                                    <?php 
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
            <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>