<?php if (get_sub_field('layout') == 'half') : { ?>
        <div class="single grid">
            <img src="<?php the_sub_field('single'); ?>" class="<?php the_sub_field('layout'); ?>">
        </div>
    <?php } ?>

<? elseif (get_sub_field('layout') == 'double') : ?>
    <?php if (have_rows('double')) : ?>
        <?php while (have_rows('double')) : the_row(); ?>
            <div class="double grid">
                <img src="<?php the_sub_field('lh_image'); ?>" class="lh-image">
                <img src="<?php the_sub_field('rh_image'); ?>" class="rh-image">
            </div>
    <?php endwhile;
    endif; ?>

    <? elseif (get_sub_field('layout') == 'full-width') : { ?>
        <img src="<?php the_sub_field('full_width'); ?>" class="<?php the_sub_field('layout'); ?>">
    <?php } ?>

<? else : ?>
    <img src="<?php the_sub_field('full_bleed'); ?>" class="<?php the_sub_field('layout'); ?>">
    <?php ?>
<?php endif ?>