<?php

/**
 * Our Work: RH col from two-columns block
 * Notes: This is the two-thirds right block, ie when the first column image / video occupies 8 of 12 CSS grid cols
 *
 * @package BBWP
 */

?>

<?php if (have_rows('two_thirds_right')) : ?>
    <?php while (have_rows('two_thirds_right')) : the_row(); ?>

        <div class="rh-col grid">
            <?php if (have_rows('column_one')) : ?>
                <?php while (have_rows('column_one')) : the_row();
                    $col_one_image = get_sub_field('image');
                    $col_one_video = get_sub_field('video');
                    $col_one_placeholder = get_sub_field('placeholder_image');
                    $col_one_title = get_sub_field('title');
                    $col_one_meta = get_sub_field('meta');
                    $col_one_link = get_sub_field('link'); ?>

                    <?php if (get_sub_field('choice') == 'image') : ?>

                        <article>
                            <figure class="image">
                                <?php echo wp_get_attachment_image($col_one_image, 'full'); ?>
                            </figure>
                            <?php if (get_sub_field('title')) : ?>
                                <h3><a href="<?php echo $col_one_link; ?>" class="link"><?php echo $col_one_title; ?></a></h3>
                            <?php endif; ?>
                            <?php if (get_sub_field('meta')) : ?>
                                <span class="meta"><?php echo $col_one_meta; ?></span>
                            <?php endif; ?>
                        </article>

                    <?php else : ?>

                        <video preload playsinline autoplay muted loop poster="<?php echo $col_one_placeholder_image; ?>">
                            <source src="<?php echo $col_one_video; ?>">
                        </video>

                    <?php endif; ?>

                <?php endwhile; ?>
            <?php endif; ?>

            <?php if (have_rows('col_two')) : ?>
                <?php while (have_rows('col_two')) : the_row();
                    $col_two_image = get_sub_field('image');
                    $col_two_video = get_sub_field('video');
                    $col_two_placeholder = get_sub_field('placeholder_image');
                    $col_two_title = get_sub_field('title');
                    $col_two_meta = get_sub_field('meta');
                    $col_two_link = get_sub_field('link'); ?>

                    <?php if (get_sub_field('choice') == 'image') : ?>

                        <article>
                            <figure class="image">
                                <?php echo wp_get_attachment_image($col_two_image, 'full'); ?>
                            </figure>
                            <?php if (get_sub_field('title')) : ?>
                                <h3><a href="<?php echo $col_two_link; ?>" class="link"><?php echo $col_two_title; ?></a></h3>
                            <?php endif; ?>
                            <?php if (get_sub_field('meta')) : ?>
                                <span class="meta"><?php echo $col_two_meta; ?></span>
                            <?php endif; ?>
                        </article>

                    <?php else : ?>

                        <video preload playsinline autoplay muted poster="<?php echo $col_two_placeholder_image; ?>">>
                            <source src="<?php echo $col_two_video; ?>">
                        </video>

                    <?php endif; ?>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>

    <?php endwhile; ?>
<?php endif; ?>