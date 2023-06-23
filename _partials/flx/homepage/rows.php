<!-- start flexible-content -->
<?php if (have_rows('work_rows')) : ?>
    <?php while (have_rows('work_rows')) : the_row(); ?>


        <?php if (get_row_layout() == 'single_col') :
            $single_col_image = get_sub_field('image');
            $single_col_width = get_sub_field('width');
            $single_col_client = get_sub_field('client');
            $single_col_category = get_sub_field('category');
            $single_col_description = get_sub_field('description');
        ?>

            <div class="row single-col">
                <figure style=" grid-column: <?php echo $single_col_width ?>" data-aos="fade-up">
                    <img src="<?php echo wp_get_attachment_image($single_col_image, 'full'); ?>">
                    <div class="details" data-aos="fade-up">
                        <h3 class="client"><?php echo $single_col_client; ?></h3>
                        <span class="category"><?php echo $single_col_category; ?></span>
                        <p class="description"><?php echo $single_col_description; ?></p>
                    </div>
                </figure>
            </div>


        <?php elseif (get_row_layout() == 'two_cols') : ?>

            <div class="row two-cols">
                <?php if (have_rows('lh_col')) : ?>
                    <?php while (have_rows('lh_col')) : the_row(); ?>
                        <?php if (get_sub_field('choice') == 'text') : { ?>

                                <!-- +++++++++++++++++++++ text ++++++++++++++++++++++++ -->
                                <?php if (have_rows('lh_text')) : ?>

                                    <?php while (have_rows('lh_text')) : the_row();
                                        $lh_text_width = get_sub_field('width');
                                        $lh_text_client = get_sub_field('client');
                                        $lh_text_category = get_sub_field('category');
                                        $lh_text_quote = get_sub_field('quote');
                                    ?>

                                        <div class="lh-col quote" style="grid-column: <?php echo $lh_text_width; ?>" data-aos="fade-up">
                                            <h3 class="client"><?php echo $lh_text_client; ?></h3>
                                            <span class="category"><?php echo $lh_text_category; ?></span>
                                            <blockquopte><?php echo $lh_text_quote; ?></blockquopte>
                                        </div>

                            <?php endwhile;
                                endif;
                            } ?>


                        <? else : ?>

                            <!-- +++++++++++++++++++++ image ++++++++++++++++++++++++ -->
                            <?php if (have_rows('lh_image')) : ?>
                                <?php while (have_rows('lh_image')) : the_row();
                                    $lh_image = get_sub_field('image');
                                    $lh_image_width = get_sub_field('width');
                                    $lh_image_offset = get_sub_field('offset');
                                    $lh_image_client = get_sub_field('client');
                                    $lh_image_category = get_sub_field('category');
                                    $lh_image_description = get_sub_field('quote'); ?>


                                    <figure class="lh-col" style="grid-column: <?php echo $lh_image_width; ?>" data-aos="fade-up">
                                        <img src="<?php echo wp_get_attachment_image($lh_image, 'full'); ?>" style="margin-top:<?php echo $lh_image_offset; ?>">
                                        <div class="details" data-aos="fade-up">
                                            <h3 class="client"><?php echo $lh_image_client; ?></h3>
                                            <span class="category"><?php echo $lh_image_category; ?></span>
                                            <p class="description"><?php echo $lh_image_description; ?></p>
                                        </div>
                                    </figure>

                            <?php endwhile;
                            endif; ?>

                        <?php endif ?>
                <?php endwhile;
                endif; ?>


                <?php if (have_rows('rh_col')) : ?>
                    <?php while (have_rows('rh_col')) : the_row(); ?>
                        <?php if (get_sub_field('choice') == 'text') : { ?>

                                <!-- +++++++++++++++++++++ text ++++++++++++++++++++++++ -->
                                <?php if (have_rows('rh_text')) : ?>

                                    <?php while (have_rows('rh_text')) : the_row();
                                        $rh_text_width = get_sub_field('width');
                                        $rh_text_client = get_sub_field('client');
                                        $rh_text_category = get_sub_field('category');
                                        $rh_text_quote = get_sub_field('quote');
                                    ?>

                                        <div class="rh-col quote" style="grid-column: <?php echo $rh_text_width; ?>" data-aos="fade-up">
                                            <h3 class="client"><?php echo $rh_text_client; ?></h3>
                                            <span class="category"><?php echo $rh_text_category; ?></span>
                                            <blockquopte><?php echo $rh_text_quote; ?></blockquopte>
                                        </div>

                            <?php endwhile;
                                endif;
                            } ?>



                        <? else : ?>

                            <!-- +++++++++++++++++++++ image ++++++++++++++++++++++++ -->
                            <?php if (have_rows('rh_image')) : ?>
                                <?php while (have_rows('rh_image')) : the_row();
                                    $rh_image = get_sub_field('image');
                                    $rh_image_width = get_sub_field('width');
                                    $rh_image_offset = get_sub_field('offset');
                                    $rh_image_client = get_sub_field('client');
                                    $rh_image_category = get_sub_field('category');
                                    $rh_image_description = get_sub_field('quote'); ?>


                                    <figure class="rh-col" style="grid-column: <?php echo $rh_image_width; ?>" data-aos="fade-up">
                                        <img src="<?php echo wp_get_attachment_image($rh_image, 'full'); ?>" style="margin-top:<?php echo $rh_image_offset; ?>">
                                        <div class="details" data-aos="fade-up">
                                            <h3 class="client"><?php echo $rh_image_client; ?></h3>
                                            <span class="category"><?php echo $rh_image_category; ?></span>
                                            <p class="description"><?php echo $rh_image_description; ?></p>
                                        </div>


                                    </figure>

                            <?php endwhile;
                            endif; ?>

                        <?php endif ?>
                <?php endwhile;
                endif; ?>

            </div>

        <?php elseif (get_row_layout() == 'three_cols') :
            $col_1_image = get_sub_field('col_1_image');
            $col_1_client = get_sub_field('col_1_client');
            $col_1_category = get_sub_field('col_1_category');
            $col_1_description = get_sub_field('col_1_description');
            $col_2_image = get_sub_field('col_2_image');
            $col_3_image = get_sub_field('col_3_image');
        ?>

            <div class="row three-cols">
                <figure class="col-1" data-aos="fade-up">
                    <h3 class="client"><?php echo $col_1_client; ?></h3>
                    <div class="details">
                        <span class="category"><?php echo $col_1_category; ?></span>
                        <p class="description"><?php echo $col_1_description; ?></p>
                    </div>
                    <img src="<?php echo wp_get_attachment_image($col_1_image, 'full'); ?>" class="details thumb" data-aos="fade-up">
                </figure>
                <figure class="col-2" data-aos="fade-up">
                    <img src="<?php echo wp_get_attachment_image($col_2_image, 'full'); ?>" class="details thumb">
                </figure>
                <figure class="col-3" data-aos="fade-up">
                    <img src="<?php echo wp_get_attachment_image($col_3_image, 'full'); ?>">
                </figure>
            </div>

        <?php endif; ?>

        <!-- close flexible-content -->
    <?php endwhile; ?>
<?php endif; ?>