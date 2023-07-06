<?php

/**
 * Test: three-columns block
 *
 * @package BBWP
 */

?>

<div class="three-columns grid">

    <?php if (have_rows('image_left')) : ?>
        <?php while (have_rows('image_left')) : the_row();
            $image_left_image = get_sub_field('image');
            $image_left_title = get_sub_field('title');
            $image_left_meta = get_sub_field('meta');
            $image_left_link = get_sub_field('link');
        ?>
            <article>
                <figure class="image" data-aos="fade-in">
                    <?php echo wp_get_attachment_image($image_left_image, 'full'); ?>
                </figure>
                <h3><a href="<?php echo $image_left_link; ?>" class="link"><?php echo $image_left_title; ?></a></h3>
                <span class="meta"><?php echo $image_left_meta; ?></span>
            </article>

        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('image_centre')) : ?>
        <?php while (have_rows('image_centre')) : the_row();
            $image_centre_image = get_sub_field('image');
            $image_centre_title = get_sub_field('title');
            $image_centre_meta = get_sub_field('meta');
            $image_centre_link = get_sub_field('link');
        ?>
            <article>
                <figure class="image" data-aos="fade-in">
                    <?php echo wp_get_attachment_image($image_centre_image, 'full'); ?>
                </figure>
                <h3><a href="<?php echo $image_centre_link; ?>" class="link"><?php echo $image_centre_title; ?></a></h3>
                <span class="meta"><?php echo $image_centre_meta; ?></span>
            </article>

        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('image_right')) : ?>
        <?php while (have_rows('image_right')) : the_row();
            $image_right_image = get_sub_field('image');
            $image_right_title = get_sub_field('title');
            $image_right_meta = get_sub_field('meta');
            $image_right_link = get_sub_field('link');
        ?>
            <article data-aos="fade-in">
                <figure class="image" data-aos="fade-in">
                    <?php echo wp_get_attachment_image($image_right_image, 'full'); ?>
                </figure>
                <h3><a href="<?php echo $image_right_link; ?>" class="link"><?php echo $image_right_title; ?></a></h3>
                <span class="meta"><?php echo $image_right_meta; ?></span>
            </article>

        <?php endwhile; ?>
    <?php endif; ?>

</div>