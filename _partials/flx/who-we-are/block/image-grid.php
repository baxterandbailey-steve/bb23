<?php
$image_grid_bg = get_sub_field('background_colour');
$image_grid_cols = get_sub_field('columns');
?>

<section class="image-grid <?php echo $image_grid_bg; ?>">
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

        <div class="images <?php echo $image_grid_cols; ?>">
            <?php if (have_rows('images')) :
                while (have_rows('images')) : the_row();
                    $image_grid_image = get_sub_field('image'); ?>
                    <img src="<?php echo $image_grid_image; ?>" class="image">
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>