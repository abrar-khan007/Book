<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Book</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/k.css" rel="stylesheet">
	<link href="css/styl.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="css/accountbtn.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="js.php"></script>
	<script src="js/main.js"></script>
	<script src="js/actions.js"> </script>
	<script src="action.php"> </script>



</head>


<style>
	.row-checkout {
		display: -ms-flexbox;
		/* IE10 */
		display: flex;
		-ms-flex-wrap: wrap;
		/* IE10 */
		flex-wrap: wrap;
		margin: 0 -16px;
	}

	.col-25 {
		-ms-flex: 25%;
		/* IE10 */
		flex: 25%;
	}

	.col-50 {
		-ms-flex: 50%;
		/* IE10 */
		flex: 50%;
	}

	.col-75 {
		-ms-flex: 75%;
		/* IE10 */
		flex: 75%;
	}

	.col-25,
	.col-50,
	.col-75 {
		padding: 0 16px;
	}

	.container-checkout {
		background-color: #f2f2f2;
		padding: 5px 20px 15px 20px;
		border: 1px solid lightgrey;
		border-radius: 3px;
	}

	input[type=text] {
		width: 100%;
		margin-bottom: 20px;
		padding: 12px;
		border: 1px solid #ccc;
		border-radius: 3px;
	}

	label {
		margin-bottom: 10px;
		display: block;
	}

	.icon-container {
		margin-bottom: 20px;
		padding: 7px 0;
		font-size: 24px;
	}

	.checkout-btn {
		background-color: #4CAF50;
		color: white;
		padding: 12px;
		margin: 10px 0;
		border: none;
		width: 100%;
		border-radius: 3px;
		cursor: pointer;
		font-size: 17px;
	}

	.checkout-btn:hover {
		background-color: #45a049;
	}

	hr {
		border: 1px solid lightgrey;
	}

	span.price {
		float: right;
		color: grey;
	}

	/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other 
instead of next to each other (also change the direction - make the "cart" column go on top) */
	@media (max-width: 800px) {
		.row-checkout {
			flex-direction: column-reverse;
		}

		.col-25 {
			margin-bottom: 20px;
		}
	}
</style>

