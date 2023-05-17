<div class="block__4-4-4">
    <?php if (have_rows('column_one')) : ?>
        <?php while (have_rows('column_one')) : the_row(); ?>
            <article>
                <img src="<?php the_sub_field('image'); ?>">
                <h3 class="excerpt"><?php the_sub_field('project_title'); ?></h3>
            </article>
        <?php endwhile; ?>
    <? endif; ?>

    <?php if (have_rows('column_two')) : ?>
        <?php while (have_rows('column_two')) : the_row(); ?>
            <article>
                <img src="<?php the_sub_field('image'); ?>">
                <h3 class="excerpt"><?php the_sub_field('project_title'); ?></h3>
            </article>
        <?php endwhile; ?>
    <? endif; ?>

    <?php if (have_rows('column_three')) : ?>
        <?php while (have_rows('column_three')) : the_row(); ?>
            <article>
                <img src="<?php the_sub_field('image'); ?>">
                <h3 class="excerpt"><?php the_sub_field('project_title'); ?></h3>
            </article>
        <?php endwhile; ?>
    <? endif; ?>
</div>