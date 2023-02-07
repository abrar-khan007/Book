<?php
include 'db.php';
if (isset($_POST['btnat'])) {
    // $p_id = $_POST['p_id'];
    $p_name = $_POST['p_name'];
    $p_des = $_POST['p_desc'];
    $p_createdon = date('Y-m-d H:i:s');
    $sql = mysqli_query($con, "INSERT INTO `publication`(`p_id`, `p_name`, `p_desc`, `p_createdon`)VALUES ('$p_id', '$p_name', '$p_des', '$p_createdon')");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Publication</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/k.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
function checkNameEmpty(inputID)
{
    $(inputID).blur(function(){
 
        if($(this).val() == '')
        {
            $(this).css('border','1px solid red');
            
        }
        else
        {
            $(this).css('border','1px solid green');
            
        }
    });
}
 
 

 
function checkComment(commentID)
{
        $(commentID).blur(function(){
 
        if($(this).val() == '')
        {
            $(this).css('border','1px solid red');
            
        }
        else
        {
            $(this).css('border','1px solid green');
            
        }
    });
}
 
 
$(document).ready(function(){
    
    //run time form validation
    checkNameEmpty("#p_name");
    checkComment("#p_desc");
        
    //when click on submit
    $("#submit").click(function(){
        
        
        if($("#p_name").val() == '')
        {
            $("#p_name").css('border','1px solid red');
            return false;	
        }
          
        if($("#p_desc").val() == '')
        {
            $("#p_desc").css('border','1px solid red');
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
                    <h1><span class="glyphicon glyphicon-tag"></span> Publication Pannel </h1>
                </div><br>

                <div class="panel-body" style="background-color:maroon;">
                    <div class="col-lg-7">
                        <div class="well">
                            <form action="publication.php" method="post" name="form" enctype="multipart/form-data">
                                <!-- <p>Title</p>
                                <input class="input-lg thumbnail form-control" type="text" name="p_id" id="p_id" autofocus style="width:100%" placeholder="Product Name" required> -->
                                <p> Name</p>
                                <input class="input-lg thumbnail form-control" name="p_name" id="p_name" style="width:100%; height:100px" placeholder="write here..." required>

                        </div>
                        <div class="well">
                            <h3>desc</h3>
                            <p>desc</p>
                            <div class="input-group">
                                <div class="input-group-addon">Desc</div>
                                <input type="text" class="form-control" name="p_desc" id="p_desc" placeholder="Book p_desc" required>
                            </div><br>
                           


                        </div>
                    </div>
                    <div style="position:relative;">
                        <button type="submit" name="view" id="submit" class="btn btn-default" style="width:100px; height:60px" onClick="location.href='list.php'">listing </button>
                        <br>
                        <button type="submit" name="btnat" id="submit" class="btn btn-success" style="width:100px; height:60px">Add</button>
                        <br>
                    </div>

                    </form>

                </div>



            </div>
        </div>
    </div>
</body>

</html>