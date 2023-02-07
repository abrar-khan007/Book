<?php
include("db.php");
@$pId=$_GET['product_id'];
//////fetch  id  to get action executed/////////
$result=mysqli_query($con,"UPDATE `products` SET `pro_status`='active' WHERE product_id='$pId'");
echo "<script> location.href='manage_books.php'; </script>";
