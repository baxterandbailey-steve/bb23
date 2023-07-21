<?php

/**
 * Header: default
 *
 * @package BBWP
 */

$header_statement = get_field('statement');
?>

<header>
    <?php get_template_part('_partials/elements/logo'); ?>
    <?php get_template_part('_partials/site-furniture/navbar'); ?>
</header>

<div class="banner-standard contain">
    <span class="page-title"><?php the_title(); ?></span>
    <h1 class="statement"><?php echo $header_statement; ?></h1>
</div>