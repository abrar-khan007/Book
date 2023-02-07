
<!-- SECTION -->
<div class="section mainn mainn-raised">


	<!-- container -->
	<!-- <div class="container">
			
				
			</div> -->
	<!-- /container -->
</div>
<!-- /SECTION -->



<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<!-- <div class="row"> -->

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">New Books</h3>
					<div class="section-nav">
						<ul class="section-tab-nav tab-nav">
							<li class="active"><a data-toggle="tab" href="#tab1">Books and Magzines </a></li>
							<li><a data-toggle="tab" href="#tab1">books and Atlas</a></li>
							<li><a data-toggle="tab" href="#tab1">Adventure books</a></li>
							<li><a data-toggle="tab" href="#tab1">Weekly Books</a></li>
							<li><a data-toggle="tab" href="#tab1">Story books</a></li>
							<li><a data-toggle="tab" href="#tab1">cartoon books for Kids</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /section title -->

			<!-- Products tab & slick -->
			<div class="col-md-12 mainn mainn-raised">
				<div class="row">
					<div class="products-tabs">
						<!-- tab -->
						<div id="tab1" class="tab-pane active">
							<div class="products-slick" data-nav="#slick-nav-1">

								<?php
								include 'db.php';


								$product_query = "SELECT * FROM book_publication,category WHERE id=cat_id AND id BETWEEN 0 AND 45";
								$run_query = mysqli_query($con, $product_query);
								if (mysqli_num_rows($run_query) > 0) {

									while ($row = mysqli_fetch_array($run_query)) {
										$pros_id    = $row['id'];
										$pro_cat   = $row['book_title'];
										$pro_image = $row['pic_book'];
										$pro_brand = $row['book_details'];
										@$pro_title = $row['category'];
										$pro_price = $row['author'];


										$cat_name = $row["publication"];

										echo "
				
                        
                                
								<div style='width:280px;display:inline-block;' class='product'>
									<a href='product.php?p=$pros_id'><div class='product-img'>
									<iframe src='book_images/$pro_image' style='width:100%;max-height: 170px;scrolling:no;frameborder:0;' alt='na'>  </iframe> 
										<div class='product-label'>
											<span class='sale'>-20%</span>
											<span class='new'>NEW</span>
										</div>
									</div></a>
									
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pros_id'>$pro_title</a></h3>
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
											<button class='quick-view'><a href='product.php?p=$pros_id'><i class='fa fa-eye'></i></a><span class='tooltipp'>quick view</span></a></button>
										</div>
									</div>
									<div class='add-to-cart'>
										<button pid='$pros_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'>
										<i class='fa fa-shopping-cart'></i> add to cart</button>
									</div>
								</div>
                               
							
                        
			";
									};
								}
								?>
								<!-- product -->


								<!-- /product -->


								<!-- /product -->
							</div>
							<div id="slick-nav-1" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->
					</div>
				</div>
			</div>
			<!-- Products tab & slick -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- HOT DEAL SECTION -->
<div id="hot-deal" class="section mainn mainn-raised">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<div class="hot-deal">
					<ul class="hot-deal-countdown">
						<li>
							<div>
								<h3>01</h3>
								<span>Days</span>
							</div>
						</li>
						<li>
							<div>
								<h3>07</h3>
								<span>Hours</span>
							</div>
						</li>
						<li>
							<div>
								<h3>57</h3>
								<span>Mins</span>
							</div>
						</li>
						<li>
							<div>
								<h3>60</h3>
								<span>Secs</span>
							</div>
						</li>
					</ul>
					<h2 class="text-uppercase"> Deal of the Day</h2>
					<p>New Collection Up to 40% OFF</p>
					<a class="primary-btn cta-btn" href="show_book.php">Shop Book now</a>
				</div>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /HOT DEAL SECTION -->


