<section class="contain" style="color: white;">
    <?php if (have_rows('work_rows')) : ?>
        <?php while (have_rows('work_rows')) : the_row(); ?>
            <div style="display: flex; justify-content: space-between; margin-bottom: 5rem;">
                <!-- LH Col -->
                <?php if (have_rows('lh_col')) : ?>
                    <?php while (have_rows('lh_col')) : the_row(); ?>
                        <!-- test for text or image -->

                        <?php if (get_sub_field('choice') == 'text') : { ?>
                                <div>
                                    <?php if (have_rows('lh_text')) : ?>
                                        <?php while (have_rows('lh_text')) : the_row(); ?>
                                            <h3><?php the_sub_field('client'); ?></h3>
                                            <p><?php the_sub_field('category'); ?></p>
                                            <blockquopte><?php the_sub_field('quote'); ?></blockquopte>
                                    <?php endwhile;
                                    endif; ?>
                                </div>
                            <?php } ?>

                        <? else : ?>

                            <div>
                                <?php if (have_rows('lh_image')) : ?>
                                    <?php while (have_rows('lh_image')) : the_row(); ?>
                                        <img src="<?php the_sub_field('image'); ?>" style="margin-top:<?php the_sub_field('offset'); ?>">
                                        <h3><?php the_sub_field('client'); ?></h3>
                                        <p><?php the_sub_field('category'); ?></p>
                                        <blockquopte><?php the_sub_field('description'); ?></blockquopte>
                                <?php endwhile;
                                endif; ?>
                            </div>

                        <?php endif ?>
                        <!-- close LH Col -->
                <?php endwhile;
                endif; ?>

                <!-- RH Col -->
                <?php if (have_rows('rh_col')) : ?>
                    <?php while (have_rows('rh_col')) : the_row(); ?>
                        <!-- test for text or image -->
                        <?php if (get_sub_field('choice') == 'text') : { ?>

                                <div>
                                    <?php if (have_rows('rh_text')) : ?>
                                        <?php while (have_rows('rh_text')) : the_row(); ?>
                                            <h3><?php the_sub_field('client'); ?></h3>
                                            <p><?php the_sub_field('category'); ?></p>
                                            <blockquopte><?php the_sub_field('quote'); ?></blockquopte>
                                    <?php endwhile;
                                    endif; ?>
                                </div>
                            <?php } ?>

                        <? else : ?>

                            <div>
                                <?php if (have_rows('rh_image')) : ?>
                                    <?php while (have_rows('rh_image')) : the_row(); ?>
                                        <img src="<?php the_sub_field('image'); ?>" style="margin-top:<?php the_sub_field('offset'); ?>">
                                        <h3><?php the_sub_field('client'); ?></h3>
                                        <p><?php the_sub_field('category'); ?></p>
                                        <blockquopte><?php the_sub_field('description'); ?></blockquopte>
                                <?php endwhile;
                                endif; ?>
                            </div>
                        <?php endif ?>

                        <!-- close RH Col -->
                <?php endwhile;
                endif; ?>
            </div>

        <?php endwhile; ?><!-- close flexible content while -->
    <?php endif; ?><!-- close flexible content if -->
</section>