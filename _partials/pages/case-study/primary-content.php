<?php

/**
 * Case-study: primary content section. 
 * Notes: this is the prmary content that features at the top of a case-study, above flexible content
 * 
 * @package BBWP
 */

$statement = get_field('work_statement');
$sector = get_field('sector');
$secondary_image = get_field('secondary_image');
?>

<div class="primary-content contain">

    <?php if (have_rows('primary_media')) : ?>
        <?php while (have_rows('primary_media')) : the_row();
            $primary_video = get_sub_field('video');
            $primary_image = get_sub_field('image');
            $primary_video_placeholder = get_sub_field('placeholder_image'); ?>

            <figure class="primary-content__hero">
                <?php if (get_sub_field('primary_choice') == 'video') : ?>
                    <video preload playsinline autoplay muted loop poster="<?php echo $primary_video_placeholder; ?>" class="primary-video">
                        <source src="<?php echo $primary_video ?>" type="video/mp4">
                    </video>
                <?php else : ?>
                    <figure class="primary-hero-image">
                        <?php echo wp_get_attachment_image($primary_image, 'full'); ?>
                    </figure>
                <?php endif; ?>
            </figure>

        <?php endwhile; ?>
    <?php endif; ?>


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
                    <h3 class="title">What we did</h3>
                    <div class="what-we-did__services">
                        <?php if (have_rows('what_we_did')) :
                            while (have_rows('what_we_did')) : the_row(); ?>



                                <?php if (have_rows('strategy')) : ?>
                                    <div class="service-type">
                                        <h3 class="title">Strategy</h3>
                                        <ul>
                                            <?php while (have_rows('strategy')) : the_row();
                                                $strategy_service = get_sub_field('service_type'); ?>
                                                <li><?php echo $strategy_service; ?></li>
                                            <?php endwhile; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>

                                <?php if (have_rows('design')) : ?>
                                    <div class="service-type">
                                        <h3 class="title">Design</h3>
                                        <ul>
                                            <?php while (have_rows('design')) : the_row();
                                                $design_service = get_sub_field('service_type');  ?>
                                                <li><?php echo $design_service; ?></li>
                                            <?php endwhile; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>

                                <?php if (have_rows('digital')) : ?>
                                    <div class="service-type">
                                        <h3 class="title">Digital</h3>
                                        <ul>
                                            <?php while (have_rows('digital')) : the_row();
                                                $strategy_service = get_sub_field('service_type'); ?>
                                                <li><?php echo $strategy_service; ?></li>
                                            <?php endwhile; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div><!-- close .what-we-did-->
            </div><!-- close .details-->
        </div><!-- close .lh-col-->

        <?php if ($secondary_image) :  ?>
            <div class="rh-col">
                <figure>
                    <?php echo wp_get_attachment_image($secondary_image, 'full'); ?>
                </figure>
            </div>
        <?php endif; ?>
    </div><!-- close .primary-content__info -->
</div>