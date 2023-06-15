<!-- start flexible-content -->
<?php if (have_rows('work_rows')) : ?>
    <?php while (have_rows('work_rows')) : the_row(); ?>

        <?php if (get_row_layout() == 'two_cols') : ?>
            <div class="row">

                <!--======= LH Col ================================================================================-->
                <?php if (have_rows('lh_col')) : ?>
                    <?php while (have_rows('lh_col')) : the_row(); ?>

                        <!-- +++++++++++++++++++++ text ++++++++++++++++++++++++ -->
                        <?php if (get_sub_field('choice') == 'text') : { ?>
                                <?php if (have_rows('lh_text')) : ?>
                                    <?php while (have_rows('lh_text')) : the_row(); ?>

                                        <div class="quote lh-col" style=" grid-column: <?php the_sub_field('width') ?>" data-aos="fade-up">
                                            <h3 class="client"><?php the_sub_field('client'); ?></h3>
                                            <span class="category"><?php the_sub_field('category'); ?></span>
                                            <blockquopte><?php the_sub_field('quote'); ?></blockquopte>
                                        </div>

                                <?php endwhile;
                                endif; ?>

                            <?php } ?>

                        <? else : ?>

                            <!-- +++++++++++++++++++++ image ++++++++++++++++++++++++ -->

                            <?php if (have_rows('lh_image')) : ?>
                                <?php while (have_rows('lh_image')) : the_row();
                                    $image = get_sub_field('image'); ?>

                                    <figure class="lh-col" style=" grid-column: <?php the_sub_field('width') ?>" data-aos="fade-up">
                                        <img src="<?php echo $image; ?>" style="margin-top:<?php the_sub_field('offset'); ?>">
                                        <div class="details" data-aos="fade-up">
                                            <h3 class="client"><?php the_sub_field('client'); ?></h3>
                                            <span class="category"><?php the_sub_field('category'); ?></span>
                                            <p class="description"><?php the_sub_field('description'); ?></p>
                                        </div>
                                    </figure>

                            <?php endwhile;
                            endif; ?>

                        <?php endif ?>

                        <!-- close LH group loop-->
                <?php endwhile;
                endif; ?>

                <!--======= RH Col ================================================================================-->
                <?php if (have_rows('rh_col')) : ?>
                    <?php while (have_rows('rh_col')) : the_row(); ?>


                        <!-- +++++++++++++++++++++ text ++++++++++++++++++++++++ -->
                        <?php if (get_sub_field('choice') == 'text') : { ?>

                                <?php if (have_rows('rh_text')) : ?>
                                    <?php while (have_rows('rh_text')) : the_row(); ?>

                                        <div class="quote rh-col" style=" grid-column: <?php the_sub_field('width') ?>" data-aos="fade-up">
                                            <h3 class="client"><?php the_sub_field('client'); ?></h3>
                                            <span class="category"><?php the_sub_field('category'); ?></span>
                                            <blockquopte><?php the_sub_field('quote'); ?></blockquopte>
                                        </div>

                                <?php endwhile;
                                endif; ?>

                            <?php } ?>

                        <? else : ?>

                            <!-- +++++++++++++++++++++ image ++++++++++++++++++++++++ -->

                            <?php if (have_rows('rh_image')) : ?>
                                <?php while (have_rows('rh_image')) : the_row();
                                    $image = get_sub_field('image'); ?>

                                    <figure class="rh-col" style=" grid-column: <?php the_sub_field('width') ?>" data-aos="fade-up">
                                        <img src="<?php echo $image; ?>" style="margin-top:<?php the_sub_field('offset'); ?>">
                                        <div class="details" data-aos="fade-up">
                                            <h3 class="client"><?php the_sub_field('client'); ?></h3>
                                            <span class="category"><?php the_sub_field('category'); ?></span>
                                            <p class="description"><?php the_sub_field('description'); ?></p>
                                        </div>
                                    </figure>

                            <?php endwhile;
                            endif; ?>

                        <?php endif ?>


                        <!-- close RH group loop -->
                <?php endwhile;
                endif; ?>

            </div>

        <?php elseif (get_row_layout() == 'single_col') :
            $single_col_image = get_sub_field('image'); ?>
            <div class="row">
                <figure style=" grid-column: <?php the_sub_field('width') ?>" data-aos="fade-up">
                    <img src="<?php echo $single_col_image; ?>" style="margin-top:<?php the_sub_field('offset'); ?>">
                    <div class="details" data-aos="fade-up">
                        <h3 class="client"><?php the_sub_field('client'); ?></h3>
                        <span class="category"><?php the_sub_field('category'); ?></span>
                        <p class="description"><?php the_sub_field('description'); ?></p>
                    </div>
                </figure>
            </div>

        <?php elseif (get_row_layout() == 'three_cols') :
            $col_1_image = get_sub_field('col_1_image');
            $col_2_image = get_sub_field('col_2_image');
            $col_3_image = get_sub_field('col_3_image');
        ?>

            <div class="row row-one">
                <figure class="col-1" data-aos="fade-up">
                    <h3 class="client"><?php the_sub_field('col_1_client'); ?></h3>
                    <div class="details">
                        <span class="category"><?php the_sub_field('col_1_category'); ?></span>
                        <p class="description"><?php the_sub_field('col_1_description'); ?></p>
                    </div>
                    <img src="<?php echo $col_1_image; ?>" class="details thumb" data-aos="fade-up">
                </figure>
                <figure class="col-2" data-aos="fade-up">
                    <img src="<?php echo $col_2_image; ?>" class="details thumb">
                </figure>
                <figure class="col-3" data-aos="fade-up">
                    <img src="<?php echo $col_3_image; ?>">
                </figure>
            </div>

        <?php endif; ?>


        <!-- </div> -->

        <!-- close flexible-content -->
    <?php endwhile; ?>
<?php endif; ?>