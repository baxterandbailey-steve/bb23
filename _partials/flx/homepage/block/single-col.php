<?php

/**
 * Hompepage: single-column block
 *
 * @package BBWP
 */

$single_col_image = get_sub_field('image');
$single_col_width = get_sub_field('width');
$single_col_client = get_sub_field('client');
$single_col_category = get_sub_field('category');
$single_col_description = get_sub_field('description');
$single_col_link = get_sub_field('link');
?>

<div class="row single-col">
    <figure style="grid-column:<?php echo $single_col_width ?>" data-aos="fade-up">
        <a href="<?php echo $single_col_link; ?>">
            <img src="<?php echo wp_get_attachment_image($single_col_image, 'full'); ?>">
        </a>
        <div class="details" data-aos="fade-up">
            <h3 class="client"><?php echo $single_col_client; ?></h3>
            <span class="category"><?php echo $single_col_category; ?></span>
            <p class="description"><?php echo $single_col_description; ?></p>
        </div>
    </figure>
</div>