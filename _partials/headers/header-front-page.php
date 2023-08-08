<?php

/**
 * Header: front-page
 *
 * @package BBWP
 */

$header_statement = get_field('statement');
?>

<header>
    <div class="header-top">
        <?php get_template_part('_partials/elements/logo'); ?>
        <button class="navicon"></button>
    </div>
    <nav>
        <?php get_template_part('_partials/site-furniture/navbar'); ?>
    </nav>
</header>

<div class="banner-home">
    <h1 class="statement"><?php echo $header_statement; ?></h1>
</div>