<?php

/**
 * Work [single case-study] page
 *
 * @package BBWP
 */

get_header();
get_template_part('_partials/headers/header', 'work');

?>

<main class="case-study">
    <?php get_template_part('_partials/pages/case-study/page-top'); ?>
    <?php get_template_part('_partials/pages/case-study/primary-content'); ?>
    <?php get_template_part('_partials/flx/case-studies/blocks'); ?>
    <?php get_template_part('_partials/pages/case-study/related-posts'); ?>
</main>

<?php get_footer(); ?>