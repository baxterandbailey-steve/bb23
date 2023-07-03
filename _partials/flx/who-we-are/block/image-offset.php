<?php

/**
 * Who we are: image offset block
 *
 * @package BBWP
 */

$image_offset_primary = get_sub_field('primary_image');
$image_offset_secondary = get_sub_field('secondary_image');
?>

<div class="image-offset">
    <div class="inner contain">

        <figure class="primary-image">
            <?php echo wp_get_attachment_image($image_offset_primary, 'full'); ?>
        </figure>

        <figure class="secondary-image">
            <?php echo wp_get_attachment_image($image_offset_secondary, 'full'); ?>
        </figure>

    </div>
</div>