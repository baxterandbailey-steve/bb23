<?php
$name = get_sub_field('name');
$role = get_sub_field('job_title');
$image = get_sub_field('image');
$bio = get_sub_field('bio');
?>
<div class="team-member">
    <figure data-aos="fade-in">
        <img src="<?php echo $image; ?>" class="image">
    </figure>
    <div class="details">
        <h3 class="name"><?php echo $name; ?></hph3>
            <span class="title"><?php echo $role; ?></span>
            <button class="bio-reveal" aria-expanded="false"></button>
    </div>
    <p class="bio" hidden>
        <?php echo $bio; ?>
    </p>
</div>