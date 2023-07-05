<?php

/**
 * Test: full-width block
 *
 * @package BBWP
 */

$full_width_image = get_sub_field('image');
$full_width_video = get_sub_field('video');
?>

<div class="contain">
    <h1>full width..</h1>

    <?php if (get_sub_field('choice') == 'image') : ?>

        <figure class="image">
            <?php echo wp_get_attachment_image($full_width_image, 'full'); ?>
        </figure>

    <?php else : ?>

        <video preload playsinline autoplay muted loop>
            <source src="<?php echo $full_width_video; ?>">
        </video>

    <?php endif; ?>

</div>