<?php

/**
 * Work [single case-study] page
 *
 * @package BBWP
 */

get_header();
get_template_part('_partials/headers/header', 'work');

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
                        <a href="/work/" class="link">Back</a>
                    </div>
                    <div class="statement"><?php echo $statement; ?></div>
                <?php endif; ?>

                <div class="details">
                    <?php if (get_field('sector')) : ?>
                        <div class="sector">
                            <h3 class="title">Sector</h3>
                            <p class="type"><?php echo $sector; ?></p>
                        </div>
                    <?php endif; ?>

                    <div class="what-we-did">
                        <?php if (have_rows('what_we_did')) :
                            while (have_rows('what_we_did')) : the_row(); ?>
                                <?php if (have_rows('strategy')) : ?>
                                    <div class="service-type">
                                        <h3 class="title">Strategy</h3>
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
                                        <h3 class="title">Design</h3>
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
                                        <h3 class="title">Digital</h3>
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

    <!-- special thanks -->
    <div class="special-thanks contain">
        <?php if (have_rows('special_thanks')) :
            while (have_rows('special_thanks')) : the_row();
                $thanks_text = get_sub_field('text'); ?>

                <div class="rich-text">
                    <h2 class="title">Special Thanks</h2>

                    <div class="hold-me">
                        <p class="text"><?php echo $thanks_text; ?></p>
                        <div class="collaborator">
                            <h3>Collaborators</h3>
                            <ul>
                                <?php if (have_rows('collaborators')) :
                                    while (have_rows('collaborators')) : the_row();
                                        $name = get_sub_field('name');
                                        $url = get_sub_field('url'); ?>

                                        <li>
                                            <span class="name"><a href="<?php echo $url; ?>"><?php echo $name; ?></a></span>
                                        </li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

        <!-- more like this -->
        <div class="more-like-this">
            <div class="container-top">
                <h2 class="title">More like this</h2>
                <a a href="/our-work/" class="link">All work</a>
            </div>

            <ul class="related">
                <?php
                $featured_posts = get_field('related_posts'); ?>
                <?php foreach ($featured_posts as $post) :
                    setup_postdata($post); ?>
                    <li>
                        <article>
                            <figure>
                                <?php the_post_thumbnail(); ?>
                            </figure>
                            <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        </article>
                    </li>
                <?php endforeach; ?>
            </ul>

            <?php wp_reset_postdata(); ?>
        </div>

</main>
<?php get_footer(); ?>