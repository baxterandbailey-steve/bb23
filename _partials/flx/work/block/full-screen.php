<?php
$video = get_sub_field('video');
$image = get_sub_field('image');

?>
<div class="full-screen-media">
    <?php if (get_sub_field('choice') == 'video') : ?>

        <video preload playsinline autoplay muted loop>
            <source src="<?php echo $video; ?>">
        </video>

    <?php else : ?>
        <img src="<?php echo $image; ?>" class="image">
    <?php endif; ?>
</div>