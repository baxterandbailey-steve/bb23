<?php

/**
 * Our work: full-width block
 *
 * @package BBWP
 */

$full_width_image = get_sub_field('image');
$full_width_video = get_sub_field('video');
$full_width_placeholder = get_sub_field('placeholder_image');
$full_width_title = get_sub_field('title');
$full_width_meta = get_sub_field('meta');
$full_width_link = get_sub_field('link');

?>

<div class="full-width">

    <?php if (get_sub_field('choice') == 'image') : ?>

        <article>
            <?php if (get_sub_field('image')) : ?>
                <figure>
                    <?php echo wp_get_attachment_image($full_width_image, 'full'); ?>
                </figure>
            <?php endif; ?>

            <?php if (get_sub_field('link')) : ?>
                <h3><a href="<?php echo $full_width_link; ?>" class="link"><?php echo $full_width_title; ?></a></h3>
            <?php endif; ?>

            <?php if (get_sub_field('meta')) : ?>
                <span class="meta"><?php echo $full_width_meta; ?></span>
            <?php endif; ?>
        </article>

    <?php else : ?>

        <video preload playsinline autoplay muted loop poster="<?php echo $full_width_placeholder; ?>">
            <source src="<?php echo $full_width_video; ?>">
        </video>
    <?php endif; ?>

</div>