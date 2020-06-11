<div class="bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 py-5">
                <h2 class="text-white"><?php the_field('titolo_banner_1'); ?></h2>
                <div>
                    <?php 
                    $link = get_field('link_banner_1');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                            <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                <button type="button" class="btn btn-primary mt-3">
                                    <?php echo esc_html( $link_title ); ?>
                                </button>
                            </a>
                    <?php endif; ?>
                </div>
                <div>
                    <?php 
                    $link = get_field('link_banner_2');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                            <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                <button type="button" class="btn btn-danger mt-3">
                                    <?php echo esc_html( $link_title ); ?>
                                </button>
                            </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-12 col-md-6 py-5">
                <h2 class="text-white"><?php the_field('titolo_banner_2'); ?></h2>
                <div class="d-flex justify-content-between">
                    <?php if( have_rows('convenzioni') ): ?>
                        <?php while( have_rows('convenzioni') ): the_row(); 
                            // vars
                            $image = get_sub_field('immagine');?>
                            <img class="mt-3" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>