<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="bootstrap.min.css" rel="stylesheet">
	<!-- <link href="k.css" rel="stylesheet"> -->
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


	<!-- bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />


	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/styl.css" />
	<link type="text/css" rel="stylesheet" href="css/accountbtn.css" />


	<script id="jsbin-javascript">
		(function(global) {
			if (typeof(global) === "undefined") {
				throw new Error("window is undefined");
			}
			var _hash = "!";
			var noBackPlease = function() {
				global.location.href += "#";

				global.setTimeout(function() {
					global.location.href += "!";
				}, 50);
			};

			global.onhashchange = function() {
				if (global.location.hash !== _hash) {
					global.location.hash = _hash;
				}
			};
			global.onload = function() {
				noBackPlease();

				document.body.onkeydown = function(e) {
					var elm = e.target.nodeName.toLowerCase();
					if (e.which === 8 && (elm !== 'input' && elm !== 'textarea')) {
						e.preventDefault();
					}

					e.stopPropagation();
				};
			};
		})(window);
	</script>

	<style>
		a {
			color: rgba(240, 20, 161, 1);
			font-weight: 600;
			font-size: 15px;
			font-style: normal;
			font-variant: normal;
			font-family: Oswald;
			transition: 0.4s color;
		}

		a:hover,
		a:focus {
			color: rgb(41, 5, 20);
			text-decoration: none;
			font-weight: 600;
			font-size: 15px;
			font-style: normal;
			font-variant: normal;
			font-family: Oswald;
			outline: none;
			transition: 0.4s color
		}


		#navigation {
			background: #FF4E50;

			background: linear-gradient(-137deg, #0c1425 0%, #271706 20%, #462f2a 40%, #582508 60%, #0c1425 80%, #150f07 100%);
			border-bottom: 2px solid #170303;
			border-top: 3px solid #170303;

		}

		#header {

			background: rgb(78, 32, 51);
			background: -webkit-linear-gradient(to right, rgb(81, 42, 14), rgb(48, 42, 11));
			background: linear-gradient(to right, rgb(81, 42, 14), rgb(58, 42, 11));


		}

		#top-header {


			background: rgb(78, 32, 51);
			background: -webkit-linear-gradient(to right, rgb(78, 32, 51), rgb(68, 42, 11));
			background: linear-gradient(to right, rgb(78, 32, 51), rgb(68, 42, 11));


		}

		#footer {
			background: #7474BF;
			background: -webkit-linear-gradient(to right, rgb(81, 52, 14), rgb(48, 42, 11));
			background: linear-gradient(to right, rgb(78, 32, 51), #7474BF);
			transition: 0.5s all;

			color: #c0d044;
		}

		#footer:hover {
			background: #7474BF;
			background: -webkit-linear-gradient(to right, rgb(81, 52, 14), rgb(48, 42, 11));
			background: linear-gradient(to right, rgb(78, 32, 51), #7474BF);
			transition: 0.5s all;

			color: Cyan;
		}

		#bottom-footer {
			background: #c0d044;
			/* fallback for old browsers */
			background: -webkit-linear-gradient(to right, rgb(78, 32, 51), #252525);
			background: linear-gradient(to right, rgb(78, 32, 51), #252526);
			transition: 0.5s all;

		}

		.footer-links li a {
			color: snow;
			transition: 0.3s all;
		}

		.footer-links li a:hover {
			color: teal;
			transition: 0.3s all;
		}

		.mainn-raised {

			margin: -7px 0px 0px;
			border-radius: 6px;
			box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);

		}

		.glyphicon {
			display: inline-block;
			font: normal normal normal 14px/1 FontAwesome;
			font-size: inherit;
			text-rendering: auto;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
		}

		.glyphicon-chevron-left:before {
			content: "\f053"
		}

		.glyphicon-chevron-right:before {
			content: "\f054"
		}
	</style>
</head>

<body>
	<?php
	include 'header.php';
	?>
	 <div class="section mainn mainn-raised">
	

		<div class="section" style="display:inline-block;">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3" style="width:20%;">
						<!-- aside Widget -->
						<div id="get_category">
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Price</h3>
							<div class="price-filter">
								<div id="price-slider" class="noUi-target noUi-ltr noUi-horizontal">
									<div class="noUi-base">
										<div class="noUi-origin" style="left: 0%;">
											<div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="0.0" aria-valuetext="1.00" style="z-index: 5;"></div>
										</div>

										<div class="noUi-connect" style="left: 0%; right: 0%;"></div>
										<div class="noUi-origin" style="left: 100%;">
											<div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="100.0" aria-valuetext="999.00" style="z-index: 4;">
											</div>
										</div>

									</div>
								</div>

								<div class="input-number price-min">
									<input id="price-min" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
								<span>-</span>
								<div class="input-number price-max">
									<input id="price-max" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div id="get_brand">
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Top selling</h3>
							<div id="get_product_home">
								<!-- product widget -->

								<!-- product widget -->
							</div>
						</div>
						<!-- /aside Widget -->
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">
								<label>
									Sort By:
									<select class="input-select">
										<option value="0">Popular</option>
										<option value="1">Position</option>
									</select>
								</label>

								<label>
									Show:
									<select class="input-select">
										<option value="0">20</option>
										<option value="1">50</option>
									</select>
								</label>
							</div>
							<ul class="store-grid">
								<li class="active"><i class="fa fa-th"></i></li>
								<li><a href="#"><i class="fa fa-th-list"></i></a></li>
							</ul>
						</div>
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row" id="product-row">
							<div class="col-md-12 col-xs-12" id="product_msg">
							</div>
							<!-- product -->
							<div id="get_product">
								<!--Here we get product jquery Ajax Request-->
							</div>

							<!-- /product -->
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<span class="store-qty">Showing 20-100 products</span>
							<ul class="store-pagination" id="pageno">
								<li><a class="active" href="#aside">1</a></li>

								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
	</div>
	</div>
</body>

</html>