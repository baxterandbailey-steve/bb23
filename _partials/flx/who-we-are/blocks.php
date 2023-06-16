<?php if (have_rows('flexible_content')) : ?>
        <?php while (have_rows('flexible_content')) : the_row(); ?>

            <?php if (get_row_layout() == 'clients') :
                get_template_part('_partials/flx/who-we-are/block/clients');
            elseif (get_row_layout() == 'text_image') :
                get_template_part('_partials/flx/who-we-are/block/image_cta');
            elseif (get_row_layout() == 'partners') :
                get_template_part('_partials/flx/who-we-are/block/partners');
            elseif (get_row_layout() == 'image_cta') :
                get_template_part('_partials/flx/who-we-are/block/text_image');
            endif; ?>
    <?php endwhile;
    endif; ?>