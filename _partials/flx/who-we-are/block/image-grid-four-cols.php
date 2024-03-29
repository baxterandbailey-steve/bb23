<?php

/**
 * Who we are: image-grid block
 *
 * @package BBWP
 */

?>

<div class="image-grid four-cols contain">
    <!-- intro text-->
    <div class="introduction">
        <?php if (have_rows('introduction')) :
            while (have_rows('introduction')) : the_row();
                $image_grid_title = get_sub_field('title');
                $image_grid_text = get_sub_field('text'); ?>
                <h2 class="title"><?php echo $image_grid_title; ?></h2>
                <?php echo $image_grid_text; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <!-- image bank -->
    <div class="images">
        <?php if (have_rows('images')) :
            while (have_rows('images')) : the_row();
                $image_grid_image = get_sub_field('image'); ?>
                <figure class="image">
                    <?php echo wp_get_attachment_image($image_grid_image, 'full'); ?>
                </figure>
            <?php endwhile; ?>
        <?php endif; ?>
    </div><!-- close .images -->

</div><!-- close .image-grid -->