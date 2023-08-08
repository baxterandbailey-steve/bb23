<?php

/**
 * Test: full-width block
 *
 * @package BBWP
 */

$full_width_image = get_sub_field('image');
$full_width_video = get_sub_field('video');
$full_width_title = get_sub_field('title');
$full_width_meta = get_sub_field('meta');
$full_width_link = get_sub_field('link');
?>

<div class="full-width">

    <?php if (get_sub_field('choice') == 'image') : ?>

        <article>
            <figure>
                <?php echo wp_get_attachment_image($full_width_image, 'full'); ?>
            </figure>
            <h3><a href="<?php echo $full_width_link; ?>" class="link"><?php echo $full_width_title; ?></a></h3>
            <span class="meta"><?php echo $full_width_meta; ?></span>
        </article>

    <?php else : ?>

        <video preload playsinline autoplay muted loop>
            <source src="<?php echo $full_width_video; ?>">
        </video>

    <?php endif; ?>

</div>