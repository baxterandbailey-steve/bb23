<?php get_header();
$terms = get_terms(array(
    'taxonomy'   => 'work_taxonomy',
    'hide_empty' => false,
));

// text
$excerpt = get_field('excerpt');
$statement = get_field('work_statement');
$sector = get_field('sector');
$service = get_field('service');

// images
$primary_image = get_field('primary_image');
$secondary_image = get_field('secondary_image');
?>

<main class="case-study">
    <section class="page-top contain">
        <span class="meta"><?php echo $service; ?></span>
        <h2 class="title"><?php the_title(); ?></h2>
        <p class="excerpt"><?php echo $excerpt; ?></p>
    </section>

    <img src="<?php echo $primary_image; ?>" class="primary-image contain">

    <div class="primary-content contain">
        <div class="lh-col">
            <p class="statement"><?php echo $statement; ?></p>

            <div class="details">
                <div class="sector">
                    <h3 class="title">Sector</h3>
                    <p class="type"><?php echo $sector; ?></p>
                </div>

                <div class="what-we-did">
                    <!-- strategy repeater -->
                    <div class="strategy">
                        <h3 class="title">Strategy</h3>
                        <?php
                        if (have_rows('strategy')) :
                            while (have_rows('strategy')) : the_row(); ?>
                                <p class="item"><?php the_sub_field('strategy_item'); ?></p>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </div>

                    <!-- design repeater -->
                    <div class="design">
                        <h3 class="title">Design</h3>
                        <?php
                        if (have_rows('design')) :
                            while (have_rows('design')) : the_row(); ?>
                                <p class="item"><?php the_sub_field('design_item'); ?></p>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </div>

                    <!-- digital repeater-->
                    <div class="digital">
                        <h3 class="title">Digital</h3>
                        <?php
                        if (have_rows('digital')) :
                            while (have_rows('digital')) : the_row(); ?>
                                <p class="item"><?php the_sub_field('digital_item'); ?></p>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>

            </div>
        </div>

        <div class="rh-col">
            <img src="<?php echo $secondary_image; ?>">
        </div>
    </div>

    <!-- Flexible content -->
    <div class="flexible-content">


        <?php if (have_rows('flexible_content')) : ?>
            <?php while (have_rows('flexible_content')) : the_row(); ?>

                <?php if (get_row_layout() == 'images') : ?>
                    <?php if (get_sub_field('layout') == 'half') : { ?>
                            <div class="single grid">
                                <img src="<?php the_sub_field('single'); ?>" class="<?php the_sub_field('layout'); ?>">
                            </div>
                        <?php } ?>

                    <? elseif (get_sub_field('layout') == 'double') : ?>
                        <?php if (have_rows('double')) : ?>
                            <?php while (have_rows('double')) : the_row(); ?>

                                <div class="double grid">
                                    <img src="<?php the_sub_field('lh_image'); ?>" class="lh-image">
                                    <img src="<?php the_sub_field('rh_image'); ?>" class="rh-image">
                                </div>

                        <?php endwhile;
                        endif; ?>

                        <? elseif (get_sub_field('layout') == 'full-width') : { ?>
                            <img src="<?php the_sub_field('full_width'); ?>" class="<?php the_sub_field('layout'); ?>">
                        <?php } ?>

                    <? else : ?>
                        <img src="<?php the_sub_field('full_bleed'); ?>" class="<?php the_sub_field('layout'); ?>">
                        <?php ?>
                    <?php endif ?>

                <?php elseif (get_row_layout() == 'text') : ?>
                    <section class="text-row grid">
                        <div class="lh-col">
                            <h2><?php the_sub_field('title') ?></h2>
                        </div>
                        <div class="rh-col">
                            <?php the_sub_field('text') ?>
                        </div>
                    </section>

                <?php elseif (get_row_layout() == 'image_text') : ?>

                    <div class="image-text grid">
                        <img src="<?php the_sub_field('image') ?>" class="image">
                        <div class="text">
                            <?php the_sub_field('text') ?>
                        </div>
                    </div>

                <?php elseif (get_row_layout() == 'testimonial') : ?>

                    <div class="testimonial grid">
                        <div class="author-meta">
                            <span class="author"><?php the_sub_field('author') ?></span>
                            <span class="role"><?php the_sub_field('role') ?></span>
                            <span class="organisation"><?php the_sub_field('organisation') ?></span>
                        </div>

                        <p class="text"><?php the_sub_field('testimonial') ?></p>
                    </div>

                <?php elseif (get_row_layout() == 'half_width') : ?>
                    <?php if (get_sub_field('choice') == 'video') : ?>
                        <video controls autoplay>
                            <source src="<?php the_sub_field('video') ?>">
                        </video>
                    <?php else : ?>
                        <img src="<?php the_sub_field('image'); ?>">
                    <?php endif; ?>


                <?php elseif (get_row_layout() == 'full_width_two_cols') : ?>
                    <?php if (have_rows('lh_col')) :
                        while (have_rows('lh_col')) : the_row(); ?>

                            <?php if (get_sub_field('choice') == 'video') : ?>
                                <video controls autoplay>
                                    <source src="<?php the_sub_field('video') ?>">
                                </video>
                            <?php else : ?>
                                <img src="<?php the_sub_field('image'); ?>">
                            <?php endif; ?>

                    <?php endwhile;
                    endif;
                    ?>
                    <?php if (have_rows('rh_col')) :
                        while (have_rows('rh_col')) : the_row(); ?>

                            <?php if (get_sub_field('choice') == 'video') : ?>
                                <video controls autoplay>
                                    <source src="<?php the_sub_field('video') ?>">
                                </video>
                            <?php else : ?>
                                <img src="<?php the_sub_field('image'); ?>">
                            <?php endif; ?>

                    <?php endwhile;
                    endif;
                    ?>

                <?php elseif (get_row_layout() == 'full_width') : ?>
                    <video controls autoplay>
                        <source src="<?php the_sub_field('video') ?>">
                    </video>

                <?php elseif (get_row_layout() == 'full_screen') : ?>
                    <video controls autoplay>
                        <source src="<?php the_sub_field('video') ?>">
                    </video>




                <?php endif; ?>
        <?php endwhile; // close flex while
        endif;  // close flex if 
        ?>


    </div><!--close flexible-content -->


</main>
<?php get_footer(); ?>