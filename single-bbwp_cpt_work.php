<?php get_header();
$terms = get_terms(array(
    'taxonomy'   => 'work_taxonomy',
    'hide_empty' => false,
));

// text
$excerpt = get_field('excerpt');
$statement = get_field('work_statement');
$sector = get_field('sector');
$service = get_field('service');

// images
$primary_image = get_field('primary_image');
$secondary_image = get_field('secondary_image');

?>

<main class="case-study">
    <section class="page-top contain">
        <span class="meta"><?php echo $service; ?></span>
        <h2 class="title"><?php the_title(); ?></h2>
        <p class="excerpt"><?php echo $excerpt; ?></p>
    </section>

    <div class="primary-media">
        <?php if (have_rows('primary_media')) : ?>
            <?php while (have_rows('primary_media')) : the_row();
                $primary_media = get_sub_field('video');
            ?>
                <video preload playsinline autoplay muted loop class="primary-video">
                    <source src="<?php echo $primary_media ?>" type="video/mp4">
                </video>

        <?php
            endwhile;
        endif;
        ?>
    </div>


    <!-- <img src="<?php echo $primary_image; ?>" class="primary-image contain"> -->


    <div class="primary-content contain">
        <div class="lh-col">
            <p class="statement"><?php echo $statement; ?></p>

            <div class="details">
                <div class="sector">
                    <h3 class="title">Sector</h3>
                    <p class="type"><?php echo $sector; ?></p>
                </div>

                <div class="what-we-did">
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
        </div>

        <div class="rh-col">
            <img src="<?php echo $secondary_image; ?>">
        </div>
    </div>

    <!-- Flexible content -->
    <?php get_template_part('_partials/flx/work/blocks') ?>


</main>
<?php get_footer(); ?>