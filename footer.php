	<?php

	/**
	 * Site footer
	 *
	 * @package BBWP
	 */


	$heading_line_one = get_field('opt_footer_heading_line_one', 'options');
	$heading_line_two = get_field('opt_footer_heading_line_two', 'options');
	$statement = get_field('opt_footer_statement', 'options');

	$address = get_field('opt_footer_address', 'options');
	$telephone_number = get_field('opt_footer_tel_number', 'options');
	$new_business = get_field('opt_footer_new_biz_email', 'options');
	$press = get_field('opt_footer_press_email', 'options');
	$general_enquiries = get_field('opt_footer_enquiries_email', 'options');
	$join_us = get_field('opt_footer_join_us', 'options');
	$join_us_link = get_field('opt_footer_join_us_link', 'options');

	$instagram = get_field('opt_instagram', 'options');
	$twitter = get_field('opt_twitter', 'options');
	$pinterest = get_field('opt_pinterest', 'options');
	$linkedin = get_field('opt_linkedin', 'options');
	$behance = get_field('opt_behance', 'options');
	$the_dots = get_field('opt_the_dots' . 'options');
	$creative_pool = get_field('opt_creative_pool', 'options');

	?>

	<footer>
		<div class="inner">
			<h2 class="section-title">
				<?php echo $heading_line_one; ?><br>
				<?php echo $heading_line_two; ?>
			</h2>

			<div class="lh-col">
				<p class="text"><?php echo $statement; ?></p>
				<small>&#169; Baxter & Bailey <?php echo date("Y") ?></small>
			</div>

			<div class="rh-col">
				<ul class="contact">
					<li>
						<span class="meta">New Business</span>
						<a class="link"><?php echo $new_business; ?></a>
					</li>
					<li>
						<span class="meta">Press and Events</span>
						<a class="link"><?php echo $press; ?></a>
					</li>
					<li>
						<span class="meta">General Enquiries</span>
						<a href="tel: <?php echo $telephone_number; ?>" class="link"><?php echo $telephone_number; ?></a>
						<a class="link"><?php echo $general_enquiries; ?></a>
					</li>
					<li>
						<span class="meta">Join Us</span>
						<p class="join-us-statement"><?php echo $join_us; ?></p>
						<a class="link"><?php echo $join_us_link; ?></a>
					</li>
				</ul>

				<div class="socials-and-address">
					<h3>Follow Us</h3>
					<ul class="socials">
						<li><a href="<?php echo $instagram; ?>" class="link">Instagram</a></li>
						<li><a href="<?php echo $twitter; ?>" class="link">Twitter</a></li>
						<li><a href="<?php echo $pinterest; ?>" class="link">Pinterest</a></li>
						<li><a href="<?php echo $linkedin; ?>" class="link">Linkedin</a></li>
						<li><a href="<?php echo $behance; ?>" class="link">Behance</a></li>
						<li><a href="<?php echo $the_dots; ?>" class="link">The Dots</a></li>
						<li><a href="<?php echo $creative_pool; ?>" class="link">Creative Pool</a></li>
					</ul>
					<address>
						<h3>Find us here</h3>
						<?php echo $address; ?>
					</address>
				</div>
			</div>

		</div>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/gsap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/ScrollTrigger.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

	<?php wp_footer(); ?>

	</body>

	</html>