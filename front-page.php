<?php

/**
 * Homepage 
 *
 * @package BBWP
 */

get_header();
get_template_part('_partials/headers/header', 'front-page'); ?>

<main>
    <section class="flexible-content__home">
        <h2 class="section-title">Selected Work</h2>
        <?php get_template_part('_partials/flx/homepage/blocks') ?>
    </section>

    <?php get_template_part('_partials/page-sections/newsroom') ?>
    <?php get_template_part('_partials/page-sections/get-in-touch') ?>

</main>
<?php get_footer(); ?>