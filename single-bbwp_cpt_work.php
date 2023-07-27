<?php

/**
 * Work [single case-study] page
 *
 * @package BBWP
 */

get_header();
get_template_part('_partials/headers/header', 'work');

// $terms = get_terms(array(
//     'taxonomy'   => 'services_taxonomy',
//     'parent'        => 0,
//     'hide_empty' => true,
// ));


$strategy = new WP_Term_Query(array(
    'taxonomy' => 'services_taxonomy',
    'parent' => '18', // strategy
));

$design = new WP_Term_Query(array(
    'taxonomy' => 'services_taxonomy',
    'parent' => '19', // design
));

$digital = new WP_Term_Query(array(
    'taxonomy' => 'services_taxonomy',
    'parent' => '20', // digital
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
        <!-- <h2 class="title"><?php echo $title; ?></h2> -->
        <h2 class="title"><?php the_title(); ?></h2>
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
                        <figure class="primary-hero-image">
                            <?php echo wp_get_attachment_image($primary_image, 'full'); ?>
                        </figure>

                    <?php endif; ?>

                <?php endwhile; ?>
            <?php endif; ?>
        </figure>

        <div class="primary-content__info">
            <div class="lh-col">
                <?php if (get_field('work_statement')) : ?>
                    <div class="link-back">
                        <a href="/our-work/" class="link">Back</a>
                    </div>

                    <p class="statement"><?php echo $statement; ?></p>
                <?php endif; ?>

                <div class="details">
                    <?php if (get_field('sector')) : ?>
                        <div class="sector">
                            <h3 class="title">Sector</h3>
                            <p class="type"><?php echo $sector; ?></p>
                        </div>
                    <?php endif; ?>

                    <div class="what-we-did">

                        <div class="service-type">
                            <h3 class="title">Strategy</h3>
                            <?php foreach ($strategy->terms as $term) {
                                echo $term->name . '<br>';
                            }
                            ?>
                            <?php wp_reset_postdata(); ?>
                        </div>

                        <div class="service-type">
                            <h3 class="title">Design</h3>
                            <?php foreach ($design->terms as $term) {
                                echo $term->name . '<br>';
                            }
                            ?>
                            <?php wp_reset_postdata(); ?>

                        </div>

                        <div class="service-type">
                            <h3 class="title">Digital</h3>
                            <?php foreach ($digital->terms as $term) {
                                echo $term->name . '<br>';
                            }
                            ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
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