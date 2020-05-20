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

        <!--CHI SIAMO-->
        <?php the_content(); ?>
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
