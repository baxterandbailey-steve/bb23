<section class="clients">
    <div class="contain">
        <div class="grid">
            <?php if (have_rows('introduction')) :
                while (have_rows('introduction')) : the_row(); ?>
                    <h2><?php the_sub_field('title'); ?></h2>
                    <p><?php the_sub_field('text'); ?></p>
            <?php endwhile;
            endif; ?>
        </div>

        <div class="logos grid">
            <?php if (have_rows('logos')) :
                while (have_rows('logos')) : the_row(); ?>
                    <img src="<?php the_sub_field('logo'); ?>">
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</section>