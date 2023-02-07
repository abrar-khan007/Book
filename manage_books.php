<?php

include("db.php");
error_reporting(0);
if (isset($_GET['action']) && $_GET['action'] != "" && $_GET['action'] == 'delete') {
    $product_id = $_GET['product_id'];
    ///////delete/////////
    // $result = mysqli_query($con, "SELECT `role` from user_info where product_id='$product_id")
    //     or die("query is incorrect...");


    /*this is delet query*/
    mysqli_query($con, "UPDATE `products` SET  `pro_status`='inactive' WHERE `product_id`='$product_id'") or die("query is incorrect11...");
}

///pagination
$page = $_GET['page'];

if ($page == "" || $page == "1") {
    $page1 = 0;
} else {
    $page1 = ($page * 10) - 10;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Book Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/k.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>

<body>
    <?php include "sidebar.php"; ?>
    <div class="container-fluid main-container">

        <div class="col-md-9 content" style="margin-left:10px">


            <div class="panel-heading" style="background-color:#c4e17f">
                <h1>Books / Page <?php echo $page; ?></h1>
            </div><br>
            <div class='table-responsive'>
                <div style="overflow-x:scroll;">
                    <table class="table  table-hover table-striped" style="font-size:18px">
                        <tr>
                            <th>id</th>
                            <th>Category</th>
                            <th>Description
</th>
                            <th>Title
</th>
                            <th>Price
</th>
                            <th>Status
</th>
                            <th>
                                <a class=" btn btn-primary">Action</a>
                            </th>
                        </tr>

                        <?php
                        $result = mysqli_query($con, "SELECT `product_id`, `product_cat`, `product_desc`, `product_title`, `product_price`, `pro_status` FROM `products` ORDER BY `product_id` DESC Limit $page1,10") or die("query 1 incorrect.....");

                        while (list($product_id, $product_cat, $product_desc, $product_title, $product_price, $pro_status) = mysqli_fetch_array($result)) {

                            echo "<tr><td>$product_id</td><td>$product_cat</td><td>$product_desc</td><td>$product_title</td><td>$product_price</td><td>$pro_status</td>
<td>
<a class=' btn btn-success' href='manageN.php?product_id=$product_id&action=accept'>Show </a>
<a class=' btn btn-success' href='manage_books.php?product_id=$product_id&action=delete'>Remove</a>
</td></tr>";
                        }

                        ?>
                    </table>
                </div>
            </div>
            <nav align="center">

                <?php
                //counting paging

                $paging = mysqli_query($con, "SELECT `product_id`,`product_cat`, `product_desc`, `product_title`, `product_price`, `pro_status` FROM `products`");
                $count = mysqli_num_rows($paging);

                $a = $count / 5;
                $a = ceil($a);
                echo "<bt>";
                echo "<bt>";
                for ($b = 1; $b <= $a; $b++) {
                ?>
                    <ul class="pagination" style="border:groove #666">
                        <li><a class="label-info" href="manage_books.php?page=<?php echo $b; ?>"><?php echo $b . " "; ?></a></li>
                    </ul>
                <?php
                }
                ?>
            </nav>
        </div>
    </div>

</body>

</html>