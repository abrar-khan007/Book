<?php
@$cat_id = $_GET['cat_id'];
include("db.php");
error_reporting(0);
if (isset($_GET['action']) && $_GET['action'] != "" && $_GET['action'] == 'delete') {
    $cat_id = $_GET['cat_id'];
    ///////picture delete/////////
    $result = mysqli_query($con, "SELECT `cat_id`, `cat_name`, `cat_desc`, `created_on` FROM `category` where cat_id=$cat_id")
        or die("query is incorrect...");

    list($image) = mysqli_fetch_array($result);
    $path = "book_images/$image";

    if (file_exists($path) == true) {
        unlink($path);
    } else {
    }
    /*this is delet query*/
    mysqli_query($con, "delete from category where cat_id='$cat_id'") or die("query is incorrect...");
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
    <title>category Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/k.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>

<body>
    <div class="col-md-9 content" style="margin-left:10px">
        <div class="panel-heading" style="background-color:#c4e17f">
            <h1>Category listing </h1>
        </div><br>
        <div class='table-responsive'>
            <div style="overflow-x:scroll;">
                <table class="table  table-hover table-striped" style="font-size:18px">
                    <tr>

                        <th>Id </th>
                        <th>Name </th>
                        <th>Description </th>
                        <th>Created </th>
                        <th>view </th>
                        <th>Edit </th>
                        <th>Delete</th>
                        <th>
                            <a class=" btn btn-primary" href="category.php">Add New</a>
                        </th>
                    </tr>
                    <?php
                    $sqll = mysqli_query($con, "SELECT `cat_id`, `cat_name`, `cat_desc`, `created_on` FROM `category` ORDER BY cat_id DESC") or die("query 1 incorrect.......");
                    while (list($cat_id, $cat_name, $cat_desc, $created_on) = mysqli_fetch_array($sqll)) {
                        echo "<tr>
<td>$cat_id </td>
<td>$cat_name</td>
<td>$cat_desc</td>
<td>$created_on</td>
<td> <a class=' btn btn-success' href='read_c.php?cat_id=$cat_id'>View </a>   </td> 
<td> <a class=' btn btn-success' href='edlist_c.php?cat_id=$cat_id'>Edit</a>  </td>

<td><a class=' btn btn-danger' href='list_c.php?cat_id=$cat_id&action=delete'>Delete</a></td></tr>";
                    }

                    ?>
                </table>
            </div>
        </div>

        <nav align="center">


            <?php
            //counting paging

            $paging = mysqli_query($con, "SELECT `cat_id`, `cat_name`, FROM `category` ");
            $count = mysqli_num_rows($paging);

            $a = $count / 10;
            $a = ceil($a);
            echo "<bt>";
            echo "<bt>";
            for ($b = 1; $b <= $a; $b++) {
            ?>
                <ul class="pagination" style="border:groove #666">
                    <li><a class="label-info" href="list.php?page=<?php echo $b; ?>"><?php echo $b . " "; ?></a></li>
                </ul>
            <?php
            }
            ?>
        </nav>
    </div>
    </div>
</body>

</html>