<?php

/**
 * Work [individual case-study] blocks loop
 *
 * @package BBWP
 */

?>

<section class="flexible-content__case-study">

    <?php if (have_rows('flexible_content')) : ?>
        <?php while (have_rows('flexible_content')) : the_row(); ?>

            <?php if (get_row_layout() == 'images') : ?>
                <?php get_template_part('_partials/flx/case-studies/block/images'); ?>

            <?php elseif (get_row_layout() == 'text') : ?>
                <?php get_template_part('_partials/flx/case-studies/block/text'); ?>

            <?php elseif (get_row_layout() == 'special_thanks') : ?>
                <?php get_template_part('_partials/flx/case-studies/block/special-thanks'); ?>

            <?php elseif (get_row_layout() == 'image_text') : ?>
                <?php get_template_part('_partials/flx/case-studies/block/image-text'); ?>

            <?php elseif (get_row_layout() == 'testimonial') : ?>
                <?php get_template_part('_partials/flx/case-studies/block/testimonial'); ?>

            <?php elseif (get_row_layout() == 'full_width_two_cols') : ?>
                <?php get_template_part('_partials/flx/case-studies/block/full-width-two-cols'); ?>

            <?php elseif (get_row_layout() == 'full_width') : ?>
                <?php get_template_part('_partials/flx/case-studies/block/full-width'); ?>

            <?php elseif (get_row_layout() == 'full_screen') : ?>
                <?php get_template_part('_partials/flx/case-studies/block/full-screen'); ?>

            <?php elseif (get_row_layout() == 'more_like_this') : ?>
                <?php get_template_part('_partials/flx/case-studies/block/more-like-this'); ?>

            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>

</section>