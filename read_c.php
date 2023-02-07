<?php 
@$cat_id = $_REQUEST['cat_id'];
include("db.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3">View </h1>

                    <?php $sqll = mysqli_query($con, "SELECT `cat_id`,`cat_name`, `cat_desc`, `created_on` FROM `category` where `cat_id`='$cat_id'") or die("query 1 incorrect.......");

               while($row=mysqli_fetch_array($sqll)){  ?>

                    <div class="form-group">
                        <label>Name</label>
                        <p><b><?php echo $row["cat_name"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <p><b><?php echo $row["cat_desc"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Created on</label>
                        <p><b><?php echo $row["created_on"]; ?></b></p>
                    </div>
                    <?php }?>
                    <p><a href="index.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
    
</body>
</html>