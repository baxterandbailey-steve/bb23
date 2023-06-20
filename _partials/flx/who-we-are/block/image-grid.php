<?php
$image_grid_bg = get_sub_field('background_colour');
$image_grid_cols = get_sub_field('columns');
?>

<section class="image-grid <?php echo $image_grid_bg; ?>">
    <div class="inner contain">
        <div class="introduction grid">
            <?php if (have_rows('introduction')) :
                while (have_rows('introduction')) : the_row(); ?>
                    <h2><?php the_sub_field('title'); ?></h2>
                    <p><?php the_sub_field('text'); ?></p>
            <?php endwhile;
            endif; ?>
        </div>

        <div class="images grid <?php echo $image_grid_cols; ?>">
            <?php if (have_rows('images')) :
                while (have_rows('images')) : the_row(); ?>
                    <img src="<?php the_sub_field('image'); ?>" class="image">
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</section>