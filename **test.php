<?php

/**
 * Template Name: Test
 *
 * @package BBWP
 */

get_header();
get_template_part('_partials/headers/header', 'default');
?>

<main class="test contain">
    <div class="our-work__featured">

        <?php get_template_part('_partials/flx/test/blocks') ?>

    </div>
</main>

<?php get_footer(); ?>