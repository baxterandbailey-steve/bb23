<?php

/**
 * Contact page
 *
 * @package BBWP
 */

get_template_part('_partials/headers/header', 'default'); ?>

<main class="contain">
    <?php get_template_part('_templates/loop') ?>
</main>

<?php get_footer(); ?>