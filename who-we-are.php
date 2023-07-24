<?php

/**
 * Template Name: Who we are
 *
 * @package BBWP
 */

get_header();
get_template_part('_partials/headers/header', 'default');
?>

<main class="who-we-are">
    <?php get_template_part('_templates/loop', 'team') ?>
    <?php get_template_part('_partials/flx/who-we-are/blocks') ?>
</main>

<?php get_footer(); ?>