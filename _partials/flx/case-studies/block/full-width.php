<?php

/**
 * Work [case-study]:  full-width media block
 *
 * @package BBWP
 */

$video = get_sub_field('video');
$video_placeholder = get_sub_field('placeholder_image');
$image = get_sub_field('image');
$caption = get_sub_field('caption');

?>

<div class="full-width-media">

    <?php if (get_sub_field('choice') == 'video') : ?>

        <div class="full-width-video">
            <video preload playsinline autoplay muted loop poster="<?php echo $video_placeholder; ?>">
                <source src="<?php echo $video; ?>">
            </video>
            <p class="caption"><?php echo $caption; ?></p>
        </div>

    <?php else : ?>

        <figure class="full-width-image">
            <?php echo wp_get_attachment_image($image, 'full'); ?>
            <p class="caption"><?php echo $caption; ?></p>
        </figure>
    <?php endif; ?>

</div>