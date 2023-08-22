<?php

/**
 * Work [case-study]:  full-width two-column media block
 *
 * @package BBWP
 */

?>

<div class="two-cols-media">
    <?php if (have_rows('lh_col')) :
        while (have_rows('lh_col')) : the_row();
            $lh_video = get_sub_field('video');
            $lh_placeholder = get_sub_field('placeholder_image');
            $lh_image = get_sub_field('image'); ?>

            <?php if (get_sub_field('choice') == 'video') : ?>
                <video preload playsinline autoplay muted loop poster="<?php echo $lh_placeholder; ?>" class="lh-video">
                    <source src="<?php echo $lh_video ?>" type="video/mp4">
                </video>

            <?php else : ?>

                <figure class="lh-image">
                    <?php echo wp_get_attachment_image($lh_image, 'full'); ?>
                </figure>
            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('rh_col')) :
        while (have_rows('rh_col')) : the_row();
            $rh_video = get_sub_field('video');
            $rh_placeholder = get_sub_field('placeholder_image');
            $rh_image = get_sub_field('image'); ?>

            <?php if (get_sub_field('choice') == 'video') : ?>
                <video preload playsinline autoplay muted loop poster="<?php echo $rh_placeholder; ?>" class="rh-video">
                    <source src="<?php echo $rh_video ?>" type="video/mp4">
                </video>

            <?php else : ?>

                <figure class="rh-image">
                    <?php echo wp_get_attachment_image($rh_image, 'full'); ?>
                </figure>
            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>
</div>