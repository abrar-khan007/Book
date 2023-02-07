<?php 
@$p_id = $_REQUEST['p_id'];
include("db.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="application/javascript" src="jquery.iframeResizer.min.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <style>
          .iframe {
            width: 100%;
            height: 100%;
            border: none;

            background: #eee;


            z-index: 1;
        }

        .resizable {
            width: 300px;
            height: 300px;
            background: #fff;
            border: 1px solid #ccc;


            z-index: 9;
        }

        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
      <script>
        $(function() {
            $('.resizable').resizable({
                start: function(event, ui) {
                    $('iframe').css('pointer-events', 'none');
                },
                stop: function(event, ui) {
                    $('iframe').css('pointer-events', 'auto');
                }
            });
        });
    </script>
</head>
<body>
<div class="wrapper">

<?php $sqll = mysqli_query($con, "SELECT `id`, `book_title`, `pic_book`, `book_details`, `Category`, `created_on`, `author`, `publication`, `status` FROM `book_publication`,publication where p_id=id") or die("query 1 incorrect.......");

while ($r = mysqli_fetch_array($sqll)) { ?>



<?php echo "<div class='resizeable'> <iframe id='iframe' src='book_images/$book_pic' style='width:100%;scrolling:no; height:100%; border:groove #000'> </iframe></div>"   ?> 
<?php }?>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3">View </h1>

                    <?php $sqll = mysqli_query($con, "SELECT `p_id`,`p_name`, `p_desc`, `p_createdon` FROM `publication` where `p_id`='$p_id'") or die("query 1 incorrect.......");

               while($row=mysqli_fetch_array($sqll)){  ?>

                    <div class="form-group">
                        <label>Name</label>
                        <p><b><?php echo $row["p_name"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <p><b><?php echo $row["p_desc"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Created on</label>
                        <p><b><?php echo $row["p_createdon"]; ?></b></p>
                    </div>
                    <?php }?>
                    <p><a href="index.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
    
</body>
</html>