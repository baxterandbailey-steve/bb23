<?php

/**
 * What we do: blocks loop
 *
 * @package BBWP
 */


if (have_rows('flexible_content')) : ?>
    <?php while (have_rows('flexible_content')) : the_row(); ?>
        
        <?php if (get_row_layout() == 'services') :
            get_template_part('_partials/flx/what-we-do/block/services');

        elseif (get_row_layout() == 'processes') :
            get_template_part('_partials/flx/what-we-do/block/process');

        elseif (get_row_layout() == 'testimonial') :
            get_template_part('_partials/flx/what-we-do/block/testimonial');

        elseif (get_row_layout() == 'text_image') :
            get_template_part('_partials/flx/what-we-do/block/text-image');

        endif; ?>

    <?php endwhile; ?>
<?php endif; ?>