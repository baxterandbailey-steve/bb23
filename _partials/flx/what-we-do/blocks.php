<?php if (have_rows('flexible_content')) : ?>
    <?php while (have_rows('flexible_content')) : the_row(); ?>

        <?php if (get_row_layout() == 'services') :
            get_template_part('_partials/flx/what-we-do/block/services');
        elseif (get_row_layout() == 'process') :
            get_template_part('_partials/flx/what-we-do/block/process');
        elseif (get_row_layout() == 'testimonial') :
            get_template_part('_partials/flx/what-we-do/block/testimonial');
        elseif (get_row_layout() == 'call_to_action') :
            get_template_part('_partials/flx/what-we-do/block/call_to_action');
        endif; ?>
        
        <?php endwhile; ?>
    <?php endif; ?>