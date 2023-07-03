<?php

/**
 * Work full screen media block
 *
 * @package BBWP
 */

$full_screen_video = get_sub_field('video');
$full_screen_image = get_sub_field('image');

?>
<div class="full-screen-media">
    <?php if (get_sub_field('choice') == 'video') : ?>

        <video preload playsinline autoplay muted loop>
            <source src="<?php echo $full_screen_video; ?>">
        </video>

    <?php else : ?>

        <figure class="image">
            <?php echo wp_get_attachment_image($full_screen_image, 'full'); ?>
        </figure>

    <?php endif; ?>
</div>