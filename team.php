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

<main class="team contain">
    <div class="team-members">

        <?php if (have_rows('team')) : ?>
            <?php while (have_rows('team')) : the_row();
                $name = get_sub_field('name');
                $role = get_sub_field('role');
                $image = get_sub_field('image');
                $bio = get_sub_field('bio');
            ?>

                <div class="team-member">
                    <figure data-aos="fade-in">
                        <img src="<?php echo $image; ?>" class="image">
                    </figure>

                    <h3 class="name"><?php echo $name; ?></h3>
                    <span class="role"><?php echo $role; ?></span>
                </div>
        <?php endwhile;
        endif; ?>

    </div>
</main>

<?php get_footer(); ?>