<?php
include 'db.php';
if (isset($_POST['btnCat'])) {
    @$cat_id = $_POST['cat_id'];
    @$cat_name = $_POST['cat_name'];
    @$cat_desc = $_POST['cat_desc'];
    @$created_on = date('Y-m-d H:i:s');
    $sql = mysqli_query($con, "INSERT INTO `category`(`cat_id`, `cat_name`, `cat_desc`, `created_on`)  VALUES ('$cat_id', '$cat_name', '$cat_desc', '$created_on')");
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        function checkNameEmpty(inputID) {
            $(inputID).blur(function() {

                if ($(this).val() == '') {
                    $(this).css('border', '1px solid red');

                } else {
                    $(this).css('border', '1px solid green');

                }
            });
        }




        function checkComment(commentID) {
            $(commentID).blur(function() {

                if ($(this).val() == '') {
                    $(this).css('border', '1px solid red');

                } else {
                    $(this).css('border', '1px solid green');

                }
            });
        }


        $(document).ready(function() {

            //run time form validation
            checkNameEmpty("#cat_name");
            checkComment("#cat_desc");

            //when click on submit
            $("#submitForm").click(function() {


                if ($("#cat_name").val() == '') {
                    $("#cat_name").css('border', '1px solid red');
                    return false;
                }

                if ($("#cat_desc").val() == '') {
                    $("#cat_desc").css('border', '1px solid red');
                    return false;
                }


            });

        });
    </script>
</head>

<body>
    <div style="margin: 0px auto;" class="container-fluid">
        <?php include 'sidebar.php' ?>
        <div class="col-md-9 content" style="margin-left:10px">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:cyan;">
                    <h1><span class="glyphicon glyphicon-tag"></span> Category Pannel </h1>
                </div><br>
                <div class="panel-body" style="background-color:maroon;">
                    <div class="col-lg-7">
                        <div class="well">
                            <form action="category.php" method="post" name="form" enctype="multipart/form-data">
                                <p> Name</p>
                                <input class="input-l form-control" name="cat_name" id="cat_name" style="width:90%" placeholder="title Name" required="required" autofocus >
                                <p> Description</p>
                                <textarea class="input-lg thumbnail form-control"  name="cat_desc" id="cat_desc" style="width:90%; height:100px" placeholder="write here..." required> </textarea>


                        </div>
                    </div>
                    <div>
                        <button type="submit" name="subnav" id="submit" class="btn btn-default" style="width:100px; height:60px" onClick="location.href='list_c.php'"> Listing</button>
                        <br>
                        <button type="submit" name="btnCat" id="submitForm" class="btn btn-success" style="width:100px; height:60px"> Add Category</button>
                        <br>
                        <br>
                    </div>

                    </form>

                </div>

            </div>
            <table>

                <td></td>
            </table>


        </div>
    </div>
</body>

</html>