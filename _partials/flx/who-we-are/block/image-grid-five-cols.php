<?php

/**
 * Who we are: image-grid block
 *
 * @package BBWP
 */
?>

<div class="image-grid five-cols">
    <div class="container">

        <!-- intro text-->
        <div class="introduction">
            <?php if (have_rows('introduction')) :
                while (have_rows('introduction')) : the_row();
                    $image_grid_title = get_sub_field('title');
                    $image_grid_text = get_sub_field('text'); ?>

                    <h2 class="section-title"><?php echo $image_grid_title; ?></h2>
                    <?php echo $image_grid_text; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <!-- image bank -->
        <div class="images">
            <!-- lh-col images (three cols) -->
            <?php if (have_rows('lh_col')) :
                while (have_rows('lh_col')) : the_row();
                    $lh_col_title = get_sub_field('title'); ?>

                    <div class="lh-col">
                        <h3 class="sub-title"><?php echo $lh_col_title; ?></h3>
                        <div class="lh-col__images">
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

            <!-- rh-col images (two cols) -->
            <?php if (have_rows('rh_col')) :
                while (have_rows('rh_col')) : the_row();
                    $rh_col_title = get_sub_field('title'); ?>

                    <div class="rh-col">
                        <h3 class="sub-title"><?php echo $rh_col_title; ?></h3>

                        <div class="rh-col__images">
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

        </div><!-- close .images-->
    </div><!-- close .container -->
</div><!-- close .image-grid -->