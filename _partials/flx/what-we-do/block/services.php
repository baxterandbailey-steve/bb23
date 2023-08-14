<?php

/**
 * What we do: services block
 *
 * @package BBWP
 */

$service_section_title = get_sub_field('section_title');

?>

<section class="services contain">
    <h2 class="section-title"><?php echo $service_section_title; ?></h2>

    <?php if (have_rows('service')) :
        while (have_rows('service')) : the_row();
            $service_type = get_sub_field('type');
            $service_title = get_sub_field('title');
            $service_image = get_sub_field('image');
            $service_description = get_sub_field('description');
            $service_link_url = get_sub_field('link_url');
            $service_link_label = get_sub_field('link_label'); ?>

            <div class="service">
                <span class="meta"><?php echo $service_type; ?></span>

                <div class="container__grid">
                    <h3 class="title"><?php echo $service_title; ?></h3>
                    <figure class="image">
                        <?php echo wp_get_attachment_image($service_image, 'full'); ?>
                    </figure>
                    <div class="rich-text">
                        <p class="description"><?php echo $service_description; ?></p>

                        <?php if (have_rows('elements')) : ?>
                            <h4 class="subtitle">Subtitle</h4>
                            <ul class="type-of-service">
                                <? while (have_rows('elements')) : the_row();
                                    $element = get_sub_field('element'); ?>
                                    <li><?php echo $element; ?></li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>

                        <a href="<?php echo $service_link_url; ?>" class="link"><?php echo $service_link_label; ?></a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>