<?php
//this is the form page not findex!
include("db.php");
session_start();

//if post is submit 

if (isset($_POST['submit'])) {
    @$book_title = $_POST['book_title'];
    @$details = $_POST['details'];
    @$category = $_POST['category'];
    @$created_on = $_POST['created_on'];
    @$author = $_POST['author'];
    @$publication = $_POST['publication'];
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
      
        mysqli_query($con, "INSERT INTO `book_publication`(`id`, `book_title`, `pic_book`, `book_details`, `Category`, `created_on`, `author`, `publication`, `status`)

  VALUES ('', '".$book_title."','".$book_name."', '".$details."', '".$category."', '".$created_on."', '".$author."', '".$publication."', '".$book_status."')") or die("query incorrect");


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
                    <h1><span class="glyphicon glyphicon-tag"></span> Add product </h1>
                </div><br>
                <div class="panel-body" style="background-color:maroon;">
                    <div class="col-lg-7">
                        <div class="well">
                            <form action="findex.php" method="post" name="form" enctype="multipart/form-data">
                                <p> Book Title</p>
                                <input class="input-lg thumbnail form-control" type="text" name="book_title" id="book_title" autofocus style="width:100%" placeholder="Product Name" required>
                                <p>Book Description</p>
                                <textarea class="thumbnail form-control" name="details" id="details" style="width:100%; height:100px" placeholder="write here..." required></textarea>
                                <p>Add File</p>
                                <div style="background-color:#CCC">
                                    <input type="file" style="width:100%" name="book" class="btn thumbnail" id="book">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="67108864" />
                                </div>
                        </div>
                        <div class="well">
                            <h3>Category</h3>
                            <p>Category</p>
                            <div class="input-group">
                                <div class="input-group-addon">Cat</div>
                                <input type="text" class="form-control" name="category" id="category" placeholder="Book Category" required>
                            </div><br>


                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="well">
                            <h3>Created on</h3>
                            <p>Created on</p>
                            <input type="Date" name="created_on" id="created_on" class="form-control" placeholder="1 Sunday,2 Monday">
                            <br>
                            <p>Author</p>
                            <input type="text" name="author" id="author" class="form-control" placeholder="1 user,2 author,3 Key_author,4 General ">
                            <br>
                            <p>Publication</p>
                            <input type="text" name="publication" id="publication" class="form-control" placeholder="Science Publication, Journal of computer science,etc">
                        </div>
                    </div>

                    <div align="center">
                        <button type="submit" name="submit" id="submit" class="btn btn-default" style="width:100px; height:60px"> Cancel</button>
                        <button type="submit" name="submit" id="submit" class="btn btn-success" style="width:150px; height:60px"> Add Book</button>
                    </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</body>

</html>