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
        <!-- row one -->
        <div class="row row-one">
            <figure class="col-1" data-aos="fade-in">
                <h2 class="client">Propellernet</h2>
                <div class="details">
                    <span class="category">Category</span>
                    <p class="description">Applying the rule of three to help a new category player launch, grow and win</p>
                </div>
                <img src="/wp-content/uploads/2023/05/home-propellernet-1.png" class="details thumb" data-aos="fade-in">
            </figure>
            <figure class="col-2" data-aos="fade-in">
                <img src="/wp-content/uploads/2023/05/home-propellernet-2.png" class="details thumb">
            </figure>
            <figure class="col-3" data-aos="fade-in">
                <img src="/wp-content/uploads/2023/05/home-propellernet-3.png">
            </figure>
        </div>

        <!-- row two -->
        <div class="row row-two">
            <div class="quote lh-col" data-aos="fade-in">
                <h2 class="client">Client Name</h2>
                <span class="category">Category</span>
                <p>Breaking down boundaries with bold branding and clear communications</p>
            </div>
            <figure class="rh-col" data-aos="fade-in">
                <img src="/wp-content/uploads/2023/05/home-threefold.png" class="thumb">
                <div class="details">
                    <h2 class="client">Threefold</h2>
                    <span class="category">Category</span>
                    <p class="description">Applying the rule of three to help a new category player launch, grow and win</p>
                </div>
            </figure>
        </div>

        <!-- row three -->
        <div class="row row-three">
            <figure class="lh-col" data-aos="fade-in">
                <img src="/wp-content/uploads/2023/05/home-brighton-and-hove-museums.png" class="thumb">
                <div class="details">
                    <h2 class="client">Brighton & Hove Museums</h2>
                    <span class="category">Category</span>
                    <p class="description">Brand creation for a constellation of cultural destinations</p>
                </div>
            </figure>
        </div>

        <!-- row four -->
        <div class="row row-eight">
            <figure class="lh-col" data-aos="fade-in">
                <img src="/wp-content/uploads/2023/05/home-oxford-university-press.png" class="thumb">
                <div class="details">
                    <h2 class="client">Oxford University Press</h2>
                    <span class="category">Category</span>
                    <p class="description">Revealing teh heart (and soul) of much-loved world-spanning brand</p>
                </div>
            </figure>
            <figure class="rh-col" data-aos="fade-in">
                <img src="/wp-content/uploads/2023/05/home-lewes-fc.png">
                <div class="details">
                    <h2 class="client">Lewes FC</h2>
                    <span class="category">Category</span>
                    <p class="description">Helping a tiny grassroots club to make a huge ethical impact</p>
                </div>
            </figure>
        </div>

        <!-- row five -->
        <div class="row row-nine">
            <figure class="lh-col" data-aos="fade-in">
                <img src="/wp-content/uploads/2023/05/home-royal-mail-stones.png" class="thumb">
                <div class="details">
                    <h2 class="client">Royal Mail</h2>
                    <span class="category">Category</span>
                    <p class="description">It's only rock n' roll but we like it</p>
                </div>
            </figure>
            <div class="quote rh-col" data-aos="fade-in">
                <h2 class="client">Client</h2>
                <span class="category">Category</span>
                <p>A kinetic brand identity solution designed to move everybody</p>
            </div>
        </div>


    </div>

    <?php get_template_part('_partials/flx/blocks') ?>
    <?php get_template_part('_partials/newsroom') ?>

</main>
<?php get_footer(); ?>