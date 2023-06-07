<?php

/**
 * Template Name: Components
 *
 * @package BBWP
 */

$title = get_field('title');

get_header();
get_template_part('_partials/headers/header', 'default'); ?>

<main class="contain">
    <h2><?php echo $title; ?></h2>

    <!-- LH Col -->
    <?php if (have_rows('lh_col')) : ?>
        <?php while (have_rows('lh_col')) : the_row(); ?>
            <!-- test for text or image -->
            <?php if (get_sub_field('choice') == 'text') : { ?>
                    <div style="margin-bottom: 5rem">
                        <?php if (have_rows('lh_text')) : ?>
                            <?php while (have_rows('lh_text')) : the_row(); ?>
                                <h3><?php the_sub_field('client'); ?></h3>
                                <p><?php the_sub_field('category'); ?></p>
                                <blockquopte><?php the_sub_field('blockquote'); ?></blockquopte>
                        <?php endwhile;
                        endif; ?>
                    </div>
                <?php } ?>

            <? else : ?>

                <div style="margin-bottom: 5rem">
                    <?php if (have_rows('lh_image')) : ?>
                        <?php while (have_rows('lh_image')) : the_row(); ?>
                            <img src="<?php the_sub_field('image'); ?>">
                            <h3><?php the_sub_field('client'); ?></h3>
                            <p><?php the_sub_field('category'); ?></p>
                            <blockquopte><?php the_sub_field('description'); ?></blockquopte>
                    <?php endwhile;
                    endif; ?>
                </div>

            <?php endif ?>
            <!-- close LH Col -->
    <?php endwhile;
    endif; ?>

    <!-- RH Col -->
    <?php if (have_rows('rh_col')) : ?>
        <?php while (have_rows('rh_col')) : the_row(); ?>
            <!-- test for text or image -->
            <?php if (get_sub_field('choice') == 'text') : { ?>

                    <div style="margin-bottom: 5rem">
                        <?php if (have_rows('rh_text')) : ?>
                            <?php while (have_rows('rh_text')) : the_row(); ?>
                                <h3><?php the_sub_field('client'); ?></h3>
                                <p><?php the_sub_field('category'); ?></p>
                                <blockquopte><?php the_sub_field('blockquote'); ?></blockquopte>
                        <?php endwhile;
                        endif; ?>
                    </div>
                <?php } ?>

            <? else : ?>

                <div style="margin-bottom: 5rem">
                    <?php if (have_rows('rh_image')) : ?>
                        <?php while (have_rows('rh_image')) : the_row(); ?>
                            <img src="<?php the_sub_field('image'); ?>">
                            <h3><?php the_sub_field('client'); ?></h3>
                            <p><?php the_sub_field('category'); ?></p>
                            <blockquopte><?php the_sub_field('description'); ?></blockquopte>
                    <?php endwhile;
                    endif; ?>
                </div>
            <?php endif ?>

            <!-- close RH Col -->
    <?php endwhile;
    endif; ?>

</main>
<?php get_footer(); ?>