<div class="flexible-content">

    <?php if (have_rows('flexible_content')) : ?>
        <?php while (have_rows('flexible_content')) : the_row(); ?>

            <?php if (get_row_layout() == 'images') : ?>
                <?php get_template_part('_partials/flx/work/block/images'); ?>

            <?php elseif (get_row_layout() == 'text') : ?>
                <?php get_template_part('_partials/flx/work/block/text'); ?>

            <?php elseif (get_row_layout() == 'image_text') : ?>
                <?php get_template_part('_partials/flx/work/block/image-text'); ?>

            <?php elseif (get_row_layout() == 'testimonial') : ?>
                <?php get_template_part('_partials/flx/work/block/testimonial'); ?>
            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>

</div><!--close flexible-content -->