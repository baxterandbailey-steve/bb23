<?php

/**
 * Template Name: Test
 *
 * @package BBWP
 */

get_header();
get_template_part('_partials/headers/header', 'default');
?>

<main class="contain">
    <h1><?php the_title(); ?></h1>

    <?php get_template_part('_partials/flx/test/blocks') ?>
</main>

<?php get_footer(); ?>