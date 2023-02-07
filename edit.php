<?php
error_reporting(E_ALL & ~E_NOTICE);
@$id = $_REQUEST['id'];
include 'db.php';
$sqll = mysqli_query($con, "SELECT `id`, `book_title`, `pic_book`, `book_details`, `Category`, `created_on`, `author`, `publication`, `status` FROM `book_publication`") or die("query 1 incorrect.......");

while ($r = mysqli_fetch_array($sqll)) {
    @$id = $r['id'];
    @$book_title = $r['book_title'];
    @$book_pic = $r['pic_book'];
    @$details = $r['book_details'];
    @$category = $r['Category'];
    @$created_on = $r['created_on'];
    @$author = $r['author'];
    @$publication = $r['publication'];
    @$book_status = $r['status'];

    // print_r($details);
}

if (isset($_POST['btnsav'])) {
    
    @$book_title = $_POST['book_title'];
    @$details = $_POST['details'];
    @$book_pic = $_POST['book'];
    @$category = $_POST['category'];
    @$created_on = $_POST['created_on'];
    @$author = $_POST['author'];
    @$publication = $_POST['publication'];
    @$book_status = "active";
    //book coding
    @$book_name = $_FILES['book']['name'];
    @$book_type = $_FILES['book']['type'];
    @$book_tmp_name = $_FILES['book']['tmp_name'];
    @$book_size = $_FILES['book']['size'];

    if ($book_type == "image/jpeg" || $book_type == "image/jpg" || $book_type == "image/png" || $book_type == "image/gif" || $book_type == "application/pdf") {
        if ($book_size <= 50000000)

            @$book_name = time() . "_" . $book_name;
        move_uploaded_file($book_tmp_name, "book_images/" . $book_name);
        mysqli_query($con, "UPDATE `book_publication` SET `book_title`='" . $book_title . "', `pic_book`='" . $book_pic . "', `book_details`='" . $details . "', `Category`='" . $category . "', `created_on`='" . $created_on . "', `author`='" . $author . "', `publication`='" . $publication . "', `status`='" . $book_status . "' where id='" . $id . "'") or
            die("Query 2 is inncorrect..........");
        header("location: show_book.php");
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Book edit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/k.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

</head>

<body>
    <?php include("sidebar.php"); ?>

    <div style="margin: 0px auto;" class="container-fluid">

        <div class="col-md-9 content" style="margin-left:10px">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:cyan;">
                    <h1><span class="glyphicon glyphicon-tag"></span> Add Book </h1>
                </div><br>
                <div class="panel-body" style="background-color:maroon;">
                    <form action='edit.php' method='post' name="form" enctype="multipart/form-data">
                       
                        <p> Book Title</p>
                        <input class="input-lg thumbnail form-control" type="text" name="book_title" id="book_title" value="<?php echo $book_title; ?>" autofocus style="width:100%" placeholder="Product Name" required>
                        <p>Book Description</p>
                        <input class="thumbnail form-control" type="textarea" name="details" id="details" value="<?php echo $details; ?>" style="width:100%; height:100px" required>
                        <p>Add File</p>
                        <div style="background-color:#CCC">
                            <input type="file" style="width:100%" name="book" class="btn thumbnail" id="book">
                        </div>

                        <div class="well">
                            <h3>Category</h3>
                            <p>Category</p>
                            <div class="input-group">
                                <div class="input-group-addon">Cat</div>
                                <input type="text" class="form-control" name="category" id="category" value="<?php echo $category; ?>" placeholder="Book Category" required>
                            </div><br>


                        </div>

                        <div class="col-lg-5">
                            <div class="well">
                                <h3>Created on</h3>
                                <p>Created on</p>
                                <input type="Date" name="created_on" id="created_on" class="form-control" value="<?php echo $created_on; ?>" placeholder="1 Sunday,2 Monday">
                                <br>
                                <p>Author</p>
                                <input type="text" name="author" id="author" class="form-control" value="<?php echo $author; ?>" placeholder="1 user,2 author,3 Key_author,4 General ">
                                <br>
                                <p>Publication</p>
                                <input type="text" name="publication" id="publication" class="form-control" value="<?php echo $publication; ?>" placeholder="Science Publication, Journal of computer science,etc">
                            </div>
                        </div>



                        <button type="submit" name="submit" id="submit" class="btn btn-default" style="width:100px; height:60px"> Cancel</button>
                        <br>
                        <input type="submit" name="btnsav" id="btnsav" class="btn btn-success" style="width:150px; height:60px" value="Edit">


                    </form>

                </div>
            </div>
        </div>
    </div>
</body>

</html>