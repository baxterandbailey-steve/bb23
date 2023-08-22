<?php

/**
 * Who we are: image offset block
 *
 * @package BBWP
 */
?>

<div class="image-offset contain">
    <div class="grid-offset">

        <?php if (have_rows('primary_image')) :
            while (have_rows('primary_image')) : the_row();
                $primary_image = get_sub_field('image');
                $primary_video = get_sub_field('video');
                $primary_video_placeholder = get_sub_field('placeholder_image'); ?>

                <?php if (get_sub_field('choice') == 'image') : ?>

                    <figure class="primary-image">
                        <?php echo wp_get_attachment_image($primary_image, 'full'); ?>
                    </figure>

                <?php else : ?>

                    <video preload playsinline autoplay muted loop poster="<?php echo $primary_video_placeholder; ?>" class="primary-image"">
                        <source src=" <?php echo $primary_video; ?>">
                    </video>
                <?php endif; ?>

            <?php endwhile; ?>
        <?php endif; ?>


        <?php if (have_rows('secondary_image')) :
            while (have_rows('secondary_image')) : the_row();
                $secondary_image = get_sub_field('image');
                $secondary_video = get_sub_field('video');
                $seondary_video_placeholder = get_sub_field('placeholder_image'); ?>

                <?php if (get_sub_field('choice') == 'image') : ?>

                    <figure class="secondary-image">
                        <?php echo wp_get_attachment_image($secondary_image, 'full'); ?>
                    </figure>

                <?php else : ?>

                    <video preload playsinline autoplay muted loop poster="<?php echo $secondary_video_placeholder; ?>" class="secondary-image"">
                        <source src=" <?php echo $primary_video; ?>">
                    </video>

                <?php endif; ?>

            <?php endwhile; ?>
        <?php endif; ?>


    </div><!-- close .container grid-offset-->
</div><!-- close .image-offset-->