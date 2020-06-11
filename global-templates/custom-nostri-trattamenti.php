<div class="container">
    <div class="py-8">
        <h2 class="text-center"><?php the_field('titolo_area_trattamenti'); ?></h2>
        <div class="row mb-4">
            <div class="col-6 col-md-3">
                <div class="treatment-carousel treatment-carousel-1 card px-3 py-5 mt-5 text-center">
                <i class="fas fa-shield-alt"></i>
                <h6 class="pt-3"><?php the_field('card_1'); ?></h6>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="treatment-carousel treatment-carousel-2 card px-3 py-5 mt-5 text-center">
                <i class="fas fa-tooth"></i>
                <h6 class="pt-3"><?php the_field('card_2'); ?></h6>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="treatment-carousel treatment-carousel-3 card px-3 py-5 mt-5 text-center">
                <i class="fas fa-teeth-open"></i>
                <h6 class="pt-3"><?php the_field('card_3'); ?></h6>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="treatment-carousel treatment-carousel-4 card px-3 py-5 mt-5 text-center">
                <i class="fas fa-baby"></i>
                <h6 class="pt-3"><?php the_field('card_4'); ?></h6>
                </div>
            </div>
        </div>
        <div class="text-right">
            <a href="#">
                <?php 
                $link = get_field('link_trattamenti');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
            </a>
        </div>
    </div>
</div>