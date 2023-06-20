<?php
$image_offset_primary = get_sub_field('primary_image');
$image_offset_secondary = get_sub_field('secondary_image');
?>

<div class="image-offset">
    <div class="inner grid contain">
        <img src="<?php echo $image_offset_primary; ?>" class="primary-image">
        <img src="<?php echo $image_offset_secondary; ?>" class="secondary-image">
    </div>
</div>