<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">Books Trending</h3>
					<div class="section-nav">
						<ul class="section-tab-nav tab-nav">
							<li class="active"><a data-toggle="tab" href="#tab2"> Motivational Book</a></li>
							<li><a data-toggle="tab" href="#tab2">Horror Book</a></li>
							<li><a data-toggle="tab" href="#tab2">Kids Book</a></li>
							<li><a data-toggle="tab" href="#tab2">Beauty, Health, and Grocery Books</a></li>
							<li><a data-toggle="tab" href="#tab2">Sports, Fitness Guide</a></li>
							<li><a data-toggle="tab" href="#tab2">Book with Pics</a></li>
							<li><a data-toggle="tab" href="#tab2">Books with events </a></li>
						</ul>
					</div>
				</div>
			</div>

			<!-- /section title -->

			<!-- Products tab & slick -->
			<div class="col-md-12 mainn mainn-raised">
				<div class="row">
					<div class="products-tabs">
						<!-- tab -->
						<div id="tab2" class="tab-pane fade in active">
							<div class="products-slick" data-nav="#slick-nav-2">
								<!-- product -->
								<?php
								include 'db.php';


								$product_query = "SELECT * FROM products,category WHERE product_cat=cat_id AND pro_status='active' ORDER BY product_id DESC LIMIT 0,8";
								$run_query = mysqli_query($con, $product_query);
								if (mysqli_num_rows($run_query) > 0) {

									while ($row = mysqli_fetch_array($run_query)) {
										$pros_id    = $row['product_id'];
										$pro_cat   = $row['product_cat'];
										$pro_brand = $row['product_desc'];
										$pro_title = $row['product_title'];
										$pro_price = $row['product_price'];
										$pro_image = $row['product_image'];

										$cat_name = $row["cat_desc"];

										echo "
				
                        
                                
								<div style='width:280px;display:inline-block;' class='product'>
									<a href='product.php?p=$pros_id'><div class='product-img'>
									<iframe src='book_images/$pro_image' style='width:100%;max-height: 170px;scrolling:no;frameborder:0' alt=''>  </iframe>
										<div class='product-label'>
											<span class='sale'>-30%</span>
											<span class='new'>NEW</span>
										</div>
									</div></a>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pros_id'>$pro_title</a></h3>
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
											<button class='quick-view'><a href='product.php?p=$pros_id'><i class='fa fa-eye'></i></a><span class='tooltipp'>quick view</span></button>
										</div>
									</div>
									<div class='add-to-cart'>
										<button pid='$pros_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'>
										<i class='fa fa-shopping-cart'></i> add to cart</button>
									</div>
								</div>
                               
							
                        
			";
									};
								}
								?>

								<!-- /product -->
							</div>
							<div id="slick-nav-2" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->
					</div>
				</div>
			</div>
			<!-- /Products tab & slick -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->

<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-4 col-xs-6">
				<div class="section-title">
					<h4 class="title">All Available</h4>
					<div class="section-nav">
						<div id="slick-nav-3" class="products-slick-nav"></div>
					</div>
				</div>


				<div class="products-widget-slick" data-nav="#slick-nav-3">
					<div id="get_product_home">
						<!-- product widget -->

						<!-- product widget -->
					</div>

					<div id="get_product_home2">
						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product01.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">Famous author Tony Robins</a></h3>
								<h4 class="product-price">$680.00 <del class="product-old-price">$995.00</del></h4>
							</div>
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product02.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">book with sufi stories</a></h3>
								<h4 class="product-price">$780.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product03.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">History book</a></h3>
								<h4 class="product-price">$930.00 <del class="product-old-price">$1090.00</del></h4>
							</div>
						</div>
						<!-- product widget -->
					</div>
				</div>
			</div>

			<div class="col-md-4 col-xs-6">
				<div class="section-title">
					<h4 class="title">Top selling</h4>
					<div class="section-nav">
						<div id="slick-nav-4" class="products-slick-nav"></div>
					</div>
				</div>

				<div class="products-widget-slick" data-nav="#slick-nav-4">
					<div>
						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product04.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">Environmental book</a></h3>
								<h4 class="product-price">$780.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product05.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">book for SNMD</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product06.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">Book with pictures</a></h3>
								<h4 class="product-price">$850.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- product widget -->
					</div>

					<div>
						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product07.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#"> Book of Scenries</a></a></h3>
								<h4 class="product-price">$950.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product08.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">Ancient history of Napoleon</a></h3>
								<h4 class="product-price">$1080.00 <del class="product-old-price">$1990.00</del></h4>
							</div>
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product09.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#"> Atlas of World tour</a></h3>
								<h4 class="product-price">$880.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- product widget -->
					</div>
				</div>
			</div>

			<div class="clearfix visible-sm visible-xs">

			</div>

			<div class="col-md-4 col-xs-6">
				<div class="section-title">
					<h4 class="title">Upcomming </h4>
					<div class="section-nav">
						<div id="slick-nav-5" class="products-slick-nav"></div>
					</div>
				</div>

				<div class="products-widget-slick" data-nav="#slick-nav-5">
					<div>
						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product01.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">Unknown Facts</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$1090.00</del></h4>
							</div>
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product02.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">Misseries amd messages</a></h3>
								<h4 class="product-price">$900.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product03.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">Kids book</a></h3>
								<h4 class="product-price">$680.00 <del class="product-old-price">$700.00</del></h4>
							</div>
						</div>
						<!-- product widget -->
					</div>

					<div>
						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product04.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">Geological survey Books</a></h3>
								<h4 class="product-price">$880.00 <del class="product-old-price">$970.00</del></h4>
							</div>
						</div>
						<!-- /product widget -->


						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product05.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">Hidden treasures</a></h3>
								<h4 class="product-price">$950.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product06.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">tonny Black book</a></h3>
								<h4 class="product-price">$920.00 <del class="product-old-price">$1090.00</del></h4>
							</div>
						</div>
						<!-- product widget -->
					</div>
				</div>
			</div>

		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
</div>