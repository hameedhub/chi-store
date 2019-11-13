<?php 

require_once('../classes/DB.php');
require_once('../classes/Fabric.php');
require_once('../classes/Product.php');
require_once('../classes/Session.php');
require_once('../classes/Style.php');
require_once('../classes/Size.php');
require_once('../classes/Tag.php');

$product = Product::show($_GET['id']);

?>
<?php include_once('_header.php');?>

<?php include_once('_nav.php'); ?>

		<br />
		<br />
		<br />
		<div class="content-container">
			<div class="container-full">
				<div class="row">
					<div class="col-md-12 main-wrap">
						<div class="main-content">
							<div class="container">
								<div class="row">
									<div class="col-md-12 no-min-height"></div>
								</div>
							</div>
							<div class="product">
								<div class="container">
									<div class="row summary-container">
										<div class="col-md-8 col-sm-6 entry-image">
											<div class="single-product-images">
												<div class="single-product-images-slider">
													<div class="caroufredsel product-images-slider"
														data-synchronise=".single-product-images-slider-synchronise"
														data-scrollduration="500" data-height="variable"
														data-scroll-fx="none" data-visible="1" data-circular="1"
														data-responsive="1">
														<div class="caroufredsel-wrap">
															<ul class="caroufredsel-items">
																<li class="caroufredsel-item">
																	<div class="thumb">
																		<img width="800" height="850"
																			src="images/product/product-detail/product-1.jpg"
																			alt="Product-detail" />
																	</div>
																</li>
																
															</ul>
															<a href="#" class="caroufredsel-prev"></a>
															<a href="#" class="caroufredsel-next"></a>
														</div>
													</div>
												</div>
												<div class="single-product-thumbnails">
													<div class="caroufredsel product-thumbnails-slider"
														data-visible-min="2" data-visible-max="4"
														data-scrollduration="500" data-direction="up" data-height="100%"
														data-circular="1" data-responsive="0">
														<div class="caroufredsel-wrap">
															<ul
																class="single-product-images-slider-synchronise caroufredsel-items">
																<li class="caroufredsel-item selected">
																	<div class="thumb">
																		<img width="100" height="150"
																			src="images/product/product-detail/product-1.jpg"
																			alt="Product-detail" />
																	</div>
																</li>
																
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 entry-summary">
											<div class="summary entry-summary">
												<h1 class="product_title entry-title"><?php echo $product['name'] ?></h1>
												<div class="woocommerce-product-rating">
													<div class="star-rating">
														<span style="width:80%"></span>
													</div>
													<a href="#reviews" class="woocommerce-review-link">(<span
															class="count">1</span> customer review)</a>
												</div>
												<p class="price">
													<span class="amount">₦<?php echo $product['price'] ?></span>
												</p>
												<div class="product-excerpt">
													<p>
													<?php echo $product['description'] ?>
													</p>
												</div>
												<div class="product-actions res-color-attr">
													<form class="cart">
														<div class="product-options-outer">
															<div class="variation_form_section">
																<div class="product-options icons-lg">
																	<table class="variations-table">
																		<tbody>
																			<tr>
																				<td><label>Size</label></td>
																				<td>
																					<div
																						class="select-option swatch-wrapper selected">
																						<center>
																						<a title=""
																							class="swatch-anchor">
																							<?php echo Size::show($product['size_id'])['name'] ?>
																						</a>
																						</center>
																					</div>
																					
																					
																					
																				</td>
																			</tr>
																		</tbody>
																	</table>
																</div>
															</div>
														</div>
														<div class="single_variation_wrap">
															<div class="single_variation">
																<span class="price"><span
																		class="amount" id="total"> </span></span>
															</div>
															<div class="variations_button">
																<!-- <div class="quantity">
																	<input type="number" id="qty" onchange="calTotal(<?php echo $product['price'] ?>)" name="qty" value="1"
																		title="Qty" class="input-text qty text" min="1" max="<?php echo $product['num'] ?>"
																		size="4">
																</div> -->
																
																<a href="#" data-id="<?php echo $product['id'] ?>" data-max="<?php echo $product['num'] ?>" data-name="<?php echo $product['name'] ?>" data-price="<?php echo $product['price'] ?>" class="button add-to-cart">Add to
																	cart</a>
															</div>
														</div>
													</form>
												</div>
												<div class="product_meta">
													<span class="posted_in">Style: <a href="#"><?php echo Style::show($product['style_id'])['name'] ?></a></span>
													<span class="posted_in">Fabric: <a href="#"><?php echo Fabric::show($product['fabric_id'])['name'] ?></a></span>
													<span class="tagged_as">Tags: <a href="#"><?php echo Tag::show($product['tag_id'])['name'] ?></a></span>
												</div>
												<div class="share-links">
													<div class="share-icons">
														<span class="facebook-share">
															<a href="#" title="Share on Facebook"><i
																	class="fa fa-facebook"></i></a>
														</span>
														<span class="twitter-share">
															<a href="#" title="Share on Twitter"><i
																	class="fa fa-twitter"></i></a>
														</span>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="woocommerce-tab-container">
									<div class="container">
										<div class="row">
											<div class="col-md-12">
												<div class="tabbable woocommerce-tabs">
													<ul class="nav nav-tabs" role="tablist">
														<li class="active">
															<a data-toggle="tab" role="tab"
																href="#tab-description">Description</a>
														</li>
														<li>
															<a data-toggle="tab" role="tab" href="#tab-reviews">Reviews
																(1)</a>
														</li>
													</ul>
													<div class="tab-content">
														<div class="tab-pane active" id="tab-description">
															
															<h4>Product Description</h4>
															<p>
																<?php echo $product['description'] ?>
															</p>
															<h4>Fabric Description</h4>
															<p>
																<?php echo Fabric::show($product['fabric_id'])['description'] ?>
															</p>
															<h4>Style Description</h4>
															<p>
																<?php echo Style::show($product['style_id'])['description'] ?>
															</p>
															<h4>Size Description</h4>
															<p>
																<?php echo Size::show($product['size_id'])['description'] ?>
															</p>


														</div>

														<div class="tab-pane" id="tab-reviews">
															<div id="reviews">
																<div id="comments">
																	<h2>1 review for Cras rhoncus duis viverra</h2>
																	<ol class="commentlist">
																		<li>
																			<div class="comment_container">
																				<div class="comment-text">
																					<div class="star-rating">
																						<span style="width:30%"></span>
																					</div>
																					<p class="meta">
																						<strong>user1</strong> &ndash;
																						<time
																							datetime="2015-08-05T10:09:45+00:00">August
																							5, 2015</time>:
																					</p>
																				</div>
																			</div>
																			<ol class="children">
																				<li>
																					<div class="comment_container">
																						<div class="comment-text">
																							<div class="star-rating">
																								<span
																									style="width:80%"></span>
																							</div>
																							<p class="meta">
																								<strong>user2</strong>
																								&ndash; <time
																									datetime="2015-08-05T10:09:45+00:00">August
																									5, 2015</time>:
																							</p>
																						</div>
																					</div>
																				</li>
																			</ol>
																		</li>
																		<li>
																			<div class="comment_container">
																				<div class="comment-text">
																					<div class="star-rating">
																						<span style="width:80%"></span>
																					</div>
																					<p class="meta">
																						<strong>user3</strong> &ndash;
																						<time
																							datetime="2015-08-05T10:09:45+00:00">August
																							5, 2015</time>:
																					</p>
																				</div>
																			</div>
																		</li>
																	</ol>
																</div>
																<div id="respond-wrap">
																	<div id="respond" class="comment-respond">
																		<h3 class="comment-reply-title">
																			<span>Rate this Product</span>
																		</h3>
																		<form class="form-group">
																			<p>
																				<select class="form-control">
																					<option value="1">1 Star</option>
																					<option value="2">2 Stars</option>
																					<option value="3">3 Stars</option>
																					<option value="4">4 Stars</option>
																					<option value="5">5 Stars</option>
																				</select>
																			</p>
																			<p>
																				<input name="submit" class="btn"
																					value="Submit" type="submit" />
																			</p>
																		</form>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php include_once('_footer.php')?>