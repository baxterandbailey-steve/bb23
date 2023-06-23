<div class="row two-cols">
    <?php if (have_rows('lh_col')) :
        while (have_rows('lh_col')) : the_row();
    ?>

            <?php if (get_sub_field('choice') == 'text') : ?>

                <?php if (have_rows('lh_text')) : ?>
                    <?php while (have_rows('lh_text')) : the_row();

                        $lh_text_width = get_sub_field('width');
                        $lh_text_client = get_sub_field('client');
                        $lh_text_category = get_sub_field('category');
                        $lh_text_quote = get_sub_field('quote'); ?>

                        <div class="lh-col quote" style="grid-column: <?php echo $lh_text_width; ?>" data-aos="fade-up">
                            <h3 class="client"><?php echo $lh_text_client; ?></h3>
                            <span class="category"><?php echo $lh_text_category; ?></span>
                            <blockquote><?php echo $lh_text_quote; ?></blockquote>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>

            <?php else : ?>

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
                            <h3 class="client"><?php echo $rh_text_client; ?></h3>
                            <span class="category"><?php echo $rh_text_category; ?></span>
                            <blockquopte><?php echo $rh_text_quote; ?></blockquopte>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>


            <?php else : ?>

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

                    <?php endwhile; ?>
                <?php endif; ?>

            <?php endif ?>

    <?php endwhile;
    endif; ?>

</div>