<body>
	<?php
	include "db.php";
	include "header.php";

	?>
	<section class="section">
		<div class="container-fluid">
			<div class="row-checkout">
				<?php
				if (isset($_SESSION["uid"])) {
					$sql = "SELECT * FROM user_info WHERE user_id='$_SESSION[uid]'";
					$query = mysqli_query($con, $sql);
					$row = mysqli_fetch_array($query);

					echo '
			<div class="col-75">
				<div class="container-checkout">
				<form id="checkout_form" action="checkout_process.php" method="POST" class="was-validated">
					<div class="row-checkout">
					
					<div class="col-50">
						<h3>Billing Address</h3>
						<label for="fname"><i class="fa fa-user" ></i> Full Name</label>
						<input type="text" id="fname" class="form-control" name="firstname" pattern="^[a-zA-Z ]+$"  value="' . $row["first_name"] . ' ' . $row["last_name"] . '">
						<label for="email"><i class="fa fa-envelope"></i> Email</label>
						<input type="text" id="email" name="emaill" class="form-control" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$" value="' . $row["email"] . '" required>
						<label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
						<input type="text" id="adr" name="address1" class="form-control" value="' . $row["address1"] . '" required>
						<label for="city"><i class="fa fa-institution"></i> City</label>
						<input type="text" id="city" name="city1" class="form-control" value="' . $row["address2"] . '" pattern="^[a-zA-Z ]+$" required>
						<div class="row">
						<div class="col-50">
							<label for="state">State</label>
							<input type="text" id="state" name="state" class="form-control" pattern="^[a-zA-Z ]+$" required>
						</div>
						<div class="col-50">
							<label for="zip">Zip</label>
							<input type="text" id="zip" name="zip" class="form-control" pattern="^[0-9]{6}(?:-[0-9]{4})?$" required>
						</div>
						</div>
					</div>
					
					
					<div class="col-50">
						<h3>Payment</h3>
						<label for="fname">Accepted Cards</label>
						<div class="icon-container">
						<i class="fa fa-cc-visa" style="color:navy;"></i>
						<i class="fa fa-cc-amex" style="color:blue;"></i>
						<i class="fa fa-cc-mastercard" style="color:red;"></i>
						<i class="fa fa-cc-discover" style="color:orange;"></i>
						</div>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-1">
								<label for="payment-1">
									<span></span>
									Direct Bank Transfer
								</label>
								<div class="caption">
									<p>Your transaction is secure Throught Direct Bank Transfer.</p>
								</div>
							</div>
							
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-2">
								<label for="payment-2">
									<span></span>
									Cheque Payment
								</label>
								<div class="caption">
									<p>Your Money transfer mode is secure through Cheque payment</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-3">
								<label for="payment-3">
									<span></span>
									Paypal System
								</label>
								<div class="caption">
									<p>Transfer Easily and securely through Paypal.</p>
								</div>
							</div>
						</div>
						
						
						<label for="cname">Name on Card</label>
						<input type="text" id="cname" name="cardname" class="form-control" pattern="^[a-zA-Z ]+$" required>
						
						<div class="form-group" id="card-number-field">
                        <label for="cardNumber">Card Number</label>
                        <input type="text" class="form-control" id="cardNumber" name="cardNumber" >
                    </div>
						<label for="expdate">Exp Date</label>
						<input type="Date" id="expdate" name="expdate" class="form-control"  placeholder="01/12/2019">
						
						<div class="row">
						
						<div class="col-50">
							<div class="form-group CVV">
								<label for="cvv">CVV</label>
								<input type="text" class="form-control" name="cvv" id="cvv" >
						</div>
						</div>
					</div>
					</div>
					</div>
					<label><input type="CHECKBOX" name="q" class="roomselect" value="conform" required> Shipping address same as billing
					</label>
					
					<!-- Shiping Details -->
						<div class="shiping-details">
							<div class="section-title">
								<h3 class="title">Shiping address</h3>
							</div>
							<div class="input-checkbox">
							<input type="CHECKBOX" id="shiping-address" class="roomselect" value="conform">
								<label  for="shiping-address" style="background-color:aliceblue;">
									
									Ship to a different address? 
								</label>
								
								<div class="caption">
									<div class="form-group">
										<input class="input" type="text" name="first-name" placeholder="First Name">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="last-name" placeholder="Last Name">
									</div>
									<div class="form-group">
										<input class="input" type="email" name="email" placeholder="Email">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="address" placeholder="Address">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="city" placeholder="City">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="country" placeholder="Country">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="zip-code" placeholder="ZIP Code">
									</div>
									<div class="form-group">
										<input class="input" type="tel" name="tel" placeholder="Telephone">
									</div>
								</div>
							</div>
						</div>
						<!-- /Shiping Details -->

						<!-- Order notes -->
						<div class="order-notes">
							<textarea class="input" placeholder="Order Notes"></textarea>
						</div>
						<!-- /Order notes -->
					
					
					
					
					';
					$i = 1;
					$total = 0;
					@$count = $_POST['item_count'];
					while ($i <= $count) {
						$item_name_ = $_POST['item_name_' . $i];
						$amount_ = $_POST['amount' . $i];
						$qty = $_POST['qty' . $i];
						$_SESSION['qty'] = $qty;
						$total = $total + $amount_;
						$_SESSION['amount'] = $total;
						print_r($_SESSION['qty']);
						print_r($_SESSION['amount']);
						exit;
						$sql = "SELECT product_id FROM products WHERE product_title='$item_name_'";
						$query = mysqli_query($con, $sql);
						$row = mysqli_fetch_array($query);
						$product_id = $row["product_id"];
						echo "	
						<input type='hidden' name='product_id' value='$product_id'>
						<input type='hidden' name='product_price' value='$product_price'>
						<input type='hidden' name='qty' value='$qty'>
						";
						$i++;
					}

					echo '	
				<input type="hidden" name="total_count" value="' . $count . '">
					<input type="hidden" name="total_price" value="' . $total . '">
					
					<input type="submit" id="submit" value="Continue to checkout" class="checkout-btn">
					
						
					
				</form>
				</div>
			</div>
			';
				} else {
					echo "<script>window.location.href = 'cart.php'</script>";
				}
				?>

				<div class="col-25">
					<div class="container-checkout">

						<?php
						if (isset($_POST["cmd"])) {

							$user_id = $_POST['custom'];


							$i = 1;
							echo
							"
					<h4>Cart 
					<span class='price' style='color:black'>
					<i class='fa fa-shopping-cart'></i> 
					<b>$total_count</b>
					</span>
				</h4>
					<table class='table table-condensed'>
					<thead><tr>
					<th >no</th>
					<th >product title</th>
					<th >	qty	</th>
					<th >	amount</th></tr>
					</thead>
					<tbody>
					";
							$total = 0;
							while ($i <= $count) {
								$item_name_ = $_POST['item_name_' . $i];

								$item_number_ = $_POST['item_number_' . $i];

								$amount_ = $_POST['amount_' . $i];
								$_SESSION['amount'] = $amount;
								$qty = $_POST['qty_' . $i];
								$_SESSION['qty'] = $qty;
								$total = $total + $amount_;
								$sql = "SELECT product_id FROM products WHERE product_title='$item_name_'";
								$query = mysqli_query($con, $sql);
								$row = mysqli_fetch_array($query);
								$product_id = $row["product_id"];

								echo "	
						<tr><td><p>$item_number_</p></td><td><p>$item_name_</p></td><td ><p>$qty</p></td><td ><p>$amount_</p></td></tr>";

								$i++;
							}
							echo "
				</tbody>
				</table>
				<hr>
				
				<h3>total<span class='price' style='color:black'><b>$$total</b></span></h3>";
						}
						?>
					</div>
					<div class="container-checkout">
						<div class="cart-amount-summary">

							<h2>Summary</h2>



							<li><span>Delivery of Books:</span> <span>Free</span></li>
							<li><span>Discount on monthly Books:</span> <span>-15%</span></li>

							</ul>

						</div>
					</div>
				</div>
			</DIV>
		</div>

		</div>

		</div>


	</section>
	<div id="newsletter" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<div class="newsletter">
						<p>Sign Up for the <strong>NEWSLETTER</strong></p>
						<form>
							<input class="input" type="email" placeholder="Enter Your Email">
							<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
						</form>
						<ul class="newsletter-follow">
							<li>
								<a href="#"><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-instagram"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-pinterest"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
</body>

</html>