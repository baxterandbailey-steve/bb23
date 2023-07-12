<?php

/**
 * Who we are blocks loop
 *
 * @package BBWP
 */

?>

<?php if (have_rows('flexible_content')) : ?>
    <?php while (have_rows('flexible_content')) : the_row(); ?>

        <?php if (get_row_layout() == 'text_image') :
            get_template_part('_partials/flx/who-we-are/block/text-image');
        elseif (get_row_layout() == 'image_offset') :
            get_template_part('_partials/flx/who-we-are/block/image-offset');
        elseif (get_row_layout() == 'image_grid_clients') :
            get_template_part('_partials/flx/who-we-are/block/image-grid-clients');
        elseif (get_row_layout() == 'image_grid_partners') :
            get_template_part('_partials/flx/who-we-are/block/image-grid-partners');
        endif; ?>
        
    <?php endwhile; ?>
<?php endif; ?>