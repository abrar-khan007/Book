<!-- /BREADCRUMB -->
<html>

<head>
	<style>
		.iframe {
			width: 100%;
			height: 100%;
			border: none;

			background: #eee;


			z-index: 1;
		}

		.resizable {
			width: 1000px;
			height: 500px;
			background: #fff;
			border: 1px solid #ccc;


			z-index: 9;
		}
	</style>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="bootstrap.min.css" rel="stylesheet">
	<link href="k.css" rel="stylesheet">
	<link href="styl.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="css/accountbtn.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="js.php"></script>
	<script src="action.php"></script>
	<script src="js/actions.js"></script>
	<script src="js/main.js"></script>
	
	<script type="application/javascript" src="jquery.iframeResizer.min.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

	<script>
		(function(global) {
			if (typeof(global) === "undefined") {
				throw new Error("window is undefined");
			}
			var _hash = "!";
			var noBackPlease = function() {
				global.location.href += "#";
				// 50 milliseconds for just once do not cost much (^__^)
				global.setTimeout(function() {
					global.location.href += "!";
				}, 50);
			};
			// Earlier we had setInerval here....
			global.onhashchange = function() {
				if (global.location.hash !== _hash) {
					global.location.hash = _hash;
				}
			};
			global.onload = function() {
				noBackPlease();
				// disables backspace on page except on input fields and textarea..
				document.body.onkeydown = function(e) {
					var elm = e.target.nodeName.toLowerCase();
					if (e.which === 8 && (elm !== 'input' && elm !== 'textarea')) {
						e.preventDefault();
					}
					// stopping event bubbling up the DOM tree..
					e.stopPropagation();
				};
			};
		})(window);
	</script>

	<script>
		$(function() {
			$('.resizable').resizable({
				start: function(event, ui) {
					$('iframe').css('pointer-events', 'none');
				},
				stop: function(event, ui) {
					$('iframe').css('pointer-events', 'auto');
				}
			});
		});
	</script>
</head>

<body>
	<?php include 'header.php'; ?>
	<!-- SECTION -->

		<!-- container -->
		<div class="container">
			<!-- row -->

			<!-- Product main img -->

			<?php
			include 'db.php';
			@$product_id = $_GET['p'];

			$sql = " SELECT * FROM products ";
			$sql = " SELECT * FROM products WHERE product_id = $product_id";
			if (!$con) {
				die("Connection failed: " . mysqli_connect_error());
			}
			$result = mysqli_query($con, $sql);
			if (@mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo '
									
                                    
                                
                              
                                    <div class="resizable">
                                        <iframe id="iframe"   style="width:100%;scrolling:no; height:100%; border:groove #000" src="book_images/' . $row['product_image'] . '" alt=""> </iframe>
                                    </div>

                                  
                            
                                		';

			?>

			
					<!-- FlexSlider -->



					

			<?php
					echo '
									
                                    
                                   
                    <div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name">' . $row['product_title'] . '</h2>
							<div>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<a class="review-link" href="#review-form">10 Review(s) | Add your review</a>
							</div>
							<div>
								<h3 class="product-price">$' . $row['product_price'] . '<del class="product-old-price">$990.00</del></h3>
								<span class="product-available">In Stock</span>
							</div>
							<p>  <b>Description</b>  </p>

							<div class="product-options">
								<label>
									Size
									<select class="input-select">
										<option value="0">X</option>
									</select>
								</label>
								<label>
									Color
									<select class="input-select">
										<option value="0">Red</option>
									</select>
								</label>
							</div>

							<div class="add-to-cart">
								<div class="qty-label">
									Qty
									<div class="input-number">
										
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
								</div>
								<div class="btn-group" style="margin-left: 25px; margin-top: 15px">
								<button class="add-to-cart-btn" pid="' . $row['product_id'] . '"  id="product" ><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
								
								
							</div>

							<ul class="product-btns">
								<li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
								<li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
							</ul>

							<ul class="product-links">
								<li>Category:</li>
								<li><a href="#">Books</a></li>
								<li><a href="#">Magzines</a></li>
							</ul>

							<ul class="product-links">
								<li>Share:</li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>

						</div>
					</div>
									
				
				
			
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		
			<!-- container -->
			<div class="container">
				<!-- row -->
				
                    
					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">Related Products</h3>
							
						</div>
					</div>
                    ';
					$_SESSION['product_id'] = $row['product_id'];
				}
			}
			?>
			<?php
			include 'db.php';
			@$product_id = $_GET['p'];

			$product_query = "SELECT * FROM products,category WHERE product_cat=cat_id AND product_id BETWEEN $product_id AND $product_id+3";
			$run_query = @mysqli_query($con, $product_query);
			if (@mysqli_num_rows($run_query) > 0) {

				while ($row = mysqli_fetch_array($run_query)) {
					$pro_id    = $row['product_id'];
					$pro_cat   = $row['product_cat'];
					$pro_brand = $row['product_desc'];
					$pro_title = $row['product_title'];
					$pro_price = $row['product_price'];
					$pro_image = $row['product_image'];

					$cat_name = $row["cat_desc"];

					echo "
				
                        
                                <div class='col-md-3 col-xs-6'>
								<a href='product.php?p=$pro_id'><div class='product'>
									<div class='product-img'>
										<img src='book_images/$pro_image' style='max-height: 170px;' alt=''>
										<div class='product-label'>
											<span class='sale'>-30%</span>
											<span class='new'>NEW</span>
										</div>
									</div></a>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>$pro_price<del class='product-old-price'>$990.00</del></h4>
										<div class='product-rating'>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
										<div class='product-btns'>
											<button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
											<button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>add to compare</span></button>
											<button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span></button>
										</div>
									</div>
									<div class='add-to-cart'>
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
									</div>
								</div>
                                </div>
							
                        
			";
				};
			}
			?>
			<!-- product -->

			<!-- /product -->

		</div>
		<!-- /row -->


		<!-- /container -->
	</div>
	<!-- /Section -->
</body>

</html>