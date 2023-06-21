<?php
$service_section_title = get_sub_field('section_title');
?>

<div class="services contain">
    <h2 class="title"><?php echo $service_section_title; ?></h2>

    <?php if (have_rows('service')) :
        while (have_rows('service')) : the_row();
            $service_type = get_sub_field('type');
            $service_title = get_sub_field('title');
            $service_image = get_sub_field('image');
            $service_description = get_sub_field('description');
            $service_link_url = get_sub_field('link_url');
            $service_link_label = get_sub_field('link_label');
    ?>
            <section class="service">
                <span class="meta"><?php echo $service_type; ?></span>
                <div class="container">
                    <h3 class="title"><?php echo $service_title; ?></h3>
                    <img src="<?php echo $service_image; ?>" class="image">
                    <div class="text">
                        <p class="description"><?php echo $service_description; ?></p>
                        <h4 class="subtitle">Subtitle</h4>
                        <ul>
                            <?php if (have_rows('elements')) :
                                while (have_rows('elements')) : the_row();
                                    $element = get_sub_field('element'); ?>
                                    <li><?php echo $element; ?></li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                        <a href="<?php echo $service_link_url; ?>" class="link"><?php echo $service_link_label; ?></a>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
</div>