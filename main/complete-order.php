<?php include_once('_header.php') ?>

<?php include_once('_nav.php') ?>


        <div class="heading-container">
            <div class="container heading-standar">
                <div class="page-breadcrumb">
                    <ul class="breadcrumb">
                        <li><span><a href="shop.html" class="shop"><span>Shop</span></a></span></li>
                        <li><span>Cart</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 main-wrap">
                        <div class="main-content">
                            <div class="woocommerce">

                                <div class="col-md-12 margin">
                                    <div class="col-md-6">
                                        <div class="cart_totals">
                                            <h2>Delivery / Shipping Information</h2>
                                            <table>
                                                <tr class="cart-subtotal">
                                                    <th>Name</th>
                                                    <td>Michael Scoffield</td>
                                                </tr>
                                                <tr class="shipping">
                                                    <th>Phone Number</th>
                                                    <td>08024453453</td>
                                                </tr>
                                                <tr class="shipping">
                                                    <th>Shipping Address</th>
                                                    <td><textarea class="form-control" value=""
                                                            placeholder="Enter Shipping Address">Washington DC</textarea>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="cart_totals">
                                            <h2>Cart Totals</h2>
                                            <table>
                                               
                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td><strong ><span class="amount">₦ </span><span class="amount total-cart" ></span></strong></td>
                                                </tr>
                                            </table>
                                            <div class="wc-proceed-to-checkout">
                                                <a href="#" class="checkout-button button alt wc-forward">Proceed to
                                                    Payment</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="margin"></div>
                                </div>




                                <form>
                                    <h2>Review Order</h2>
                                    <table class="table shop_table cart">
                                        <thead>
                                            <tr>
                                               
                                                <th class="product-name">Product</th>
                                                <th class="product-price text-center">Price</th>
                                                <th class="product-quantity text-center">Quantity</th>
                                                <th class="product-remove hidden-xs">Cancel</th>
                                                <th class="product-subtotal text-center hidden-xs">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody class="show-cart" id="orders">
                                       
                                           
                                       
                                        </tbody>
                                        <tr>
                                                <td colspan="6" class="actions">
                                                    
                                                    <input type="submit" class="button update-cart-button"
                                                        name="update_cart" value="Proceed to Payment" />
                                                </td>
                                            </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include_once('_footer.php') ?>