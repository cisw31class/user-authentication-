<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 4/29/17
 * Time: 8:15 PM
 */
function display_footer(){

    $footer = <<<EOD
    <footer id="footer">
				<div class="container">
					<div class="row">
						<section class="4u 12u$(medium) about">
							<h2>Did you know?</h2>
							<p>Someone can fill this text with something useful.
							Someone can fill this text with something useful.</p>
							<ul class="actions">
								<li><a href="#" class="button">Bookmark</a></li>
							</ul>
						</section>
						
						<section class="4u 6u(medium) 12u$(small)">
							<h3>Updates</h3>
							<ul class="updates">
								<li>
									<p><a href="#">This can be static text, it would serve as a decent place holder.</a></p>
									<span class="timestamp">Posted 2 hours ago</span>
								</li>
								<li>
									<p><a href="#">Also, static...maybe some news story that just happened</a></p>
									<span class="timestamp">Posted 4 hours ago</span>
								</li>
							</ul>
						</section>
						
						<section class="4u$ 6u$(medium) 12u$(small)">
							<h3>Get in touch</h3>
							<ul class="labeled-icons">
								<li>
									<h4 class="icon alt fa-home"><span class="label">Address</span></h4>
									<span>1100 N Grand Ave<br />
									Walnut, CA 91789</span>
								</li>
								<li>
									<h4 class="icon alt fa-phone"><span class="label">Phone</span></h4>
									<span>(800) 555-5555</span>
								</li>
								<li>
									<h4 class="icon alt fa-envelope"><span class="label">Email</span></h4>
									<a href="#">example@example.com</a>
								</li>
							</ul>
						</section>
					</div>
				</div>
				<div class="copyright container">
					<p>&copy; Nerd Advice, All rights reserved.</p>
					<ul class="menu">
						<li><a href="#">Terms of Use</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div>
			</footer>

            <!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
            <!-- Scripts -->
EOD;
echo $footer;
}

