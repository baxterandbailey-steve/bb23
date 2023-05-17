<?php

/**
 * Template Name: Team
 *
 * @package BBWP
 */

get_header();
$content = get_field('content');
?>

<?php get_template_part('_partials/headers/header', 'default'); ?>

<main class="contain">
    <div class="team">
        <div class="page-top">
            <p class="text"><?php echo $content; ?></p>
            <a href="#" class="pill">Join the team</a>
        </div>

        <div class="bios">
            <!-- start bios -->
            <?php if (have_rows('team')) : ?>
                <?php while (have_rows('team')) : the_row(); ?>
                    <!-- loop through columns-->

                    <!-- column one-->
                    <div class="col-1">
                        <?php
                        if (have_rows('column_one')) :
                            while (have_rows('column_one')) : the_row();
                                $name = get_sub_field('name');
                                $role = get_sub_field('job_title');
                                $image = get_sub_field('image');
                                $bio = get_sub_field('bio');
                        ?>

                                <!-- <?php get_template_part('_templates/loop') ?> -->

                                <div class="team-member">
                                    <figure data-aos="fade-in">
                                        <img src="<?php echo $image; ?>" class="image">
                                    </figure>
                                    <div class="details">
                                        <h3 class="name"><?php echo $name; ?></h3>
                                        <span class="title"><?php echo $role; ?></span>
                                        <button class="bio-reveal" aria-expanded="false"></button>
                                    </div>
                                    <p class="bio" hidden>
                                        <?php echo $bio; ?>
                                    </p>
                                </div>

                        <?php endwhile;
                        endif; ?>
                    </div><!-- close column one-->

                    <!-- column two-->
                    <div class="col-2">
                        <?php
                        if (have_rows('column_two')) :
                            while (have_rows('column_two')) : the_row();
                                $name = get_sub_field('name');
                                $role = get_sub_field('job_title');
                                $image = get_sub_field('image');
                                $bio = get_sub_field('bio');
                        ?>

                                <!-- <?php get_template_part('_templates/loop') ?> -->

                                <div class="team-member">
                                    <figure data-aos="fade-in">
                                        <img src="<?php echo $image; ?>" class="image">
                                    </figure>
                                    <div class="details">
                                        <h3 class="name"><?php echo $name; ?></h3>
                                        <span class="title"><?php echo $role; ?></span>
                                        <button class="bio-reveal" aria-expanded="false"></button>
                                    </div>
                                    <p class="bio" hidden>
                                        <?php echo $bio; ?>
                                    </p>
                                </div>

                        <?php
                            endwhile;
                        endif; ?>
                    </div><!-- close column two-->


                    <!-- column three-->
                    <div class="col-3">
                        <?php
                        if (have_rows('column_three')) :
                            while (have_rows('column_three')) : the_row();
                                $name = get_sub_field('name');
                                $role = get_sub_field('job_title');
                                $image = get_sub_field('image');
                                $bio = get_sub_field('bio');
                        ?>

                                <!-- <?php get_template_part('_templates/loop') ?> -->

                                <div class="team-member">
                                    <figure data-aos="fade-in">
                                        <img src="<?php echo $image; ?>" class="image">
                                    </figure>
                                    <div class="details">
                                        <h3 class="name"><?php echo $name; ?></h3>
                                        <span class="title"><?php echo $role; ?></span>
                                        <button class="bio-reveal" aria-expanded="false"></button>
                                    </div>
                                    <p class="bio" hidden>
                                        <?php echo $bio; ?>
                                    </p>
                                </div>

                        <?php
                            endwhile;
                        endif; ?>
                    </div><!-- close column three-->

                <?php endwhile; ?>
            <?php endif; ?>
        </div><!-- close bios-->
    </div>

</main>

<?php get_footer(); ?>