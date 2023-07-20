<?php

/**
 * Hompepage: two-column block
 *
 * @package BBWP
 */

?>

<div class="row two-cols">
    <?php if (have_rows('lh_col')) :
        while (have_rows('lh_col')) : the_row();
    ?>

            <?php if (get_sub_field('choice') == 'text') : ?>

                <?php if (have_rows('lh_text')) : ?>
                    <?php while (have_rows('lh_text')) : the_row();

                        $lh_text_quote = get_sub_field('quote');
                        $lh_text_client = get_sub_field('client');
                        $lh_text_position = get_sub_field('position');
                        $lh_text_category = get_sub_field('category');
                        $lh_text_width = get_sub_field('width');
                    ?>

                        <div class="lh-col quote" style="grid-column: <?php echo $lh_text_width; ?>" data-aos="fade-up">
                            <blockquote><?php echo $lh_text_quote; ?></blockquote>
                            <h3 class="client"><?php echo $lh_text_client; ?></h3>
                            <span class="position"><?php echo $lh_text_position; ?></span>
                            <span class="category"><?php echo $lh_text_category; ?></span>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>

            <?php elseif (get_sub_field('choice') == 'image') : ?>

                <?php if (have_rows('lh_image')) : ?>
                    <?php while (have_rows('lh_image')) : the_row();

                        $lh_image = get_sub_field('image');
                        $lh_image_width = get_sub_field('width');
                        $lh_image_offset = get_sub_field('offset');
                        $lh_image_client = get_sub_field('client');
                        $lh_image_category = get_sub_field('category');
                        $lh_image_description = get_sub_field('description');
                        $lh_image_link = get_sub_field('link');
                    ?>

                        <figure class="lh-col" style="grid-column: <?php echo $lh_image_width; ?>;" data-aos="fade-up">
                            <a href="<?php echo $lh_image_link; ?>">
                                <?php echo wp_get_attachment_image($lh_image, 'full'); ?>
                            </a>
                            <div class="details" data-aos="fade-up">
                                <h3 class="client"><?php echo $lh_image_client; ?></h3>
                                <span class="category"><?php echo $lh_image_category; ?></span>
                                <p class="description"><?php echo $lh_image_description; ?></p>
                            </div>
                        </figure>

                    <?php endwhile; ?>
                <?php endif; ?>

            <?php else : ?>

                <?php if (have_rows('lh_video')) : ?>
                    <?php while (have_rows('lh_video')) : the_row();
                        $lh_video = get_sub_field('video');
                        $lh_video_width = get_sub_field('width');
                        $lh_video_client = get_sub_field('client');
                        $lh_video_category = get_sub_field('category');
                        $lh_video_description = get_sub_field('description');
                        $lh_video_link = get_sub_field('link');
                    ?>

                        <div class="lh-col video" style="grid-column: <?php echo $lh_video_width; ?>;">
                            <video preload playsinline autoplay muted loop style="grid-column: <?php echo $lh_video_width; ?>;">
                                <source src=" <?php echo $lh_video; ?>">
                            </video>
                            <div class="details" data-aos="fade-up">
                                <h3 class="client"><?php echo $lh_video_client; ?></h3>
                                <span class="category"><?php echo $lh_video_category; ?></span>
                                <p class="description"><?php echo $lh_video_description; ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            <?php endif ?>

    <?php endwhile;
    endif; ?>


    <?php if (have_rows('rh_col')) :
        while (have_rows('rh_col')) : the_row();
    ?>

            <?php if (get_sub_field('choice') == 'text') : ?>

                <?php if (have_rows('rh_text')) : ?>
                    <?php while (have_rows('rh_text')) : the_row();

                        $rh_text_width = get_sub_field('width');
                        $rh_text_client = get_sub_field('client');
                        $rh_text_category = get_sub_field('category');
                        $rh_text_quote = get_sub_field('quote'); ?>

                        <div class="rh-col quote" style="grid-column: <?php echo $rh_text_width; ?>" data-aos="fade-up">
                            <blockquote><?php echo $rh_text_quote; ?></blockquote>
                            <h3 class="client"><?php echo $rh_text_client; ?></h3>
                            <span class="category"><?php echo $rh_text_category; ?></span>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>

            <?php elseif (get_sub_field('choice') == 'image') : ?>

                <?php if (have_rows('rh_image')) : ?>
                    <?php while (have_rows('rh_image')) : the_row();

                        $rh_image = get_sub_field('image');
                        $rh_image_width = get_sub_field('width');
                        $rh_image_offset = get_sub_field('offset');
                        $rh_image_client = get_sub_field('client');
                        $rh_image_category = get_sub_field('category');
                        $rh_image_description = get_sub_field('description');
                        $rh_image_link = get_sub_field('link');
                    ?>

                        <figure class="rh-col" style="grid-column: <?php echo $rh_image_width; ?>;" data-aos="fade-up">
                            <a href="<?php echo $rh_image_link; ?>">
                                <?php echo wp_get_attachment_image($rh_image, 'full'); ?>
                            </a>
                            <div class="details" data-aos="fade-up">
                                <h3 class="client"><?php echo $rh_image_client; ?></h3>
                                <span class="category"><?php echo $rh_image_category; ?></span>
                                <p class="description"><?php echo $rh_image_description; ?></p>
                            </div>
                        </figure>

                    <?php endwhile; ?>
                <?php endif; ?>

            <?php else : ?>

                <?php if (have_rows('rh_video')) : ?>
                    <?php while (have_rows('rh_video')) : the_row();
                        $rh_video = get_sub_field('video');
                        $rh_video_width = get_sub_field('width');
                        $rh_video_client = get_sub_field('client');
                        $rh_video_category = get_sub_field('category');
                        $rh_video_description = get_sub_field('description');
                        $rh_video_link = get_sub_field('link');
                    ?>
                        <div class="rh-col video" style="grid-column: <?php echo $rh_video_width; ?>;">
                            <video preload playsinline autoplay muted loopstyle="grid-column: <?php echo $rh_video_width; ?>;">
                                <source src=" <?php echo $rh_video; ?>">
                            </video>
                            <div class="details" data-aos="fade-up">
                                <h3 class="client"><?php echo $rh_video_client; ?></h3>
                                <span class="category"><?php echo $rh_video_category; ?></span>
                                <p class="description"><?php echo $rh_video_description; ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            <?php endif ?>

    <?php endwhile;
    endif; ?>

</div>