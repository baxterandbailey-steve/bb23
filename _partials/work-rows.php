<!-- start flexible-content -->
<?php if (have_rows('work_rows')) : ?>
    <?php while (have_rows('work_rows')) : the_row(); ?>
        <div style="display: flex; justify-content: space-between; margin-bottom: 5rem;">

            <!--======= LH Col ================================================================================-->
            <?php if (have_rows('lh_col')) : ?>
                <?php while (have_rows('lh_col')) : the_row(); ?>

                    <!-- +++++++++++++++++++++ text ++++++++++++++++++++++++ -->
                    <?php if (get_sub_field('choice') == 'text') : { ?>


                            <?php if (have_rows('lh_text')) : ?>
                                <?php while (have_rows('lh_text')) : the_row(); ?>

                                    <div class="quote lh-col" data-aos="fade-up">
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
                            <?php while (have_rows('lh_image')) : the_row(); ?>

                                <figure class="lh-col" data-aos="fade-up">
                                    <img src="<?php the_sub_field('image'); ?>" style="margin-top:<?php the_sub_field('offset'); ?>">
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

                                    <div class="quote rh-col" data-aos="fade-up">
                                        <h3 class="client"><?php the_sub_field('client'); ?></h3>
                                        <span class="category"><?php the_sub_field('category'); ?></span>
                                        <blockquopte><?php the_sub_field('quote'); ?></blockquopte>
                                    </div>

                            <?php endwhile;
                            endif; ?>

                        <?php } ?>

                    <? else : ?>

                        <!-- +++++++++++++++++++++ image ++++++++++++++++++++++++ -->
                        <div class="row">
                            <?php if (have_rows('rh_image')) : ?>
                                <?php while (have_rows('rh_image')) : the_row(); ?>

                                    <figure class="rh-col" data-aos="fade-up">
                                        <img src="<?php the_sub_field('image'); ?>" style="margin-top:<?php the_sub_field('offset'); ?>">
                                        <div class="details" data-aos="fade-up">
                                            <h3 class="client"><?php the_sub_field('client'); ?></h3>
                                            <span class="category"><?php the_sub_field('category'); ?></span>
                                            <p class="description"><?php the_sub_field('description'); ?></p>
                                        </div>
                                    </figure>

                            <?php endwhile;
                            endif; ?>
                        </div>
                    <?php endif ?>

                    <!-- close RH group loop -->
            <?php endwhile;
            endif; ?>
        </div>

        <!-- close flexible-content -->
    <?php endwhile; ?>
<?php endif; ?>