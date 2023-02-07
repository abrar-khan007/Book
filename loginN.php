<?php
include("db.php");
@$pId=$_GET['user_id'];
//////fetch  id  to get action executed/////////
$result=mysqli_query($con,"UPDATE `user_info` SET `role`='admin' WHERE user_id='$pId'");
echo "<script> location.href='new_p.php'; </script>";
