<?php

/**
 * What we do: text-image block
 *
 * @package BBWP
 */

$text_image_title = get_sub_field('title');
$text_image_text = get_sub_field('text');
$text_image_image = get_sub_field('image');
$text_image_layout = get_sub_field('layout');
?>


<div class="text-image contain <?php echo $text_image_layout; ?>">
    <div class="text">
        <h2 class="title"><?php echo $text_image_title ?></h2>
        <?php echo $text_image_text ?>

        <?php if (have_rows('link')) : ?>
            <?php while (have_rows('link')) : the_row();
                $text_image_link_url = get_sub_field('link_url');
                $text_image_link_label = get_sub_field('link_label'); ?>

                <a href="<?php echo $text_image_link_url; ?>" class="link"><?php echo $text_image_link_label; ?></a>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <img src="<?php echo $text_image_image ?>" class="image">
</div>