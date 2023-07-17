<?php

/**
 * Work [single case-study] page
 *
 * @package BBWP
 */

get_header();
get_template_part('_partials/headers/header', 'work');

$terms = get_terms(array(
    'taxonomy'   => 'work_taxonomy',
    'hide_empty' => false,
));

$title = get_field('case_study_title');
$excerpt = get_field('excerpt');
$statement = get_field('work_statement');
$sector = get_field('sector');
$service = get_field('service');

//$primary_video = get_field('primary_video');
//$primary_image = get_field('primary_image');
$secondary_image = get_field('secondary_image');
?>

<main class="case-study">
    <section class="page-top contain">
        <span class="meta"><?php echo $service; ?></span>
        <h2 class="title"><?php echo $title; ?></h2>
        <p class="excerpt"><?php echo $excerpt; ?></p>
    </section>

    <div class="primary-content contain">
        <figure class="primary-content__hero">
            <?php if (have_rows('primary_media')) : ?>
                <?php while (have_rows('primary_media')) : the_row();
                    $primary_video = get_sub_field('video');
                    $primary_image = get_sub_field('image');
                ?>
                    <?php if (get_sub_field('primary_choice') == 'video') : ?>

                        <video preload playsinline autoplay muted loop class="primary-video">
                            <source src="<?php echo $primary_video ?>" type="video/mp4">
                        </video>

                    <?php else : ?>
                        <figure class="full-width-image">
                            <?php echo wp_get_attachment_image($primary_image, 'full'); ?>
                        </figure>

                    <?php endif; ?>

                <?php endwhile; ?>
            <?php endif; ?>
        </figure>

        <div class="primary-content__info">
            <div class="lh-col">
                <p class="statement"><?php echo $statement; ?></p>
                <div class="details">

                    <div class="sector">
                        <h3 class="title">Sector</h3>
                        <p class="type"><?php echo $sector; ?></p>
                    </div>

                    <div class="what-we-did">
                        <?php if (have_rows('what_we_did')) :
                            while (have_rows('what_we_did')) : the_row(); ?>

                                <?php if (have_rows('strategy')) : ?>
                                    <div class="service-type">
                                        <h3>Strategy</h3>
                                        <?php while (have_rows('strategy')) : the_row();
                                            $strategy_service = get_sub_field('service_type')
                                        ?>
                                            <ul>
                                                <li><?php echo $strategy_service; ?></li>
                                            </ul>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>

                                <?php if (have_rows('design')) : ?>
                                    <div class="service-type">
                                        <h3>Design</h3>
                                        <?php while (have_rows('design')) : the_row();
                                            $design_service = get_sub_field('service_type')
                                        ?>
                                            <ul>
                                                <li><?php echo $design_service; ?></li>
                                            </ul>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>

                                <?php if (have_rows('digital')) : ?>
                                    <div class="service-type">
                                        <h3>Digital</h3>
                                        <?php while (have_rows('digital')) : the_row();
                                            $strategy_service = get_sub_field('service_type')
                                        ?>
                                            <ul>
                                                <li><?php echo $strategy_service; ?></li>
                                            </ul>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <?php if ($secondary_image) :  ?>
                <div class="rh-col">
                    <figure>
                        <?php echo wp_get_attachment_image($secondary_image, 'full'); ?>
                    </figure>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <?php get_template_part('_partials/flx/case-studies/blocks') ?>

</main>
<?php get_footer(); ?>