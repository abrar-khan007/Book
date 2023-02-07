<?php
//this is the form page not findex!
include("db.php");
session_start();

//if post is submit 

if (isset($_POST['submit'])) {
    @$book_cat = $_POST['book_cat'];
    @$book_desc = $_POST['book_desc'];
    @$book_title = $_POST['book_title'];
   
    @$book_price = $_POST['book_price'];
    @$cat_desc = $_POST['cat_desc'];
    @$book_status = "active";

    // print_r($_POST);

    //book coding
    $book_name = $_FILES['book']['name'];
    $book_type = $_FILES['book']['type'];

    $book_tmp_name = $_FILES['book']['tmp_name'];
    $book_size = $_FILES['book']['size'];
    //for image  author books  reviews
    if ($book_name!="" && $book_type == "image/jpeg" || $book_type == "image/jpg" || $book_type == "image/png" || $book_type == "image/gif" ||$book_type == "application/pdf") {
        if ($book_size <= 50000000)

            $book_name = time() . "_" . $book_name;
        move_uploaded_file($book_tmp_name, "book_images/" . $book_name);
      
        mysqli_query($con, "INSERT INTO `products`(`product_id`, `product_cat`, `product_desc`, `product_title`, `product_price`, `product_image`, `cat_desc`, `pro_status`) 

  VALUES ('', '".$book_cat."','".$book_desc."', '".$book_title."', '".$book_price."', '".$book_name."', '".$cat_desc."', '".$book_status."')") or die("query incorrect");


        header("location: submit_form.php?success=1");
    }
    else if ($book_name!="" && $book_type == "application/pdf"){
        move_uploaded_file($_FILES['book']['tmp_name'], "bookpdf/" . $_FILES['book']['name']);
        $querry = mysqli_query($con, "INSERT INTO `p_pdf`(`pdf_doc`) values('" . $book_name . "')");
        if ($querry) {
            echo "PDF FILE UPLOAD SUCCESS";
        } else {
            echo "upload errorSS";
        }
    } else{echo"not available";}

    mysqli_close($con);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Book</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/k.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

</head>

<body>


    <div style="margin: 0px auto;" class="container-fluid">
        <?php include 'sidebar.php' ?>
        <div class="col-md-9 content" style="margin-left:10px">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:cyan;">
                    <h1><span class="glyphicon glyphicon-tag"></span> Upload Book </h1>
                </div><br>
                <div class="panel-body" style="background-color:maroon;">
                    <div class="col-lg-7">
                        <div class="well">
                            <form action="upload.php" method="post" name="form" enctype="multipart/form-data">
                                <p> Book Category</p>
                                <input class="input-lg thumbnail form-control" type="number" name="book_cat" id="book_cat" autofocus style="width:100%" placeholder="Book Category" required>
                                <p>Book Description</p>
                                <textarea class="thumbnail form-control" name="book_desc" id="book_desc" style="width:100%; height:100px" placeholder="write here..." required></textarea>
                                <p> Book Title</p>
                                <input class="input-lg thumbnail form-control" type="text" name="book_title" id="book_title" autofocus style="width:100%" placeholder="Book Title" required>
                                <p> Book Price</p>
                                <input class="input-lg thumbnail form-control" type="number" name="book_price" id="book_price" autofocus style="width:100%" placeholder="Book Price" required>
                                <p>Add File</p>
                                <div style="background-color:#CCC">
                                    <input type="file" style="width:100%" name="book" class="btn thumbnail" id="book">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="67108864" />
                                </div>
                        </div>
                        <div class="well">
                            <h3>Category</h3>
                            <div class="input-group">
                                <div class="input-group-addon">Cat desc</div>
                                <input type="text" class="form-control" name="cat_desc" id="cat_desc" placeholder="Book Category" required>
                            </div><br>


                        </div>

                        <div align="center">
                        <button type="submit" name="submit" id="submit" class="btn btn-default" style="width:100px; height:60px"> Cancel</button>
                        <button type="submit" name="submit" id="submit" class="btn btn-success" style="width:150px; height:60px"> upload Book</button>
                    </div>
                    </div>

                   

                    </form>

                </div>
            </div>
        </div>
    </div>
</body>

</html>