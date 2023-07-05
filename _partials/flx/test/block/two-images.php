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
            <?php while (have_rows('two_thirds_left')) : the_row(); ?>

                <!-- ================ column one ================= -->
                <?php
                // check for and loop through column one 
                if (have_rows('column_one')) : ?>
                    <?php while (have_rows('column_one')) : the_row(); ?>

                        <?php
                        // get data, set variables 
                        $col_one_image = get_sub_field('image');
                        $col_one_video = get_sub_field('video');
                        ?>

                        <?php
                        // test choice value, if image display image
                        if (get_sub_field('choice') == 'image') : ?>

                            <figure>
                                <?php echo wp_get_attachment_image($col_one_image, 'full'); ?>
                            </figure>

                        <?php // if not image, display video 
                        else : ?>

                            <video preload playsinline autoplay muted loop>
                                <source src="<?php echo $col_one_video; ?>">
                            </video>

                        <?php endif; ?>

                    <?php endwhile; ?>
                <?php endif; ?>

                <!-- ================ column two ================= -->
                <?php
                // check for and loop through column two
                if (have_rows('column_two')) : ?>
                    <?php while (have_rows('column_two')) : the_row(); ?>

                        <?php
                        // get data, set variables 
                        $col_two_image = get_sub_field('image');
                        $col_two_video = get_sub_field('video');
                        ?>

                        <?php
                        // test choice value, if image display image
                        if (get_sub_field('choice') == 'image') : ?>

                            <figure>
                                <?php echo wp_get_attachment_image($col_two_image, 'full'); ?>
                            </figure>

                        <?php // if not image, display video 
                        else : ?>

                            <video preload playsinline autoplay muted loop>
                                <source src="<?php echo $col_two_video; ?>">
                            </video>

                        <?php endif; ?>

                    <?php endwhile; ?>
                <?php endif; ?>

            <?php endwhile; ?>
        <?php endif; ?>



        <!-- ++++++++++++++++++++++++ right hand column +++++++++++++++++++++++++++++++++++++++++++++++++ -->

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