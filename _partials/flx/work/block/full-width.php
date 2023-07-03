<?php

/**
 * Full width media block
 *
 * @package BBWP
 */

$video = get_sub_field('video');
$image = get_sub_field('image');
?>

<div class="full-width-media">
    <?php if (get_sub_field('choice') == 'video') : ?>

        <div class="full-width-video">
            <video preload playsinline autoplay muted loop>
                <source src="<?php echo $video; ?>">
            </video>
        </div>

    <?php else : ?>
        <figure class="image">
            <?php echo wp_get_attachment_image($image, 'full'); ?>
        </figure>
    <?php endif; ?>

</div>