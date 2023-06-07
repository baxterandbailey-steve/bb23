<?php get_header();
$terms = get_terms(array(
    'taxonomy'   => 'work_taxonomy',
    'hide_empty' => false,
));

// text
$excerpt = get_field('excerpt');
$statement = get_field('statement');
$sector = get_field('sector');

// images
$primary_image = get_field('primary_image');
$secondary_image = get_field('secondary_image');
?>

<?php get_template_part('_partials/headers/header', 'default'); ?>

<main class="case-study contain">
    <section class="page-top grid">
        <span class="meta">Brand Identity</span>
        <h2 class="title"><?php the_title(); ?></h2>
        <p class="excerpt"><?php echo $excerpt; ?></p>
    </section>

    <img src="<?php echo $primary_image; ?>" class="primary-image">

    <section class="primary-content grid">
        <div class="lh-col">
            <p class="statement"><?php echo $statement; ?></p>

            <div class="details">
                <div class="sector">
                    <h3 class="title">Sector</h3>
                    <p class="item"><?php echo $sector; ?></p>
                </div>

                <!-- awards repeater-->
                <div class="awards">
                    <h3 class="title">Awards</h3>
                    <?php
                    if (have_rows('awards')) :
                        while (have_rows('awards')) : the_row(); ?>
                            <p class="item"><?php the_sub_field('award_item'); ?></p>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>

                <!-- strategy repeater -->
                <div class="strategy">
                    <h3 class="title">Strategy</h3>
                    <?php
                    if (have_rows('strategy')) :
                        while (have_rows('strategy')) : the_row(); ?>
                            <p class="item"><?php the_sub_field('strategy_item'); ?></p>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>

                <!-- design repeater -->
                <div class="design">
                    <h3 class="title">Design</h3>
                    <?php
                    if (have_rows('design')) :
                        while (have_rows('design')) : the_row(); ?>
                            <p class="item"><?php the_sub_field('design_item'); ?></p>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>

                <!-- digital repeater-->
                <div class="digital">
                    <h3 class="title">Digital</h3>
                    <?php
                    if (have_rows('digital')) :
                        while (have_rows('digital')) : the_row(); ?>
                            <p class="item"><?php the_sub_field('digital_item'); ?></p>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>

            </div>
        </div>

        <div class="rh-col">
            <img src="<?php echo $secondary_image; ?>">
        </div>
    </section>

</main>
<?php get_footer(); ?>