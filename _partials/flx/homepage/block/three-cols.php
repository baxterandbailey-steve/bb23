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
$col_1_stack = get_sub_field('col_1_stack');
$col_1_link = get_sub_field('link');

$col_2_image = get_sub_field('col_2_image');
$col_2_video = get_sub_field('col_2_video');
$col_2_stack = get_sub_field('col_2_stack');

$col_3_image = get_sub_field('col_3_image');
$col_3_video = get_sub_field('col_3_video');
$col_3_stack = get_sub_field('col_3_stack');

?>

<div class="row three-cols">

    <?php if (get_sub_field('col_1_choice') == 'image') : ?>
        <figure class="col-1" style="z-index:<?php echo $col_1_stack; ?>;">
            <h3 class="client"><a href="<?php echo $col_1_link; ?>" class="link"><?php echo $col_1_client; ?></a></h3>
            <div class="details">
                <span class="category"><?php echo $col_1_category; ?></span>
                <p class="description"><?php echo $col_1_description; ?></p>
            </div>
            <?php echo wp_get_attachment_image($col_1_image, 'full'); ?>
        </figure>
    <?php else : ?>
        <video preload playsinline autoplay muted loop class="col-1">
            <source src="<?php echo $col_1_video; ?>">
        </video>
    <?php endif; ?>

    <?php if (get_sub_field('col_2_choice') == 'image') : ?>
        <figure class="col-2" style="z-index:<?php echo $col_2_stack; ?>;">
            <?php echo wp_get_attachment_image($col_2_image, 'full'); ?>
        </figure>

    <?php else : ?>
        <video preload playsinline autoplay muted loop class="col-2">
            <source src="<?php echo $col_2_video; ?>">
        </video>
    <?php endif; ?>

    <?php if (get_sub_field('col_3_choice') == 'image') : ?>
        <figure class="col-3" style="z-index:<?php echo $col_3_stack; ?>;">
            <?php echo wp_get_attachment_image($col_3_image, 'full'); ?>
        </figure>
    <?php else : ?>
        <video preload playsinline autoplay muted loop class="col-3">
            <source src="<?php echo $col_3_video; ?>">
        </video>
    <?php endif; ?>

</div>