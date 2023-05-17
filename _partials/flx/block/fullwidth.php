<?php
$image = get_sub_field('image');
$project_title = get_sub_field('project_title');
?>

<?php if ($image) : ?>
    <div class="full-width">
        <?php echo wp_get_attachment_image($image, 'full'); ?>
        <h3><?php echo $project_title; ?></h3>
    </div>
<?php endif; ?>