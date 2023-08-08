<?php

/**
 * Hompepage: single-column block
 *
 * @package BBWP
 */

// $single_col_choice = get_sub_field('choice');
$single_col_image = get_sub_field('image');
$single_col_video = get_sub_field('video');
$single_col_width = get_sub_field('width');
$single_col_client = get_sub_field('client');
$single_col_category = get_sub_field('category');
$single_col_description = get_sub_field('description');
$single_col_link = get_sub_field('link');
?>

<div class="row single-col">

    <?php if (get_sub_field('choice') == 'image') : ?>
        <figure style="grid-column:<?php echo $single_col_width ?>">
            <img src="<?php echo wp_get_attachment_image($single_col_image, 'full'); ?>">
        </figure>
    <?php else : ?>
        <video preload playsinline autoplay muted loop style="grid-column: <?php echo $single_col_width; ?>;">
            <source src=" <?php echo $single_col_video; ?>">
        </video>
    <?php endif; ?>

    <div class="details">
        <h3 class="client"><a href="<?php echo $single_col_link; ?>" class="link"><?php echo $single_col_client; ?></a></h3>
        <span class="category"><?php echo $single_col_category; ?></span>
        <p class="description"><?php echo $single_col_description; ?></p>
    </div>

</div>