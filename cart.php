<html lang="en"><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WAW Clothing</title>
	<?php include 'head.php'; ?>
</head>
<body>

	<?php include 'header.php'; ?>

	<div class="cart-page-content page-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="cart_title">
						<h4>Shopping Cart</h4>
					</div>
					<div class="table-responsive">
						<table class="cart-table text-center">
							<thead>
								<tr id="cart_th">
									<th>#</th>
									<th>Image</th>
									<th>Product name</th>
									<th>QUANTITY</th>
									<th>Price</th>
									<th>Total</th>
									<th>Remove</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>
										<a href="#"><img alt="" class="img-responsive" src="images/cartpage/cart-product-1.png" style="height: 15%;"></a>
									</td>
									<td>
										<h6><a href="#">Gray Polo Shirt,</a></h6>
									</td>
									<td>
										<form id="qua_in" action="action_page.php">
											<input type="number" value="1" name="quantity" min="1" max="5">
										</form>
									</td>
									<td>
										<div class="cart-price">₱ 439.99</div>
									</td>
									<td>
										<div class="cart-subtotal">₱ 439.99</div>
									</td>
									<td><i class="fa fa-trash"></i></td>
								</tr>
								<tr>
									<td>2</td>
									<td>
										<a href="#"><img alt="" class="img-responsive" src="images/cartpage/cart-product-2.png" style="height: 20%;"></a>
									</td>
									<td>
										<h6><a href="#">Black With Red &amp; White Tank Top,</a></h6>
									</td>
									<td>
										<form id="qua_in_2" action="action_page.php">
											<input type="number" value="1" name="quantity" min="1" max="10">
										</form>
									</td>
									<td>
										<div class="cart-price">₱ 299.99</div>
									</td>
									<td>
										<div class="cart-subtotal">₱ 299.99</div>
									</td>
									<td><i class="fa fa-trash"></i></td>
								</tr>
								<tr id="total_colspan">
									<td colspan="3" class="text-left">total</td>
									<td>
										2
									</td>
									<td>
										₱ 739.98
									</td>
									<td colspan="2">
										<a class="checkPageBtn" href="checkout.php">checkout</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div> 
	
	<?php include 'footer.php'; ?>
	
	<a id="scrollUp" href="#top" style="display: none; position: fixed; z-index: 2147483647;"><i class="fa fa-chevron-up"></i></a>

</body>
</html>