<?php

/**
 * Homepage 
 *
 * @package BBWP
 */

get_header();
get_template_part('_partials/headers/header', 'front-page'); ?>

<main>
    <div class="grid-home contain">
        <h2 data-aos="fade-up">Selected Work</h2>
        <!-- row one -->
        <div class="row row-one">
            <figure class="col-1" data-aos="fade-up">
                <h3 class="client">Propellernet</h3>
                <div class="details">
                    <span class="category">Category</span>
                    <p class="description">Applying the rule of three to help a new category player launch, grow and win</p>
                </div>
                <img src="/wp-content/uploads/2023/05/home-propellernet-1.png" class="details thumb" data-aos="fade-up">
            </figure>
            <figure class="col-2" data-aos="fade-up">
                <img src="/wp-content/uploads/2023/05/home-propellernet-2.png" class="details thumb">
            </figure>
            <figure class="col-3" data-aos="fade-up">
                <img src="/wp-content/uploads/2023/05/home-propellernet-3.png">
            </figure>
        </div>

        <?php get_template_part('_partials/work-rows') ?>
    </div>


    <?php get_template_part('_partials/flx/blocks') ?>
    <?php get_template_part('_partials/newsroom') ?>

</main>
<?php get_footer(); ?>