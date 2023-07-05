<?php

/**
 * Template Name: Work
 *
 * @package BBWP
 */

get_header();
$args = new WP_Query(array(
    'post_type' => 'bbwp_cpt_work',
    'order' => 'DSC'
));

$terms = get_terms(array(
    'taxonomy'   => 'work_taxonomy',
    'hide_empty' => false,
));
?>

<?php get_template_part('_partials/headers/header', 'default'); ?>

<main class="our-work">
    <!-- page titling and taxonomy listing -->
    <div class="page-top">
        <h2 class="page-title"><?php the_title(); ?></h2>
        <ul class="list-taxonomies">
            <?php
            foreach ($terms as $term) {
                $term_link = get_term_link($term);
                echo '<li><a href="' . esc_url($term_link) . '" class="taxo-link">' . $term->name . '</a></li>';
            }
            ?>
        </ul>
    </div>

    <!-- featured work -->
    <div class="our-work__featured contain">
        <div class="row-4-4-empty">
            <article>
                <figure data-aos="fade-in"><img src="/wp-content/uploads/2023/05/home-new-scientist.png"></figure>
                <h3><a href="/work/new-scientist/">New Scientist</a></h3>
                <span class="meta"></span>
            </article>
            <article>
                <figure data-aos="fade-in"><img src="/wp-content/uploads/2023/05/rm-xmas.png"></figure>
                <h3>Royal Mail</h3>
                <span class="meta"></span>
            </article>
        </div>

        <div class="row-8-4">
            <article>
                <figure data-aos="fade-in"><img src="/wp-content/uploads/2023/05/brighton-hove-museums.jpg"></figure>
                <h3>Brighton & Hove Museum</h3>
                <span class="meta"></span>
            </article>
            <article>
                <figure data-aos="fade-in"><img src="/wp-content/uploads/2023/05/bh-screen.png"></figure>
                <h3>Brighton & Hove Museum</h3>
                <span class="meta"></span>
            </article>
        </div>

        <div class="row-empty-8">
            <article>
                <figure data-aos="fade-in"><img src="/wp-content/uploads/2023/05/ns-academy-60.png"></figure>
                <h3>New Scientist Academy</h3>
                <span class="meta"></span>
            </article>
        </div>

        <div class="row-4-tall-empty">
            <article>
                <figure data-aos="fade-in"><img src="/wp-content/uploads/2023/05/propellernet.png"></figure>
                <h3>Propellernet</h3>
                <span class="meta"></span>
            </article>
            <article>
                <figure data-aos="fade-in"><img src="/wp-content/uploads/2023/05/propellernet-website-build.png"></figure>
                <h3>Proplellernet</h3>
                <span class="meta"></span>
            </article>
        </div>

        <div class="row-empty-4-4">
            <article>
                <figure data-aos="fade-in"><img src="/wp-content/uploads/2023/05/home-royal-mail-stones.png"></figure>
                <h3>Royal Mail- The Rolling Stones</h3>
                <span class="meta"></span>
            </article>
            <article>
                <figure data-aos="fade-in"><img src="/wp-content/uploads/2023/05/illuminated-river.png"></figure>
                <h3>The llluminated River</h3>
                <span class="meta"></span>
            </article>
        </div>

        <div class="row-4-8">
            <article>
                <figure data-aos="fade-in"><img src="/wp-content/uploads/2023/05/home-nspcc.png"></figure>
                <h3>NSPCC Helpline</h3>
                <span class="meta"></span>
            </article>
            <article>
                <figure data-aos="fade-in"><img src="/wp-content/uploads/2023/05/goldsmiths.jpg"></figure>
                <h3>Goldsmiths University of London</h3>
                <span class="meta"></span>
            </article>
        </div>

        <div class="row-empty-tall-4">
            <article>
                <figure data-aos="fade-in"><img src="/wp-content/uploads/2023/05/oxford-university-press.jpg"></figure>
                <h3>Oxford University Press</h3>
                <span class="meta"></span>
            </article>
            <article>
                <figure data-aos="fade-in">
                    <img src="/wp-content/uploads/2023/05/pau-mcartney.png">
                </figure>
                <h3>Royal Mail - Paul McCartney</h3>
                <span class="meta"></span>
            </article>
        </div>

        <div class="row-8-empty">
            <article>
                <figure data-aos="fade-in"><img src="/wp-content/uploads/2023/05/robert-ames-60.png"></figure>
                <h3>Robert Ames</h3>
                <span class="meta"></span>
            </article>
        </div>
    </div>

    <!-- 'archive list' -->
    <ul class="grid-work our-work__archive contain">
        <?php if (have_posts()) :
            while ($args->have_posts()) : $args->the_post(); ?>
                <li class="grid-item <?php the_field('size'); ?>">

                    <?php
                    $new_work = get_field('new_work');
                    if ($new_work == true) {
                        echo '<span class="new-work">New Project</span>';
                    } ?>

                    <article>
                        <figure data-aos="fade-in">
                            <?php the_post_thumbnail(); ?>

                            <h3 class="title link"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <span class="meta"><?php the_field('meta'); ?></span>
                        </figure>
                    </article>
                </li>

        <?php endwhile;
            wp_reset_postdata();
        endif; ?>
    </ul>

</main>

<?php get_footer(); ?>