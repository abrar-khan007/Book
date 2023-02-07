<?php
error_reporting(E_ALL & ~E_NOTICE);
@$cat_id = $_REQUEST['cat_id'];
include("db.php");
$result = mysqli_query($con, "SELECT `cat_id`, `cat_name`, `cat_desc`, `created_on` FROM `category` WHERE  cat_id='$cat_id'") or die("query 1 incorrect.......");
while ($r = mysqli_fetch_assoc($result)) {

    $cat_id = $r['cat_id'];
    $cat_name = $r['cat_name'];
    $cat_desc = $r['cat_desc'];
    $created_on = $r['created_on'];
}

if (isset($_POST['btnat'])) {
    @$cat_id = $_REQUEST['cat_id'];
    $cat_name = $_POST['cat_name'];
    $cat_desc = $_POST['cat_desc'];
    $created_on = Date('Y-m-d H:i:s');

    $querry = " UPDATE category set cat_name = '" . $cat_name . "', cat_desc='" . $cat_desc . "',created_on='" . $created_on . "' where cat_id='" . $cat_id . "'";
    $result = mysqli_query($con, $querry);
    
    header("location: edlist_c.php");
    mysqli_close($con);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>category edit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/k.css" rel="stylesheet">
   <script src="validate.js"></script>
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
    checkNameEmpty("#cat_name");
    checkComment("#cat_desc");
        
    //when click on submit
    $("#btnat").click(function(){
        
        
        if($("#cat_name").val() == '')
        {
            $("#cat_name").css('border','1px solid red');
            return false;	
        }
          
        if($("#cat_desc").val() == '')
        {
            $("#cat_desc").css('border','1px solid red');
            return false;	
        }
        
                
    });
    
});
    
    
    </script>
</head>

<body>

    <div style="margin: 0px auto;" class="container-fluid">

        <div class="col-md-9 content" style="margin-left:10px">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:cyan;">
                    <h1><span class="glyphicon glyphicon-tag"></span> Category edit Pannel </h1>
                </div><br>
                <div class="panel-body" style="background-color:maroon;">
                    <div class="col-lg-7">
                        <div class="well">
                            <form action="edlist_c.php" method="post" name="form" enctype="multipart/form-data" onsubmit=" return validation();">
                                <input type="hidden" name="cat_id" id="cat_id" value="<?php echo $cat_id; ?>" />
                                <p> Title</p>
                                <input class="input-lg thumbnail form-control" type="text" name="cat_name" id="cat_name" value="<?php echo @$cat_name; ?>" autofocus style="width:100%" placeholder="title Name" required>
                                <p> Description</p>
                                <textarea class="input-lg thumbnail form-control" type="textarea" name="cat_desc" id="cat_desc" style="width:100%; height:100px" placeholder="write here..." required> <?php echo $cat_desc; ?>  </textarea>
                        </div>
                    </div>
                    <div>
                        <button type="submit" name="subnav" id="submit" class="btn btn-default" style="width:100px; height:60px" onClick="location.href='list_c.php'"> Listing</button>
                        <br>
                        <button type="submit" name="btnat" id="btnat" class="btn btn-success" style="width:100px; height:60px"> Update </button>
                        <br>
                        <br>
                    </div>
                    <div class="error"> </div>
                    </form>

                </div>

            </div>



        </div>

    </div>

</body>

</html>