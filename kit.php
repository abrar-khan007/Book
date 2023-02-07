
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="k.css" rel="stylesheet">
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
  

    <script id="jsbin-javascript">
(function (global)
 {
	if(typeof (global) === "undefined")
	{
		throw new Error("window is undefined");
	}
    var _hash = "!";
    var noBackPlease = function ()
	{
        global.location.href += "#";
		
        global.setTimeout(function ()
		{
            global.location.href += "!";
        }, 50);
    };	
	
    global.onhashchange = function ()
	{
        if (global.location.hash !== _hash)
			{
            global.location.hash = _hash;
        }
    };
    global.onload = function ()
	{        
		noBackPlease();
		
		document.body.onkeydown = function (e) 
		{
            var elm = e.target.nodeName.toLowerCase();
            if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea'))
				{
                e.preventDefault();
            }
            
            e.stopPropagation();
        };		
    };
})(window);
</script>
</head>
<body>
<?php
include 'header.php';
?>
      <div class="main main-raised"> 
        
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div id="get_category">
				        </div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Price</h3>
							<div class="price-filter">
								<div id="price-slider" class="noUi-target noUi-ltr noUi-horizontal"><div class="noUi-base"><div class="noUi-origin" style="left: 0%;">
								<div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal"
								aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="0.0" aria-valuetext="1.00" style="z-index: 5;"></div></div>
								
								<div class="noUi-connect" style="left: 0%; right: 0%;"></div><div class="noUi-origin" style="left: 100%;">
								<div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal"
								aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="100.0" aria-valuetext="999.00" style="z-index: 4;">
								</div></div>
								
								</div></div>
								
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
								<li ><a class="active" href="#aside">1</a></li>
								
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
</body>
</html>