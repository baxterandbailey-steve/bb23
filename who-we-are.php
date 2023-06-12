<?php

/**
 * Template Name: Who we are
 * 
 * @package BBWP
 */

get_header();
get_template_part('_partials/headers/header', 'default'); ?>

<main class="what-we-do contain">
    <?php if (have_rows('flexible_content')) : ?>
        <?php while (have_rows('flexible_content')) : the_row(); ?>

            <?php if (get_row_layout() == 'service_block') : ?>

                <?php if (have_rows('service')) :
                    while (have_rows('service')) : the_row(); ?>
                        <section class="service">
                            <span class="meta">Brand Identity</span>
                            <h2 class="title"><?php the_sub_field('title'); ?></h2>

                            <div class="grid">
                                <img src="<?php the_sub_field('image'); ?>" class="image">
                                <div class="rich-text">
                                    <p class="description"><?php the_sub_field('description'); ?></p>

                                    <h3>Subtitle</h3>
                                    <ul>
                                        <li>Workshops</li>
                                        <li>Audits</li>
                                        <li>Interviews</li>
                                        <li>Brand blueprint and documentation</li>
                                        <li>Naming</li>
                                    </ul>

                                    <?php if (have_rows('link')) :
                                        while (have_rows('link')) : the_row(); ?>
                                            <a href="<?php the_sub_field('link_url'); ?>" class="link"><?php the_sub_field('link_label'); ?></a>
                                    <?php endwhile; // close repeater while
                                    endif;  // close repeater if 
                                    ?>
                                </div>
                        </section>

                <?php endwhile; // close repeater while
                endif;  // close repeater if 
                ?>

            <?php endif; ?>
    <?php endwhile; // close flex while
    endif;  // close flex if 
    ?>
</main>

<?php get_footer(); ?>