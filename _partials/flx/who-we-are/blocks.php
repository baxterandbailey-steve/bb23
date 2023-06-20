<?php if (have_rows('flexible_content')) : ?>
        <?php while (have_rows('flexible_content')) : the_row(); ?>

            <?php if (get_row_layout() == 'clients') :
                get_template_part('_partials/flx/who-we-are/block/clients');
            elseif (get_row_layout() == 'text_image') :
                get_template_part('_partials/flx/who-we-are/block/text-image');
            elseif (get_row_layout() == 'image_offset') :
                get_template_part('_partials/flx/who-we-are/block/image-offset');
            elseif (get_row_layout() == 'partners') :
                get_template_part('_partials/flx/who-we-are/block/partners');
            elseif (get_row_layout() == 'cta') :
                get_template_part('_partials/flx/who-we-are/block/cta');
            endif; ?>
            
    <?php endwhile;
    endif; ?>