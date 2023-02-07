<?php include 'db.php'?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>

    <script src="form.js"></script>
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
        <div class="col-lg-12">
            <br>
            <br>
            <h1 class="warning text-center">Category Data </h1>
            <br>
            <table class="table table-stripped table-hover table-bordered" width="100%" cellspacing="0" cellpadding="1">
                <tr class="bg-dark text-white text-center">
                    <th>Id </th>
                    
                    <th>Name </th>
                    <th> Description</th>
                    <th>view </th>
                    
                    <th>Created on</td>
                    <th>edit </th>
                    <th>Delete</th>
                </tr>
                
                <?php
                include 'db.php';

                $sqll = mysqli_query($con, "SELECT `cat_id`, `cat_title`, `name`, `descrr`, `created_on` FROM `category` ") or die("query 1 incorrect.......");

                while ($r = mysqli_fetch_array($sqll)) {
                ?>
               <tr class="text-center"> 
                    <td><?php echo $r['cat_id']; ?> </td>
                    <td><?php echo $r['cat_title']; ?></td>
                    <td><?php echo $r['name']; ?></td>
                    <td><?php echo $r['descrr']; ?></td>
                    <td><?php echo $r['created_on']; ?></td>
                    
                    <td><button class="btn-danger"><a href='catedit.php?id=<?php echo  $r['cat_id']; ?>' class="text-white">Edit</a></button></td>
                    <td> <button class="btn-danger"><a href='cateedit.php?id=<?php echo  $r['cat_id']; ?>' class="text-white">Delete</a></button></td>
                    <input hidden="" type="text" name="success" value="<?php echo "$link"; ?>">


                    </tr>
                <?php
                }

                ?>
            </table>
            </body>

</html>