<?php

/**
 * Who we are: text-image block
 *
 * @package BBWP
 */

$text_image_fw_title = get_sub_field('title');
$text_image_fw_text = get_sub_field('text');
$text_image_fw_image = get_sub_field('image');
$text_image_fw_link = get_sub_field('link_url');
$text_image_fw_link_label = get_sub_field('link_label');
$text_image_fw_layout = get_sub_field('layout');
?>

<div class="text-image-full-width">
    <div class="container <?php echo $text_image_fw_layout; ?>">
        <div class="rich-text">
            <h2 class="section-title"><?php echo $text_image_fw_title; ?></h2>
            <?php echo $text_image_fw_text; ?>
            <a href="<?php echo $text_image_fw_link; ?>" class="link"><?php echo $text_image_fw_link_label; ?></a>
        </div>
        <figure class="image">
            <?php echo wp_get_attachment_image($text_image_fw_image, 'full'); ?>
        </figure>
    </div>
</div>