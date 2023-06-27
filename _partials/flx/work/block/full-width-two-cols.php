<div class="full-width__two-cols">
    <?php if (have_rows('lh_col')) : ?>
        <? while (have_rows('lh_col')) : the_row();
            $lh_video = get_sub_field('video'); ?>

            <video preload playsinline autoplay muted loop>
                <source src="<?php echo $lh_video ?>" type="video/mp4">
            </video>

        <? endwhile; ?>
    <? endif; ?>

    <?php if (have_rows('rh_col')) : ?>
        <? while (have_rows('rh_col')) : the_row();
            $rh_video = get_sub_field('video'); ?>

            <video preload playsinline autoplay muted loop>
                <source src="<?php echo $rh_video ?>" type="video/mp4">
            </video>

        <? endwhile; ?>
    <? endif; ?>
</div>