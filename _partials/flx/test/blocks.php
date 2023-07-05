<?php

/**
 * Test blocks loop
 *
 * @package BBWP
 */

?>

<?php if (have_rows('flexible_content')) : ?>
    <?php while (have_rows('flexible_content')) : the_row(); ?>

        <?php if (get_row_layout() == 'full_width') :
            get_template_part('_partials/flx/test/block/full-width');
        elseif (get_row_layout() == 'two_images') :
            get_template_part('_partials/flx/test/block/two-columns');
        elseif (get_row_layout() == 'three_columns') :
            get_template_part('_partials/flx/test/block/three-columns');
        endif; ?>
        
    <?php endwhile; ?>
<?php endif; ?>