<?php

/**
 * Template Name: What we do
 * 
 * @package BBWP
 */

get_header();
get_template_part('_partials/headers/header', 'default'); ?>

<main class="what-we-do">
    <?php get_template_part('_partials/flx/what-we-do/blocks') ?>
    <?php get_template_part('_partials/page-sections/get-in-touch') ?>
</main>

<?php get_footer(); ?>