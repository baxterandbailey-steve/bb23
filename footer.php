		<?php

		/**
		 * Site footer
		 *
		 * @package BBWP
		 */

		$statement = get_field('statement', 'options');

		$address = get_field('address', 'options');
		$telephone_number = get_field('telephone_number', 'options');
		$new_business = get_field('new_business_email', 'options');
		$press = get_field('press_events_email', 'options');
		$general_enquiries = get_field('general_enquiries_email', 'options');
		$jobs = get_field('jobs_email', 'options');


		$instagram = get_field('instagram', 'options');
		$twitter = get_field('twitter', 'options');
		$pinterest = get_field('pinterest', 'options');
		$linkedin = get_field('linkedin', 'options');
		$behance = get_field('behance', 'options');
		$the_dots = get_field('the_dots' . 'options');
		$creative_pool = get_field('creative_pool', 'options');

		?>

		<footer role="contentinfo" style="color: white;">
			<div class="contain">
				<div class="footer-main">
					<div class="lh-col">
						<span class="meta">Interested?</span>
						<h2 class="title">We would love to hear from you</h2>
						<p class="text"><?php echo $statement ?></p>
					</div>
					<div class="rh-col">
						<div class="contact">
							<h3>New Business</h3>
							<span><?php echo $new_business ?></span>
							<h3>Press and Events</h3>
							<span><?php echo $press ?></span>
							<h3>General Enquiries</h3>
							<span><a href="tel: <?php echo $telephone_number ?>" class="phone"><?php echo $telephone_number ?></a></span><br>
							<span><?php echo $general_enquiries ?></span>
							<h3>Open Positions</h3>
							<span><?php echo $jobs ?></span><br>
							<!--
								<p>
									<address>
										<?php echo $address ?>
									</address>
								</p>
							-->
						</div>
						<div class="social">
							<h3>Follow Us</h3>
							<ul class="socials">
								<li>Instagram</li>
								<li>Twitter</li>
								<li>Pinterest</li>
								<li>Linkedin</li>
								<li>Behance</li>
								<li>The Dots</li>
								<li>Creative Pool</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-supplementary">
					<small>&#169; Baxter & Bailey <?php echo date("Y") ?></small>
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