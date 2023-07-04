<?php

/**
 * Test: two images block
 *
 * @package BBWP
 */

?>

<div class="contain">
    <h1>two images..</h1>

    <?php if (get_sub_field('choice') == 'left') : ?>

        <?php if (have_rows('two_thirds_left')) : ?>
            <?php while (have_rows('two_thirds_left')) : the_row();
                $image_left = get_sub_field('image_one');
                $image_right = get_sub_field('image_two'); ?>

                <figure>
                    <?php echo wp_get_attachment_image($image_left, 'full'); ?>
                </figure>

                <figure>
                    <?php echo wp_get_attachment_image($image_right, 'full'); ?>
                </figure>

            <?php endwhile; ?>
        <?php endif; ?>

    <?php else : ?>

        <?php if (have_rows('two_thirds_right')) : ?>
            <?php while (have_rows('two_thirds_right')) : the_row();

                $image_left = get_sub_field('image_one');
                $image_right = get_sub_field('image_two');
            ?>

                <figure>
                    <?php echo wp_get_attachment_image($image_left, 'full'); ?>
                </figure>

                <figure>
                    <?php echo wp_get_attachment_image($image_right, 'full'); ?>
                </figure>

            <?php endwhile; ?>
        <?php endif; ?>
    <?php endif; ?>
</div>