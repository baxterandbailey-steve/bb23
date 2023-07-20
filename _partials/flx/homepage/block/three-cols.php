<?php

/**
 * Hompepage: three-column block
 *
 * @package BBWP
 */

$col_1_image = get_sub_field('col_1_image');
$col_1_video = get_sub_field('col_1_video');
$col_1_client = get_sub_field('col_1_client');
$col_1_category = get_sub_field('col_1_category');
$col_1_description = get_sub_field('col_1_description');
$col_2_image = get_sub_field('col_2_image');
$col_3_image = get_sub_field('col_3_image');
?>

<div class="row three-cols">

    <?php if (get_sub_field('choice') == 'image') : ?>

        <figure class="col-1" data-aos="fade-up">
            <h3 class="client"><?php echo $col_1_client; ?></h3>
            <div class="details">
                <span class="category"><?php echo $col_1_category; ?></span>
                <p class="description"><?php echo $col_1_description; ?></p>
            </div>
            <img src="<?php echo wp_get_attachment_image($col_1_image, 'full'); ?>" class="details thumb" data-aos="fade-up">
        </figure>

    <?php else : ?>

        <video preload playsinline autoplay muted loop class="col-1">
            <source src=" <?php echo $col_1_video; ?>">
        </video>

    <?php endif; ?>

    <figure class="col-3" data-aos="fade-up">
        <img src="<?php echo wp_get_attachment_image($col_3_image, 'full'); ?>">
    </figure>

    <figure class="col-2" data-aos="fade-up">
        <?php echo wp_get_attachment_image($col_2_image, 'full'); ?>
    </figure>
</div>