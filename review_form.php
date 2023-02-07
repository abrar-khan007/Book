<?php
// session_start();

include "db.php";


if (isset($_POST['subsave'])) {
	@$name = $_POST['rname'];
	@$email = $_POST['remail'];
	@$review = $_POST['desc'];

	@$dated_on = date('Y-m-d H:i:s');
	@$rating = $_POST['rating'];
	$sql = "INSERT INTO `review`(`name`, `email`, `review`, `dated_on`, `rating`) VALUES ('$name','$email','$review','$dated_on','$rating')";
	if (mysqli_query($con, $sql)) {
		header("Location: index.php");
		exit;
	}
}

// print_r($_POST);
// exit;


?>

<div class="row">
	<!-- Rating -->
	<div class="col-md-3">
		<div id="rating">
			<div class="rating-avg">
				<span>4.5</span>
				<div class="rating-stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
			</div>
			<ul class="rating">
				<li>
					<div class="rating-stars">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
					<div class="rating-progress">
						<div style="width: 80%;"></div>
					</div>
					<span class="sum">3</span>
				</li>
				<li>
					<div class="rating-stars">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<div class="rating-progress">
						<div style="width: 60%;"></div>
					</div>
					<span class="sum">2</span>
				</li>
				<li>
					<div class="rating-stars">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<div class="rating-progress">
						<div></div>
					</div>
					<span class="sum">0</span>
				</li>
				<li>
					<div class="rating-stars">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<div class="rating-progress">
						<div></div>
					</div>
					<span class="sum">0</span>
				</li>
				<li>
					<div class="rating-stars">
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<div class="rating-progress">
						<div></div>
					</div>
					<span class="sum">0</span>
				</li>
			</ul>
		</div>
	</div>
	<!-- /Rating -->


	<!-- Reviews -->
	<div class="col-md-6">
	<?php
	include 'db.php';


$result = mysqli_query($con, "SELECT `rid`, `name`, `email`,`review`, `dated_on`, `rating` FROM `review`") or die("query 1 incorrect.......");

while ($r = mysqli_fetch_assoc($result)) {


    $rid = $r['rid'];
    $name = $r['name'];
    $email = $r['email'];
	$review =$r['review'];
	$rating =$r['rating'];
    $dated_on = $r['dated_on'];
?>
		<div id="reviews">
			<ul class="reviews">
				<li>
					<div class="review-heading">
						<h5 class="name"><?php echo $name; ?></h5>
						<p class="date"><?php echo $dated_on; ?></p>
						<div class="review-rating">
						<?php if($rating==1){ ?>
	
							<i class="fa fa-star"></i>

						<?php } else if($rating==2){ ?>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>

							<?php } else if($rating==3) { ?>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<?php } else if($rating==4) { ?>
								<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							
							<?php } else { ?>


								<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o empty"></i>

							<?php } ?>
						</div>
					</div>
					<div class="review-body">
						<p><?php echo $review; ?></p>
					</div>
				</li>
				
			</ul>
			<?php }?>
			<ul class="reviews-pagination">
				<li class="active">1</li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<!-- <li><a href="#"><i class="fa fa-angle-right"></i></a></li> -->
			</ul>
		</div>
	
	</div>

	<!-- /Reviews -->

	<!-- Review Form -->
	<div class="col-md-3 mainn">
		<div id="review-form">
			<form action="review_form.php" method="post" class="review-form">
				<input class="input" type="text" name="rname" id="rname" placeholder="Your Name">
				<input class="input" type="email" name="remail" id="remail" placeholder="Your Email">
				<textarea class="input" name="desc" id="desc" placeholder="Your Review"></textarea>
				<div class="input-rating">
					<span>Your Rating: </span>
					<div class="stars">
						<input id="star5" name="rating" value="5" type="radio"><label for="star5"></label>
						<input id="star4" name="rating" value="4" type="radio"><label for="star4"></label>
						<input id="star3" name="rating" value="3" type="radio"><label for="star3"></label>
						<input id="star2" name="rating" value="2" type="radio"><label for="star2"></label>
						<input id="star1" name="rating" value="1" type="radio"><label for="star1"></label>
					</div>
				</div>
				<button class="primary-btn" type="submit" name="subsave" id="subsave">Submit</button>
			</form>
		</div>
	</div>
	<!-- /Review Form -->