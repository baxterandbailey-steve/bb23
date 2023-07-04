<?php

/**
 * Work [case-study]:  image-text block
 *
 * @package BBWP
 */


$image_text_image = get_sub_field('image');
$image_text_text = get_sub_field('text');
?>

<div class="image-text grid">
    <figure class="image">
        <?php echo wp_get_attachment_image($image_text_image, 'full'); ?>
    </figure>
    <div class="text">
        <?php echo $image_text_text; ?>
    </div>
</div>