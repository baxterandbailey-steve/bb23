<?php
$service_section_title = get_sub_field('section_title');
?>
<section class="service contain">
    <h3 class="title"><?php echo $service_section_title; ?></h3>

    <?php if (have_rows('service')) :
        while (have_rows('service')) : the_row();
            $service_type = get_sub_field('type');
            $service_title = get_sub_field('title');
            $service_image = get_sub_field('image');
            $service_description = get_sub_field('description');
            $service_link_url = get_sub_field('link_url');
            $service_link_label = get_sub_field('link_label');
    ?>
            <span><?php echo $service_type; ?></span>
            <h2 class="title"><?php echo $service_title; ?></h2>
            <div class="grid">
                <img src="<?php echo $service_image; ?>" class="image">
                <div class="rich-text">
                    <p class="description"><?php echo $service_description; ?></p>
                    <h4>Subtitle</h4>
                    <ul>
                        <?php if (have_rows('elements')) :
                            while (have_rows('elements')) : the_row();
                                $element = get_sub_field('element');
                        ?>
                                <li><?php echo $element; ?></li>
                        <?php
                            endwhile;
                        endif; ?>
                    </ul>
                    <a href="<?php echo $service_link_url; ?>" class="link"><?php echo $service_link_label; ?></a>
                </div>
            </div>
    <?php
        endwhile;
    endif; ?>
</section>