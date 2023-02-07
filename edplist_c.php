<?php
error_reporting(E_ALL & ~E_NOTICE);
@$p_id = $_REQUEST['p_id'];
include("db.php");


$result = mysqli_query($con, "SELECT `p_id`, `p_name`, `p_desc`, `p_createdon` FROM `publication` WHERE  p_id='$p_id'") or die("query 1 incorrect.......");

while ($r = mysqli_fetch_assoc($result)) {


    $p_id = $r['p_id'];
    $p_name = $r['p_name'];
    $p_desc = $r['p_desc'];
    $p_createdon = $r['p_createdon'];
}
if (isset($_POST['btnwave'])) {
    @$p_id = $_REQUEST['p_id'];
    $p_name = $_POST['p_name'];
    $p_desc = $_POST['descrr'];
    $p_createdon = Date('Y-m-d H:i:s');

    $querry = " UPDATE publication set p_name = '" . $p_name . "', p_desc='" . $p_desc . "',p_createdon='" . $p_createdon . "' where p_id='" . $p_id . "'";
    $result = mysqli_query($con, $querry);

    header("location: edplist_c.php");
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

        <div class="col-md-9 content" style="margin-left:10px">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:cyan;">
                    <h1><span class="glyphicon glyphicon-tag"></span> publication edit Pannel </h1>
                </div><br>
                <div class="panel-body" style="background-color:maroon;">
                    <div class="col-lg-7">
                        <div class="well">
                            <form action="edplist_c.php" method="post" name="form" enctype="multipart/form-data">
                                <input type="hidden" name="p_id" id="p_id" value="<?php echo $p_id; ?>" />
                                <p> Title</p>
                                <input class="input-lg thumbnail form-control" type="text" name="p_name" id="p_name" value="<?php echo @$p_name; ?>" autofocus style="width:100%" placeholder="title Name" required>
                                <p> Description</p>
                                <input class="thumbnail form-control" type="textarea" name="descrr" id="descrr" style="width:100%; height:100px" value="<?php echo @$p_desc; ?>" placeholder="write here..." required></textarea>

                        </div>

                    </div>
                    <div style="position:relative;">
                        <button type="submit" name="subnav" id="submit" class="btn btn-default" style="width:100px; height:60px" onClick="location.href='list.php'"> listing</button>
                        <br>
                        <button type="submit" name="btnwave" id="submit" class="btn btn-success" style="width:100px; height:60px"> update</button>
                        <br>
                        <br>
                    </div>

                    </form>

                </div>

            </div>


        </div>
    </div>
</body>

</html>