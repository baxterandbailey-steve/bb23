<?php

/**
 * Hompepage: three-column block
 *
 * @package BBWP
 */

$col_1_image_alt = get_sub_field('col_1_image');
$col_1_video_alt = get_sub_field('col_1_video');
$col_1_stack = get_sub_field('col_1_stack');

$col_2_image_alt = get_sub_field('col_2_image');
$col_2_video_alt = get_sub_field('col_2_video');
$col_2_stack = get_sub_field('col_2_stack');

$col_3_image_alt = get_sub_field('col_3_image');
$col_2_video_alt = get_sub_field('col_3_video');
$col_3_client_alt = get_sub_field('col_3_client');
$col_3_category_alt = get_sub_field('col_3_category');
$col_3_description_alt = get_sub_field('col_3_description');
$col_3_link = get_sub_field('link');
$col_3_stack = get_sub_field('col_3_stack');

?>

<div class="row three-cols-alt">

    <?php if (get_sub_field('col_1_choice') == 'image') : ?>
        <figure class="col-1-alt" style="z-index:<?php echo $col_1_stack; ?>;">
            <?php echo wp_get_attachment_image($col_1_image_alt, 'full'); ?>
        </figure>
    <?php else : ?>
        <video preload playsinline autoplay muted loop class="col-1">
            <source src="<?php echo $col_1_video_alt; ?>">
        </video>
    <?php endif; ?>


    <?php if (get_sub_field('col_2_choice') == 'image') : ?>
        <figure class="col-2-alt" style="z-index:<?php echo $col_2_stack; ?>;">
            <?php echo wp_get_attachment_image($col_2_image_alt, 'full'); ?>
        </figure>
    <?php else : ?>
        <video preload playsinline autoplay muted loop class="col-2">
            <source src=" <?php echo $col_2_video_alt; ?>">
        </video>
    <?php endif; ?>


    <?php if (get_sub_field('col_3_choice') == 'image') : ?>
        <figure class="col-3-alt" style="z-index:<?php echo $col_3_stack; ?>;">
            <h3 class="client"><?php echo $col_3_client_alt; ?></h3>
            <div class="details">
                <span class="category"><?php echo $col_3_category_alt; ?></span>
                <p class="description"><?php echo $col_3_description_alt; ?></p>
            </div>
            <?php echo wp_get_attachment_image($col_3_image_alt, 'full'); ?>
        </figure>
    <?php else : ?>
        <video preload playsinline autoplay muted loop class="col-3">
            <source src="<?php echo $col_3_video_alt; ?>">
        </video>
    <?php endif; ?>

    <a href="<?php echo $col_3_link; ?>" class="link"></a>

</div>