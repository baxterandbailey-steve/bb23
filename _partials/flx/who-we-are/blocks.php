<?php if (have_rows('flexible_content')) : ?>
    <?php while (have_rows('flexible_content')) : the_row(); ?>


        <?php if (get_row_layout() == 'clients') : ?>
            <section class="clients">
                <div class="contain">
                    <div class="grid">
                        <?php if (have_rows('introduction')) :
                            while (have_rows('introduction')) : the_row(); ?>
                                <h2><?php the_sub_field('title'); ?></h2>
                                <p><?php the_sub_field('text'); ?></p>
                        <?php endwhile;
                        endif; ?>
                    </div>

                    <div class="logos grid">
                        <?php if (have_rows('logos')) :
                            while (have_rows('logos')) : the_row(); ?>
                                <img src="<?php the_sub_field('logo'); ?>">
                        <?php endwhile;
                        endif; ?>
                    </div>
                </div>
            </section>

        <?php elseif (get_row_layout() == 'text_image') : ?>

            <section class="our-work grid contain">
                <div class="lh-col">
                    <h2 class="title"><?php the_sub_field('title') ?></h2>
                    <p class="text"><?php the_sub_field('text') ?></p>
                    <a href="#" class="link"><?php the_sub_field('link_label'); ?></a>
                </div>
                <div class="rh-col">
                    <img src="<?php the_sub_field('image') ?>" class="image"></p>
                </div>
            </section>


        <?php elseif (get_row_layout() == 'partners') : ?>
            <section class="partners">
                <div class="contain">
                    <div class="introduction grid">
                        <?php if (have_rows('introduction')) :
                            while (have_rows('introduction')) : the_row(); ?>
                                <h2><?php the_sub_field('title'); ?></h2>
                                <p><?php the_sub_field('text'); ?></p>
                        <?php endwhile;
                        endif; ?>
                    </div>

                    <div class="logos">
                        <?php if (have_rows('logos')) :
                            while (have_rows('logos')) : the_row(); ?>
                                <img src="<?php the_sub_field('logo'); ?>">
                        <?php endwhile;
                        endif; ?>
                    </div>
                </div>
            </section>

        <?php elseif (get_row_layout() == 'image_cta') : ?>

            <section class="image-cta contain">
                <div class="lh-col">
                    <img src="<?php the_sub_field('image') ?>" class="image">
                </div>
                <div class="rh-col">
                    <h2 class="title"><?php the_sub_field('title') ?></h2>
                    <p class="text"><strong><?php the_sub_field('text') ?></strong></p>
                    <a class="link"><?php the_sub_field('link_label') ?></a>
                </div>
            </section>


        <?php endif; ?>
<?php endwhile;
endif; ?>