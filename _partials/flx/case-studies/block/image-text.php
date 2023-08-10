<?php

/**
 * Work [case-study]:  image-text block
 *
 * @package BBWP
 */

$image_text_image = get_sub_field('image');
$image_text_headline = get_sub_field('headline_text');
$image_text_text = get_sub_field('text');
$image_text_subhead = get_sub_field('subhead');

?>

<div class="image-text grid">

    <?php if (get_sub_field('image')) : ?>
        <figure class="image">
            <?php echo wp_get_attachment_image($image_text_image, 'full'); ?>
        </figure>
    <?php endif; ?>

    <div class="text">
        <?php if (get_sub_field('headline_text')) : ?>
            <p class="heading"><?php echo $image_text_headline; ?></p>
        <?php endif; ?>

        <?php if (get_sub_field('text')) : ?>
            <?php echo $image_text_text; ?>
        <?php endif; ?>

        <?php if (get_sub_field('subhead')) : ?>
            <span class="meta"><?php echo $image_text_subhead; ?></span>
        <?php endif; ?>

        <?php if (have_rows('link')) :
            while (have_rows('link')) : the_row();
                $link_url = get_sub_field('link');
                $link_label = get_sub_field('link_label'); ?>

                <a href="<?php echo $link_url; ?>" class="link"><?php echo $link_label; ?></a>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

</div>