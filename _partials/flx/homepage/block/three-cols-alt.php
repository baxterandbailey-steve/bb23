<?php

/**
 * Hompepage: three-column block
 *
 * @package BBWP
 */

$col_1_image_alt = get_sub_field('col_1_image');
$col_1_video_alt = get_sub_field('col_1_video');
$col_1_client_alt = get_sub_field('col_1_client');
$col_1_category_alt = get_sub_field('col_1_category');
$col_1_description_alt = get_sub_field('col_1_description');
$col_2_image_alt = get_sub_field('col_2_image');
$col_3_image_alt = get_sub_field('col_3_image');
?>

<div class="row three-cols-alt">

    <?php if (get_sub_field('choice') == 'image') : ?>

        <figure class="col-2-alt" data-aos="fade-up">
            <?php echo wp_get_attachment_image($col_2_image_alt, 'full'); ?>
        </figure>

        <figure class="col-1-alt" data-aos="fade-up">
            <?php echo wp_get_attachment_image($col_1_image_alt, 'full'); ?>
        </figure>

    <?php else : ?>

        <video preload playsinline autoplay muted loop class="col-1">
            <source src=" <?php echo $col_1_video_alt; ?>">
        </video>

    <?php endif; ?>

    <figure class="col-3-alt" data-aos="fade-up">
        <div class="details">
            <h3 class="client"><?php echo $col_1_client_alt; ?></h3>
            <span class="category"><?php echo $col_1_category_alt; ?></span>
            <p class="description"><?php echo $col_1_description_alt; ?></p>
        </div>
        <?php echo wp_get_attachment_image($col_3_image_alt, 'full'); ?>
    </figure>
</div>