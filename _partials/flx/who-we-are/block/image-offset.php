<?php

/**
 * Who we are: image offset block
 *
 * @package BBWP
 */
?>

<div class="image-offset">
    <div class="container grid-offset">

        <?php if (have_rows('primary_image')) :
            while (have_rows('primary_image')) : the_row();
                $primary_image = get_sub_field('image');
                $primary_video = get_sub_field('video'); ?>

                <?php if (get_sub_field('choice') == 'image') : ?>

                    <figure class="primary-image">
                        <?php echo wp_get_attachment_image($primary_image, 'full'); ?>
                    </figure>

                <?php else : ?>

                    <video preload playsinline autoplay muted loop class="primary-image"">
                        <source src=" <?php echo $primary_video; ?>">
                    </video>

                <?php endif; ?>

        <?php endwhile;
        endif; ?>


        <?php if (have_rows('secondary_image')) :
            while (have_rows('secondary_image')) : the_row();
                $secondary_image = get_sub_field('image');
                $secondary_video = get_sub_field('video'); ?>

                <?php if (get_sub_field('choice') == 'image') : ?>

                    <figure class="secondary-image">
                        <?php echo wp_get_attachment_image($secondary_image, 'full'); ?>
                    </figure>

                <?php else : ?>

                    <video preload playsinline autoplay muted loop class="secondary-image"">
                        <source src=" <?php echo $primary_video; ?>">
                    </video>

                <?php endif; ?>

        <?php endwhile;
        endif; ?>


    </div>
</div>