
<body class="woocommerce page-layout-left-sidebar">
	<div class="offcanvas open">
		<div class="offcanvas-wrap">
			<div class="offcanvas-user clearfix">
				<a data-rel="loginModal" href="#"><i class="fa fa-user"></i> Login/Sign Up</a>
			</div>
			<nav class="offcanvas-navbar">
				<ul class="offcanvas-nav">
					<li>
						<a href="index.php" class="dropdown-hover">
							<span class="underline">Home</span>
						</a>
					</li>
					<li>
						<a href="about.php" class="dropdown-hover">
							<span class="underline">About</span>
						</a>
					</li>
					<li>
						<a href="shop.php" class="dropdown-hover">
							<span class="underline">Shop</span>
						</a>
					</li>
					<li><a href="collections.php"><span class="underline">Collections</span></a></li>
					<li>
						<a href="#" class="dropdown-hover">
							<span class="underline">School</span>
						</a>
					</li>
					<li class="menu-item-has-children dropdown">
						<a href="#" class="dropdown-hover">
							<span class="underline">Help</span> <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="contact-us.php">Contact Us</a></li>
							<li><a href="selfmeasure.html">Self Measurement</a></li>
							<li><a href="faq.html">FAQ</a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<div class="offcanvas-widget">
				<div class="widget social-widget">
					<div class="social-widget-wrap social-widget-none">
						<a href="#" title="Facebook" target="_blank">
							<i class="fa fa-facebook"></i>
						</a>
						<a href="#" title="Twitter" target="_blank">
							<i class="fa fa-twitter"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
    </div>
    


    <div id="wrapper" class="wide-wrap">
		<div class="offcanvas-overlay"></div>
		<header class="header-type-classic header-absolute header-transparent">
			<div class="topbar">
				<div class="container topbar-wap">
					<div class="row">
						<div class="col-sm-6">
							<div class="left-topbar">
								<div class="topbar-social">
									<a href="#" title="Facebook" target="_blank">
										<i class="fa fa-facebook facebook-bg-hover"></i>
									</a>
									<a href="#" title="Twitter" target="_blank">
										<i class="fa fa-twitter twitter-bg-hover"></i>
									</a>
									<a href="#" title="Instagram" target="_blank">
										<i class="fa fa-instagram instagram-bg-hover"></i>
									</a>
								</div>
							</div>
						</div>
						<?php if(!$user){ ?>
						<div class="col-sm-6">
							<div class="right-topbar">
								<div class="user-login">
									<ul class="nav top-nav">
										<li class="menu-item">
											<a data-rel="loginModal" href="#"><i class="fa fa-user"></i> Login/Sign
												Up</a>
										</li>
									</ul>
								</div>

							</div>
						</div>
						<?php }else{?>
							<div class="col-sm-6">
							<div class="right-topbar">
							<div class="user-login">
									<ul class="nav top-nav">
										<li class="menu-item">
											<a href="#"><i class="fa fa-power-off"></i>Logout</a>
										</li>
									</ul>
								</div>
								<div class="user-login">
									<ul class="nav top-nav">
										<li class="menu-item">
											<a href="#"><i class="fa fa-user"></i><?php echo $user['first_name'] .' '. $user['last_name'] ?></a>
										</li>
									</ul>
								</div>
								
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="navbar-container">
				<div class="navbar navbar-default  navbar-scroll-fixed">
					<div class="navbar-default-wrap">
						<div class="container">
							<div class="row">
								<div class="col-md-12 navbar-default-col">
									<div class="navbar-wrap">
										<div class="navbar-header">
											<button type="button" class="navbar-toggle">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar bar-top"></span>
												<span class="icon-bar bar-middle"></span>
												<span class="icon-bar bar-bottom"></span>
											</button>

											<a class="cart-icon-mobile" href="#">
												<i class="elegant_icon_bag"></i><span>0</span>

												
											</a>
											<a class="navbar-brand" href="index.html">
												<img class="logo" alt="Chilista Services"
													src="images/logo-transparent.png">
												<img class="logo-fixed" alt="Chilista Services"
													src="images/logo-fixed.png">
												<img class="logo-mobile" alt="Chilista Services"
													src="images/logo-mobile.png">
											</a>
										</div>
										<nav class="collapse navbar-collapse primary-navbar-collapse">
											<ul class="nav navbar-nav primary-nav">
												<li class="menu-item-has-children dropdown">
													<a href="index.php" class="dropdown-hover">
														<span class="underline">Home</span> <span class="caret"></span>
													</a>
												</li>
												<li class="menu-item-has-children dropdown">
													<a href="about.php" class="dropdown-hover">
														<span class="underline">About</span> <span class="caret"></span>
													</a>
												</li>
												<li class="menu-item-has-children megamenu megamenu-fullwidth dropdown">
													<a href="shop.php" class="dropdown-hover">
														<span class="underline">Shop</span> <span class="caret"></span>
													</a>
												</li>
												<li><a href="collections.php"><span
															class="underline">Collections</span></a></li>
												<li class="menu-item-has-children dropdown">
													<a href="school.php" class="dropdown-hover">
														<span class="underline">School</span> <span
															class="caret"></span>
													</a>
												</li>
												<li class="menu-item-has-children dropdown">
													<a href="#" class="dropdown-hover">
														<span class="underline">Help</span> <span class="caret"></span>
													</a>
													<ul class="dropdown-menu">
														<li><a href="contact-us.php">Contact Us</a></li>
														<li><a href="selfmeasure.html">Self Measurement</a></li>
														<li><a href="faq.html">FAQ</a></li>
													</ul>
												</li>

												<li class="navbar-minicart navbar-minicart-nav">
													<a class="minicart-link" href="#">
														<span class="minicart-icon">
															<i class="minicart-icon-svg elegant_icon_bag"></i>
															<span class="total-count"></span>
														</span>
													</a>
													<div class="minicart" style="overflow:scroll; height:400px;" >
														<div class="minicart-header no-items show"
														data-toggle="modal" data-target="#cart"> 
														<table class="show-cart table table-responsive" style="font-size:9px">
			  											</table>
			 											 <div>Total price: ₦<span class="total-cart"></span></div>

														</div>
														<div id="checkout" >
														<?php if($user){?>
														<div class="minicart-footer">
															<div class="minicart-actions clearfix">
																<a class="button" href="complete-order.php">
																	<span class="text">Check Out</span>
																</a>
															</div>
														</div>
														<?php }else{?>
															<p style="color:red">Login to checkout</p>
															<?php }?>
														<div class="minicart-footer" >
															<div class="minicart-actions clearfix">
																<a class="button" href="#">
																	<span class="clear-cart">Clear Cart</span>
																</a>
															</div>
														</div>

														</div>
													</div>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>