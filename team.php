<?php

/**
 * Template Name: About
 *
 * @package BBWP
 */

get_header();
$content = get_field('content');
?>

<?php get_template_part('_partials/headers/header', 'default'); ?>

<main class="about contain">
    <div class="team-members">
        <?php if (have_rows('team')) : ?>
            <?php while (have_rows('team')) : the_row();
                $name = get_sub_field('name');
                $role = get_sub_field('role');
                $image = get_sub_field('image');
                $bio = get_sub_field('bio');
            ?>

                <div class="team-member">
                    <figure>
                        <img src="<?php echo $image; ?>" class="image" data-aos="fade-in">
                    </figure>

                    <h3 class="name" data-aos="fade-in"><?php echo $name; ?></h3>
                    <span class="role" data-aos="fade-in"><?php echo $role; ?></span>
                </div>
        <?php endwhile;
        endif; ?>
    </div>

    <section class="clients">
        <?php if (have_rows('flexible_content')) : ?>
            <?php while (have_rows('flexible_content')) : the_row(); ?>

                <!-- clients intro -->
                <div class="intro">
                    <?php if (have_rows('introduction')) :
                        while (have_rows('introduction')) : the_row(); ?>

                            <h2><?php the_sub_field('title'); ?></h2>
                            <p><?php the_sub_field('text'); ?></p>
                    <?php
                        endwhile;
                    endif; ?>
                </div>


                <!-- client logos -->
                <div class="logos">
                    <?php if (have_rows('logos')) :
                        while (have_rows('logos')) : the_row();
                            $sub_value = get_sub_field('logo'); ?>
                            <img src="<?php the_sub_field('logo') ?>">
                    <?php
                        endwhile;
                    endif; ?>
                </div>

        <?php endwhile;
        endif; ?>
    </section>
</main>

<?php get_footer(); ?>