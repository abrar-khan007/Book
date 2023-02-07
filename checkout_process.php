<?php
session_start();
include "db.php";
if (isset($_SESSION["uid"])) {
	
	@$f_name = $_POST["firstname"];
	@$email = $_POST['emaill'];
	@$address = $_POST['address1'];
    @$city = $_POST['city1'];
    @$state = $_POST['state'];
    @$zip= $_POST['zip'];
    @$cardname= $_POST['cardname'];
    @$cardnumber= $_POST['cardNumber'];
    @$expdate= $_POST['expdate'];
    @$cvv= $_POST['cvv'];
    @$user_id=$_SESSION["uid"];
    @$cardnumberstr=(string)$cardnumber;
    @$count=$_POST['total_count'];
    @$product_price = $_POST['product_price'];
    
    
    $sql0="SELECT order_id from `orders_info`";
    $runquery=mysqli_query($con,$sql0);
    if (@mysqli_num_rows($runquery) == 0) {
        echo( mysqli_error($con));
        $order_id=1;
    }else if (mysqli_num_rows($runquery) > 0) {
        $sql2="SELECT MAX(order_id) AS max_val from `orders_info`";
        $runquery1=mysqli_query($con,$sql2);
        $row = mysqli_fetch_array($runquery1);
        $order_id= $row["max_val"];
        $order_id=$order_id+1;
        echo( mysqli_error($con));
    }
	$sql = "INSERT INTO `orders_info`(`order_id`, `user_id`, `f_name`, `email`, `address`, `city`, `state`, `zip`, `cardname`, `cardnumber`, `expdate`, `prod_count`, `total_amt`, `cvv`)
	VALUES ($order_id,'$user_id','$f_name','$email','$address','$city','$state','$zip','$cardname','$cardnumber','$expdate','$count','$product_price','$cvv')";
    if(mysqli_query($con,$sql)){
        $i=1;
        $product_id=0;
        $pro_price=0;
        $pro_qty=0;
        while($i<=$count){
            $str=(string)$i;
            $product_id+$str = $_POST['product_id_'.$i];
            $product_id=$pro_id_+$str;		
            $product_price_+$str = $_POST['product_price_'.$i];
            $product_price=$pro_price_+$str;
            $qty_+$str = $_POST['qty_'.$i];
            $pro_qty=$pro_qty_+$str;
            $product_price=(int)$pro_price*(int)$qty;
            $qery= mysqli_query($con,"SELECT * FROM cart WHERE status='completed'");
               $count1=mysqli_num_rows($qery);


        $result=mysqli_query($con,"select order_id, product_price from orders,products,user_info where orders.product_id=products.product_id and user_info.user_id=orders.user_id ")
          or die ("query 11 incorrect.....");          if(mysqli_query($con,$sql1)){
                $l_sql="INSERT INTO 'orders_info'('total_amt`) VALUES ('$product_price')";
                if(mysqli_query($con,$l_sql)){
                    echo"<script>window.location.href='store.php'</script>";
                }else{
                    echo(mysqli_error($con));
                }
            }else{
                echo(mysqli_error($con));
            }
            $i++;
        }
    }else{   
        echo(mysqli_error($con));
        
    }
    
}else{
    echo"<script>window.location.href='index.php'</script>";
}
