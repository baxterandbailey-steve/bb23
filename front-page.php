<?php

/**
 * Homepage 
 *
 * @package BBWP
 */

get_header();
get_template_part('_partials/headers/header', 'front-page'); ?>

<main>
    <div class="grid-home contain">
        <h2 data-aos="fade-up">Selected Work</h2>
        <?php get_template_part('_partials/work-rows') ?>
    </div>


    <?php get_template_part('_partials/flx/blocks') ?>
    <?php get_template_part('_partials/newsroom') ?>

</main>
<?php get_footer(); ?>