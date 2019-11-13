<div class="footer-widget">
			<div class="container">
				<div class="footer-widget-wrap">
					<div class="row">
						<div class="footer-widget-col col-md-3 col-sm-6">
							<div class="widget widget_nav_menu">
								<h3 class="widget-title"><span>SITE LINKS</span></h3>
								<ul class="menu">
									<li><a href="#">Home</a></li>
									<li><a href="#">About</a></li>
									<li><a href="">Collection</a></li>
								</ul>
							</div>
						</div>
						<div class="footer-widget-col col-md-3 col-sm-6">
							<div class="widget widget_nav_menu">
								<h3 class="widget-title"><span>STORE</span></h3>
								<ul class="menu">
									<li><a href="#">Shop</a></li>
									<li><a href="#">Order Status</a></li>
									<li><a href="#">Fashion School</a></li>
								</ul>
							</div>
						</div>
						<div class="footer-widget-col col-md-3 col-sm-6">
							<div class="widget widget_nav_menu">
								<h3 class="widget-title"><span>HELP</span></h3>
								<ul class="menu">
									<li><a href="contact-us">Contact Us</a></li>
									<li><a href="selfmeasure.html">Self Measurement</a></li>
									<li><a href="#">FAQs</a></li>
								</ul>
							</div>
						</div>
						<div class="footer-widget-col col-md-3 col-sm-6">
							<div class="widget widget_text">
								<h3 class="widget-title"><span>INFORMATION</span></h3>
								<div class="textwidget">
									<p><i class="fa fa-map-marker"></i> No 68/12, Tower Street,New York, USA</p>
									<p><i class="fa fa-phone"></i> (012) 1234 7824</p>
									<p>
										<i class="fa fa-envelope"></i> <a href="">email</span></a>
									</p>
									<p class="payment"><img src="images/footer-payment-color.png" alt=""></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer id="footer" class="footer">
			<div class="footer-info">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="footer-info-logo">
								<a href="#"><img alt="Chilista Services" src="images/footer-logo.png"></a>
							</div>
							<div class="copyright text-center">Copyright right © 2019. All Rights Reserved.</div>
							<div class="footer-social">
								<a href="#" title="Facebook" target="_blank">
									<i class="fa fa-facebook facebook"></i>
								</a>
								<a href="#" title="Twitter" target="_blank">
									<i class="fa fa-twitter twitter"></i>
								</a>
								<a href="#" title="Instagram" target="_blank">
									<i class="fa fa-instagram instagram"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>



	<div class="modal fade user-login-modal" id="userloginModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="userloginModalForm" method="POST" action="auth/login.php">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
						</button>
						<h4 class="modal-title">Login</h4>
					</div>
					<div class="modal-body">
						
						
						<div class="form-group">
							<label>Email</label>
							<input type="text" id="email" name="email" required class="form-control" value=""
								placeholder="Email Address">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" id="password" required value="" name="password" class="form-control"
								placeholder="Password">
						</div>
						<div class="checkbox clearfix">
							<div class="form-flat-checkbox pull-left">
								<input type="checkbox" name="rememberme" id="rememberme"
									value="forever"><i></i>&nbsp;Remember Me
							</div>
							<span class="lostpassword-modal-link pull-right">
								<a href="#lostpasswordModal" data-rel="lostpasswordModal">Lost your password?</a>
							</span>
						</div>
						<p id="message" style="color:red"></p>
					</div>
					<div class="modal-footer">
						<span class="user-login-modal-register pull-left">
							<a data-rel="registerModal" href="#">Not a Member yet?</a>
						</span>
						<button type="submit" class="btn btn-default btn-outline">Sign in</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="modal fade user-register-modal" id="userregisterModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="userregisterModalForm" method="POST" action="auth/register.php">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
						</button>
						<h4 class="modal-title">Register account</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>First Name</label>
							<input type="text" name="first_name" required class="form-control" value=""
								placeholder="Your First Name">
						</div>
						<div class="form-group">
							<label>Last Name</label>
							<input type="text" name="last_name" required class="form-control" value=""
								placeholder="Your Last Name">
						</div>
						<div class="form-group">
							<label for="user_email">Email</label>
							<input type="email" id="user_email" name="email" required class="form-control" value=""
								placeholder="Email">
						</div>
						<div class="form-group">
							<label for="user_password">Password</label>
							<input type="password" id="user_password" required value="" name="password"
								class="form-control" placeholder="Password">
						</div>
						
						<p id="message" style="color:red"></p>
					</div>

					<div class="modal-footer">
						<span class="user-login-modal-link pull-left">
							<a data-rel="loginModal" href="#loginModal">Already have an account?</a>
						</span>
						<button type="submit" class="btn btn-default btn-outline">Register</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="modal fade user-lostpassword-modal" id="userlostpasswordModal" tabindex="-1" role="dialog"
		aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="userlostpasswordModalForm">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
						</button>
						<h4 class="modal-title">Forgot Password</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>Email:</label>
							<input type="text" name="email" required class="form-control" value=""
								placeholder="Email Address">
						</div>
					</div>
					<div class="modal-footer">
						<span class="user-login-modal-link pull-left">
							<a data-rel="loginModal" href="#loginModal">Already have an account?</a>
						</span>
						<button type="submit" class="btn btn-default btn-outline">Sign in</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	</div>


	<script type='text/javascript' src="js/jquery-1.11.3.min.js"></script>
	<script type='text/javascript' src='js/jquery-migrate.min.js'></script>
	<script type='text/javascript' src='js/jquery.themepunch.tools.min.js'></script>
	<script type='text/javascript' src='js/jquery.themepunch.revolution.min.js'></script>
	<script type='text/javascript' src='js/easing.min.js'></script>
	<script type='text/javascript' src='js/imagesloaded.pkgd.min.js'></script>
	<script type='text/javascript' src='js/bootstrap.min.js'></script>
	<script type='text/javascript' src='js/superfish-1.7.4.min.js'></script>
	<script type='text/javascript' src='js/jquery.appear.min.js'></script>
	<script type='text/javascript' src='js/script.js'></script>
	<script type='text/javascript' src='js/swatches-and-photos.js'></script>
	<script type='text/javascript' src='js/jquery.prettyPhoto.min.js'></script>
	<script type='text/javascript' src='js/jquery.prettyPhoto.init.min.js'></script>
	<script type='text/javascript' src='js/jquery.selectBox.min.js'></script>
	<script type='text/javascript' src='js/jquery.parallax.js'></script>
	<script type='text/javascript' src='js/jquery.touchSwipe.min.js'></script>
	<script type='text/javascript' src='js/jquery.transit.min.js'></script>
	<script type='text/javascript' src='js/jquery.carouFredSel.min.js'></script>
	<script type='text/javascript' src='js/isotope.pkgd.min.js'></script>
	<script type='text/javascript' src='js/core.min.js'></script>
	<script type='text/javascript' src='js/widget.min.js'></script>
	<script type='text/javascript' src='js/mouse.min.js'></script>
	<script type='text/javascript' src='js/slider.min.js'></script>
	<script type='text/javascript' src='js/jquery-ui-touch-punch.min.js'></script>
	<script type='text/javascript' src='js/price-slider.js'></script>
	<script type='text/javascript' src='js/skin-selector.js'></script>
	<script type='text/javascript' src='script/auth.js'></script>
	<script type='text/javascript' src='script/cart.js'></script>
</body>

</html>