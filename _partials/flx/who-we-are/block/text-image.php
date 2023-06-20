<?php
$text_image_title = get_sub_field('title');
$text_image_text = get_sub_field('text');
$text_image_image = get_sub_field('image');
$text_image_link = get_sub_field('link_url');
$text_image_link_label = get_sub_field('link_label');
$text_image_layout = get_sub_field('layout');

?>

<div class="text-image grid contain <?php echo $text_image_layout; ?>">
    <div class="inner">
        <div class="text">
            <h2 class="title"><?php echo $text_image_title; ?></h2>
            <?php echo $text_image_text; ?>
            <a href="<?php echo $text_image_link_url; ?>" class="link"><?php echo $text_image_link_label; ?></a>
        </div>
        <img src="<?php echo $text_image_image; ?>" class="image">
    </div>
</div>