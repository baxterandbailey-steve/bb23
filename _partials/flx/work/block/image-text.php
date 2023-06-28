<?php
$image_text_image = get_sub_field('image');
$image_text_text = get_sub_field('text');
?>

<div class="image-text grid">
    <img src="<?php echo $image_text_image; ?>" class="image">
    <div class="text">
        <?php echo $image_text_text; ?>
    </div>
</div>