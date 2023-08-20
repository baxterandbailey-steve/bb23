<?php

/**
 * What we do: process block
 *
 * @package BBWP
 */

$process_section_title = get_sub_field('section_title');
?>

<section class="processes">
    <div class="inner contain">
        <h2 class="section-title"><?php echo $process_section_title; ?></h2>

        <?php if (have_rows('process')) :
            while (have_rows('process')) : the_row();
                $process_type = get_sub_field('type');
                $process_title = get_sub_field('title');
                $process_description = get_sub_field('description');
                $process_image = get_sub_field('image'); ?>

                <div class="process grid">
                    <!-- <?php if (get_sub_field('image')) : ?>
                        <figure class="image">
                            <?php echo wp_get_attachment_image($process_image, 'full'); ?>
                        </figure>
                    <?php endif; ?> -->

                    <div class="text">
                        <span class="meta"><?php echo $process_type; ?></span>
                        <h3 class="title"><?php echo $process_title; ?></h3>
                        <p class="description"><?php echo $process_description; ?></p>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

</section>