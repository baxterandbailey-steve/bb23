<?php

/**
 * Who we are: image-grid block
 *
 * @package BBWP
 */

$image_grid_bg = get_sub_field('background_colour');
$image_grid_cols = get_sub_field('columns');
?>

<section class="image-grid partners <?php echo $image_grid_bg; ?>">
    <div class="inner contain">

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

        <div class="image-bank">
            <?php if (have_rows('lh_col')) :
                while (have_rows('lh_col')) : the_row();

                    $lh_col_title = get_sub_field('title'); ?>
                    <div class="lh-col">

                        <h3 class="subtitle"><?php echo $lh_col_title; ?></h3>
                        <div class="lh-images">
                            <?php if (have_rows('images')) :
                                while (have_rows('images')) : the_row();

                                    $lh_col_image = get_sub_field('image'); ?>

                                    <figure class="image">
                                        <?php echo wp_get_attachment_image($lh_col_image, 'full'); ?>
                                    </figure>

                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>

                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php if (have_rows('rh_col')) :
                while (have_rows('rh_col')) : the_row();
                    $rh_col_title = get_sub_field('title'); ?>

                    <div class="rh-col">

                        <h3 class="subtitle"><?php echo $rh_col_title; ?></h3>
                        <div class="rh-images">
                            <?php if (have_rows('images')) :
                                while (have_rows('images')) : the_row();
                                    $rh_col_image = get_sub_field('image'); ?>

                                    <figure class="image">
                                        <?php echo wp_get_attachment_image($rh_col_image, 'full'); ?>
                                    </figure>

                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>

                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

</section>