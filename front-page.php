<?php

/**
 * Homepage 
 *
 * @package BBWP
 */

get_header();
get_template_part('_partials/headers/header', 'front-page'); ?>

<main>
    <div class="grid grid-home contain">
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

        <!-- row two -->
        <div class="row row-two">
            <div class="quote lh-col" data-aos="fade-up">
                <h3 class="client">Client Name</h3>
                <span class="category">Category</span>
                <blockquote>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor."</blockquote>
            </div>
            <figure class="rh-col" data-aos="fade-up">
                <img src="/wp-content/uploads/2023/05/home-nspcc.png" class="thumb">
                <div class="details" data-aos="fade-up">
                    <h3 class="client">Threefold</h3>
                    <span class="category">Category</span>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                </div>
            </figure>
        </div>

        <!-- row three -->
        <div class="row row-three">
            <figure class="lh-col" data-aos="fade-up">
                <img src="/wp-content/uploads/2023/05/home-brighton-and-hove-museums.png" class="thumb">
                <div class="details" data-aos="fade-up">
                    <h3 class="client">Brighton & Hove Museums</h3>
                    <span class="category">Category</span>
                    <p class="description">Lorem ipsum dolor sit amet. </p>
                </div>
            </figure>
        </div>

        <!-- row four -->
        <div class="row row-eight">
            <figure class="lh-col" data-aos="fade-up">
                <img src="/wp-content/uploads/2023/05/home-oxford-university-press.png" class="thumb">
                <div class="details" data-aos="fade-up">
                    <h3 class="client">Oxford University Press</h3>
                    <span class="category">Category</span>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </figure>
            <figure class="rh-col" data-aos="fade-up">
                <img src="/wp-content/uploads/2023/05/home-lewes-fc.png">
                <div class="details" data-aos="fade-up">
                    <h3 class="client">Lewes FC</h3>
                    <span class="category">Category</span>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                </div>
            </figure>
        </div>

        <!-- row five -->
        <div class="row row-nine">
            <figure class="lh-col" data-aos="fade-up">
                <img src="/wp-content/uploads/2023/05/home-royal-mail-stones.png" class="thumb">
                <div class="details" data-aos="fade-up>
                    <h3 class=" client">Royal Mail</h3>
                    <span class="category">Category</span>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing. </p>
                </div>
            </figure>
            <div class="quote rh-col" data-aos="fade-up">
                <h3 class="client">Client</h3>
                <span class="category">Category</span>
                <blockquote>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</blockquote>
            </div>
        </div>


    </div>

    <?php get_template_part('_partials/flx/blocks') ?>
    <?php get_template_part('_partials/newsroom') ?>

</main>
<?php get_footer(); ?>