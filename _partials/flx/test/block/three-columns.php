<?php

/**
 * Test: three-columns block
 *
 * @package BBWP
 */

?>

<div class="contain">
    <h1>three columns..</h1>

    <?php if (have_rows('image_left')) : ?>
        <?php while (have_rows('image_left')) : the_row();
            $image_left_image = get_sub_field('image');
        ?>
            <figure>
                <?php echo wp_get_attachment_image($image_left_image, 'full'); ?>
            </figure>
        <?php endwhile; ?>
    <?php endif; ?>



    <?php if (have_rows('image_centre')) : ?>
        <?php while (have_rows('image_centre')) : the_row();
            $image_centre_image = get_sub_field('image');
        ?>
            <figure>
                <?php echo wp_get_attachment_image($image_centre_image, 'full'); ?>
            </figure>
        <?php endwhile; ?>
    <?php endif; ?>



    <?php if (have_rows('image_right')) : ?>
        <?php while (have_rows('image_right')) : the_row();
            $image_right_image = get_sub_field('image');
        ?>
            <figure>
                <?php echo wp_get_attachment_image($image_right_image, 'full'); ?>
            </figure>
        <?php endwhile; ?>
    <?php endif; ?>

</div>