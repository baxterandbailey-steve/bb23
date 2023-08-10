<?php

/**
 * Our Work: Two cols block
 * Notes: PHP for 'two-thirds' left and right hand blocks are in the partials below
 *
 * @package BBWP
 */

?>

<div class="two-columns">
    <?php if (get_sub_field('choice') == 'left') : ?>
        <?php get_template_part('_partials/flx/our-work/block/two-columns/lh-col'); ?>

    <?php else : ?>

        <?php get_template_part('_partials/flx/our-work/block/two-columns/rh-col'); ?>
    <?php endif; ?>
</div>