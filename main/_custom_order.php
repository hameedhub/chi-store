<div align="center">
			<div class="container">
				<h2></h2>
				<button type="button" class="button" data-toggle="modal" data-target="#CustomOrderModal">Make Custom
					Order</button>
				<h2></h2>
				<div class="modal fade" id="CustomOrderModal" role="dialog">
					<div class="modal-dialog">

						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Custom Order</h4>
								
							</div>
							<form id="custom_order" action="req/custom_order.php" method="POST">
							<div class="modal-body">
								<div class="col-md-12">
									<div class="col-md-12">
										<div class="form-group">
											<select class="form-control" name="style_id" required>
												<option value="">Pick a Style</option>
												<?php foreach(Style::index() as $style){?>
													<option value="<?php echo $style['id'] ?>"> <?php echo $style['name'] ?> </option>
												<?php }?>
											</select>
										</div>
										<div class="form-group">
											<select class="form-control" name="fabric_id">
												<option value="">Pick a Fabric</option>
												<?php foreach(Fabric::index() as $fabric){?>
													<option value="<?php echo $fabric['id'] ?>"><?php echo $fabric['name'] ?></option>
												<?php }?>
											</select>
										</div>
										<div class="form-group">
											<select name="size_id" required class="form-control">
												<option value="">Pick your Size</option>
												<?php foreach (Size::index() as $size){?>
												<option value="<?php echo $size['id'] ?>"><?php echo $size['name']?></option>
												<?php }?>
											</select>
										</div>
										<div class="form-group">
											<select name="tag_id" required class="form-control">
												<option value="">Pick your Tag</option>
												<?php foreach (Tag::index() as $tag){?>
												<option value="<?php echo $tag['id'] ?>"><?php echo $tag['name']?></option>
												<?php }?>
											</select>
										</div>
										<div class="form-group">
											<input type="number" name="qty" value="1" title="Qty"
												class="form-control" size="4">
										</div>
										<div>
											<p id="message"></p>
										</div>
										<div class="form-group">
										<input name="user_id" type="hidden" value="<?php if(isset($user)){ echo $user['id'];}?>">
											<?php if(!isset($user)){?>
												<p style="color:red">Login to make custom order</p>
											<?php }else{?>
											<button type="submit" id="order" class="button">Send Order</button>
											<?php }?>
										</div>
									</div>
									</form>
								</div>
							</div>
							<div class="modal-footer">

							</div>
						</div>


					</div>
				</div>

			</div>
		</div>