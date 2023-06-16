<?php

/**
 * Template Name: What we do
 * 
 * @package BBWP
 */

get_header();
get_template_part('_partials/headers/header', 'default'); ?>

<main class="what-we-do">

    <?php if (have_rows('flexible_content')) : ?>
        <?php while (have_rows('flexible_content')) : the_row(); ?>

            <?php if (get_row_layout() == 'services') :
                $service_section_title = get_sub_field('section_title');
            ?>
                <section class="service contain">
                    <h2 class="title"><?php echo $service_section_title; ?></h2>


                    <?php if (have_rows('service')) :
                        while (have_rows('service')) : the_row();
                            $service_type = get_sub_field('type');
                            $service_title = get_sub_field('title');
                            $service_image = get_sub_field('image');
                            $service_description = get_sub_field('description');
                            $service_link_url = get_sub_field('link_url');
                            $service_link_label = get_sub_field('link_label');
                    ?>
                            <span><?php echo $service_type; ?></span>
                            <h2 class="title"><?php echo $service_title; ?></h2>
                            <div class="grid">

                                <img src="<?php echo $service_image; ?>" class="image">

                                <div class="rich-text">
                                    <p class="description"><?php echo $service_description; ?></p>
                                    <h4>Subtitle</h4>
                                    <ul>
                                        <?php if (have_rows('elements')) :
                                            while (have_rows('elements')) : the_row();
                                                $element = get_sub_field('element');
                                        ?>
                                                <li><?php echo $element; ?></li>
                                        <?php
                                            endwhile;
                                        endif; ?>
                                    </ul>
                                    <a href="<?php echo $service_link_url; ?>" class="link"><?php echo $service_link_label; ?></a>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    endif; ?>

                </section>












            <?php elseif (get_row_layout() == 'process') : ?>
                <section class="process"><!-- style="background-image: url('<?php the_sub_field('image'); ?>');"> -->
                    <div class="inner grid contain">
                        <div class="rich-text">
                            <style>
                                .rich-text:after {
                                    background-image: url('<?php the_sub_field('image'); ?>');
                                }
                            </style>
                            <span class="meta"><?php the_sub_field('type'); ?></span>
                            <h3 class="title"><?php the_sub_field('title'); ?></h3>
                            <p class="description"><?php the_sub_field('description'); ?></p>
                        </div>
                    </div>
                </section>

            <?php elseif (get_row_layout() == 'testimonial') : ?>
                <div class="testimonial grid contain">
                    <div class="lh-col">
                        <span class="author"><?php the_sub_field('author'); ?></span>
                        <span class="role"><?php the_sub_field('role'); ?></span>
                        <span class="organisation"><?php the_sub_field('organisation'); ?></span>
                    </div>
                    <p class="quote"><?php the_sub_field('quote'); ?></p>
                </div>

            <?php elseif (get_row_layout() == 'call_to_action') : ?>
                <div class="call-to-action grid contain">
                    <img src="<?php the_sub_field('image') ?>" class="image">
                    <div class="rich-text">
                        <h3 class="title"><?php the_sub_field('title') ?>"</h3>
                        <p class="text"><?php the_sub_field('text') ?>"</p>
                    </div>


                <?php endif; ?><!-- close get_row_layout conditional -->
            <?php endwhile; ?><!-- close flexible content while -->
        <?php endif; ?><!-- close flexible content if -->

</main>

<?php get_footer(); ?>