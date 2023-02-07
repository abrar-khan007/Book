<?php

include("db.php");
error_reporting(0);
if (isset($_GET['action']) && $_GET['action'] != "" && $_GET['action'] == 'delete') {
    $user_id = $_GET['user_id'];
    ///////delete/////////
    // $result = mysqli_query($con, "SELECT `role` from user_info where user_id='$user_id")
    //     or die("query is incorrect...");


    /*this is delet query*/
    mysqli_query($con, "UPDATE `user_info` SET `role`='user' WHERE `user_id`='$user_id'") or die("query is incorrect11...");
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
    <title> Panel</title>
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
                <h1>Role / Page <?php echo $page; ?></h1>
            </div><br>
            <div class='table-responsive'>
                <div style="overflow-x:scroll;">
                    <table class="table  table-hover table-striped" style="font-size:18px">
                        <tr>
                            <th>User_id</th>
                            <th>Name</th>
                            <th>Number</th>
                            <th>
                                <a class=" btn btn-primary">Action</a>
                            </th>
                        </tr>

                        <?php
                        $result = mysqli_query($con, "SELECT `user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`, `Date`, `role` FROM `user_info` ORDER BY `user_id` ASC Limit $page1,10") or die("query 1 incorrect.....");

                        while (list($user_id, $name, $sname, $email, $password, $mobile, $address1, $address2, $date, $role) = mysqli_fetch_array($result)) {
                            echo "<tr><td>$user_id</td><td>$email</td><td>$role</td>
<td>

<a class=' btn btn-success' href='loginN.php?user_id=$user_id&action=accept'>Set Admin</a>
<a class=' btn btn-success' href='new_p.php?user_id=$user_id&action=delete'>Remove</a>
</td></tr>";
                        }

                        ?>
                    </table>
                </div>
            </div>
            <nav align="center">

                <?php
                //counting paging

                $paging = mysqli_query($con, "SELECT `user_id`,`email`, `mobile`,`role` FROM `user_info`");
                $count = mysqli_num_rows($paging);

                $a = $count / 5;
                $a = ceil($a);
                echo "<bt>";
                echo "<bt>";
                for ($b = 1; $b <= $a; $b++) {
                ?>
                    <ul class="pagination" style="border:groove #666">
                        <li><a class="label-info" href="new_p.php?page=<?php echo $b; ?>"><?php echo $b . " "; ?></a></li>
                    </ul>
                <?php
                }
                ?>
            </nav>
        </div>
    </div>

</body>

</html>