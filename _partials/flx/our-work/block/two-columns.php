<?php

/**
 * Test: two images block
 *
 * @package BBWP
 */

?>

<div class="two-columns">

    <?php if (get_sub_field('choice') == 'left') : ?>

        <?php if (have_rows('two_thirds_left')) : ?>
            <?php while (have_rows('two_thirds_left')) : the_row(); ?>

                <div class="lh-col grid">

                    <!-- ================ column one ================= -->

                    <?php
                    // check for and loop through column one 
                    if (have_rows('column_one')) : ?>
                        <?php while (have_rows('column_one')) : the_row(); ?>


                            <?php
                            // get data, set variables 
                            $col_one_image = get_sub_field('image');
                            $col_one_video = get_sub_field('video');
                            $col_one_title = get_sub_field('title');
                            $col_one_meta = get_sub_field('meta');
                            $col_one_link = get_sub_field('link');
                            ?>

                            <?php
                            // test choice value, if image display image
                            if (get_sub_field('choice') == 'image') : ?>

                                <article data-aos="fade-in">
                                    <figure class="image">
                                        <?php echo wp_get_attachment_image($col_one_image, 'full'); ?>
                                    </figure>
                                    <h3><a href="<?php echo $col_one_link; ?>" class="link"><?php echo $col_one_title; ?></a></h3>
                                    <span class="meta"><?php echo $col_one_meta; ?></span>
                                </article>

                            <?php // if not image, display video 
                            else : ?>

                                <video preload playsinline autoplay muted loop>
                                    <source src="<?php echo $col_one_video; ?>">
                                </video>

                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <!-- ================ column two ================= -->

                    <?php
                    // check for and loop through column two
                    if (have_rows('column_two')) : ?>
                        <?php while (have_rows('column_two')) : the_row(); ?>

                            <?php
                            // get data, set variables 
                            $col_two_image = get_sub_field('image');
                            $col_two_video = get_sub_field('video');
                            $col_two_title = get_sub_field('title');
                            $col_two_meta = get_sub_field('meta');
                            $col_two_link = get_sub_field('link');
                            ?>

                            <?php
                            // test choice value, if image display image
                            if (get_sub_field('choice') == 'image') : ?>

                                <article data-aos="fade-in">
                                    <figure>
                                        <?php echo wp_get_attachment_image($col_two_image, 'full'); ?>
                                    </figure>
                                    <h3><a href="<?php echo $col_two_link; ?>" class="link"><?php echo $col_two_title; ?></a></h3>
                                    <span class="meta"><?php echo $col_two_meta; ?></span>
                                </article>

                            <?php // if not image, display video 
                            else : ?>

                                <video preload playsinline autoplay muted loop>
                                    <source src="<?php echo $col_two_video; ?>">
                                </video>

                            <?php endif; ?>

                            <!-- <div class="details">
                                <h3>Lorem Ipsum Dolar</h3>
                                <span class="meta">Category</span>
                            </div> -->

                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>

            <?php endwhile; ?>
        <?php endif; ?>

        <!-- ++++++++++++++++++++++++ right hand column +++++++++++++++++++++++++++++++++++++++++++++++++ -->

    <?php else : ?>

        <?php if (have_rows('two_thirds_right')) : ?>
            <?php while (have_rows('two_thirds_right')) : the_row(); ?>

                <!-- ================ column one ================= -->

                <div class="rh-col grid">

                    <?php
                    // check for and loop through column one 
                    if (have_rows('column_one')) : ?>
                        <?php while (have_rows('column_one')) : the_row(); ?>


                            <?php
                            // get data, set variables 
                            $col_one_image = get_sub_field('image');
                            $col_one_video = get_sub_field('video');
                            $col_one_title = get_sub_field('title');
                            $col_one_meta = get_sub_field('meta');
                            $col_one_link = get_sub_field('link');
                            ?>

                            <?php
                            // test choice value, if image display image
                            if (get_sub_field('choice') == 'image') : ?>

                                <article data-aos="fade-in">
                                    <figure class="image">
                                        <?php echo wp_get_attachment_image($col_one_image, 'full'); ?>
                                    </figure>
                                    <h3><a href="<?php echo $col_one_link; ?>" class="link"><?php echo $col_one_title; ?></a></h3>
                                    <span class="meta"><?php echo $col_one_meta; ?></span>
                                </article>
                            <?php // if not image, display video 
                            else : ?>

                                <video preload playsinline autoplay muted loop>
                                    <source src="<?php echo $col_one_video; ?>">
                                </video>

                            <?php endif; ?>

                            <!-- <div class="details">
                                <h3>Lorem Ipsum Dolar</h3>
                                <span class="meta">Category</span>
                            </div> -->


                        <?php endwhile; ?>
                    <?php endif; ?>

                    <!-- ================ column two ================= -->

                    <?php
                    // check for and loop through column two
                    if (have_rows('col_two')) : ?>
                        <?php while (have_rows('col_two')) : the_row(); ?>


                            <?php
                            // get data, set variables 
                            $col_two_image = get_sub_field('image');
                            $col_two_video = get_sub_field('video');
                            $col_two_title = get_sub_field('title');
                            $col_two_meta = get_sub_field('meta');
                            $col_two_link = get_sub_field('link');
                            ?>

                            <?php
                            // test choice value, if image display image
                            if (get_sub_field('choice') == 'image') : ?>

                                <article data-aos="fade-in">
                                    <figure class="image">
                                        <?php echo wp_get_attachment_image($col_two_image, 'full'); ?>
                                    </figure>
                                    <h3><a href="<?php echo $col_two_link; ?>" class="link"><?php echo $col_two_title; ?></a></h3>
                                    <span class="meta"><?php echo $col_two_meta; ?></span>
                                </article>

                            <?php // if not image, display video 
                            else : ?>

                                <video preload playsinline autoplay muted loop>
                                    <source src="<?php echo $col_two_video; ?>">
                                </video>

                            <?php endif; ?>
                            <!-- 
                            <div class="details">
                                <h3>Lorem Ipsum Dolar</h3>
                                <span class="meta">Category</span>
                            </div> -->

                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>


            <?php endwhile; ?>
        <?php endif; ?>
    <?php endif; ?>
</div>