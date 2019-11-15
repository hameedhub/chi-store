
<?php include_once('_header.php'); ?>

<?php include_once('_nav.php'); ?>

<?php include_once('_slider.php'); ?>

<?php include_once('_custom_order.php'); ?>


		<div class="shop-toolbar">
			<div class="container">
				<div class="row">
					<div class="col-md-9 main-wrap pull-right">
						<div class="view-mode">
							<a class="grid-mode active" title="Grid"><i class="fa fa-th"></i></a>
							<a class="list-mode" title="List" href="#"><i class="fa fa-th-list"></i></a>
						</div>


						<form class="woocommerce-ordering clearfix">
							<div class="woocommerce-ordering-select">
								<label class="hide">Sorting:</label>
								<div class="form-flat-select">
									<select name="orderby" class="orderby">
										<option value="menu_order" selected='selected'>Default sorting</option>
										<option>Sort by style</option>
										<option>Sort by fabric</option>
									</select>
									<i class="fa fa-angle-down"></i>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

			<!-- Products begin here -->

		<div class="content-container">
			<div class="container">
				<div class="row">
					<div class="col-md-9 main-wrap">
						<div class="main-content">
							<div class="shop-loop grid">
								<ul class="products">
									<?php foreach(Product::index() as $product){ ?>
									<li class="product">
										<div class="product-container">
											<figure>
												<div class="product-wrap">
													<div class="product-images">
														<div class="shop-loop-thumbnail">
															<a href="product_detail.php?id=<?php echo $product['id'] ?>" ><img width="300" height="350"
																src="images/product/product-2.jpg" alt="Product-2" />
															</a>
														</div>

														<div class="clear"></div>
														
													</div>
												</div>
												<figcaption>
													<div class="shop-loop-product-info">
														<div class="info-title">
															<h3 class="product_title"><a href="product_detail.php?id=<?php echo $product['id'] ?>"><?php echo $product['name']?></a>
															</h3>
														</div>
														<div class="info-meta">
															<div class="info-price">
																<span class="price">
																	<span class="amount">₦<?php echo $product['price'] ?></span>
																</span>
															</div>
															<div class="loop-add-to-cart">
																<a class="add-to-cart" href="#" data-id="<?php echo $product['id'] ?>" data-max="<?php echo $product['num'] ?>" data-name="<?php echo $product['name'] ?>" data-price="<?php echo $product['price'] ?>" >Add to Cart <i
																		class="minicart-icon-svg elegant_icon_bag"></i></a>
															</div>
														</div>
														<div class="info-excerpt">
															<?php echo $product['description'] ?>
														</div>
														<div class="list-info-meta clearfix">
															<div class="info-price">
																<span class="price">
																	<span class="amount">₦<?php echo $product['price'] ?></span>
																</span>
															</div>
															<div class="list-action clearfix">
																<div class="loop-add-to-cart">
																	<a href="#">Add to Cart <i
																			class="minicart-icon-svg elegant_icon_bag"></i></a>
																</div>

															</div>
														</div>
													</div>
												</figcaption>
											</figure>
										</div>
									</li>
									<?php } ?>
								</ul>
							</div>
					<!-- Product ends here -->
					<!-- pagination -->
							<nav class="woocommerce-pagination">
								<p class="woocommerce-result-count">
									Showing 1&ndash;12 of 14 results
								</p>
								<div class="paginate">
									<div class="paginate_links">
										<span class='page-numbers current'>1</span>
										<a class='page-numbers' href='#'>2</a>
										<a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a>
									</div>
								</div>
							</nav>
						</div>
					</div>

			<!-- Pagination end here -->
					<div class="col-md-3 sidebar-wrap">
						<div class="main-sidebar">

							<div class="widget woocommerce widget_layered_nav dhwc_widget_layered_nav">
								<h4 class="widget-title"><span>Styles</span></h4>
								<ul>
									<?php foreach(Style::index() as $style){?>
									<li><a href="#"><?php echo $style['name'] ?></a> <small class="count"><?php echo $style['num'] ?></small></li>
									<?php } ?>
								</ul>
							</div>
							<div class="widget woocommerce widget_product_categories">
								<h4 class="widget-title"><span></span></h4>
								<ul class="product-categories">
									<?php foreach(Fabric::index() as $fabric){ ?>
									<li><a href="#"> <?php echo $fabric['name']; ?></a></li>
									<?php } ?>
									
								</ul>
							</div>
							<div class="widget woocommerce widget_products">
								<h4 class="widget-title"><span>Best Sellers</span></h4>
								<ul class="product_list_widget">

									<li>
										<a href="#" title="Donec tincidunt justo">
											<img width="100" height="150" src="images/product/product-13.jpg"
												alt="Product-13" />
											<span class="product-title">Donec tincidunt justo</span>
										</a>
										<del><span class="amount">&#36;20.50</span></del>
										<ins><span class="amount">&#36;19.00</span></ins>
									</li>
									<li>
										<a href="#" title="Nunc lacus sem">
											<img width="100" height="150" src="images/product/product-11.jpg"
												alt="Product-11" />
											<span class="product-title">Nunc lacus sem</span>
										</a>
										<span class="amount">&#36;10.95</span>
									</li>
									<li>
										<a href="#" title="Mauris egestas">
											<img width="100" height="150" src="images/product/product-10.jpg"
												alt="Product-10" />
											<span class="product-title">Mauris egestas</span>
										</a>
										<span class="amount">&#36;14.95</span>
									</li>
									<li>
										<a href="#" title="Morbi fermentum">
											<img width="100" height="150" src="images/product/product-9.jpg"
												alt="Product-9" />
											<span class="product-title">Morbi fermentum</span>
										</a>
										<span class="amount">&#36;17.45</span>
									</li>
									<li>
										<a href="#" title="Morbi fermentum">
											<img width="100" height="150" src="images/product/product-8.jpg"
												alt="Product-8" />
											<span class="product-title">Morbi fermentum</span>
										</a>
										<span class="amount">&#36;23.00</span>
									</li>
								</ul>
							</div>
							<div class="widget woocommerce widget_product_tag_cloud">
								<h4 class="widget-title"><span>Product Tags</span></h4>
								<div class="tagcloud">
									<?php foreach(Tag::index() as $tag){?>
									<a href=""><?php echo $tag['name']; ?></a>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<?php include_once('_footer.php')?>