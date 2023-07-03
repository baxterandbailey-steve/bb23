<?php if (have_rows('work_rows')) : ?>
    <?php while (have_rows('work_rows')) : the_row(); ?>

        <?php if (get_row_layout() == 'single_col') :
            get_template_part('_partials/flx/homepage/block/single-col');

        elseif (get_row_layout() == 'two_cols') :
            get_template_part('_partials/flx/homepage/block/two-cols');

        elseif (get_row_layout() == 'three_cols') :
            get_template_part('_partials/flx/homepage/block/three-cols');

        endif; ?>

    <?php endwhile; ?>
<?php endif; ?>