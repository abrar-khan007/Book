<?php

 include("db.php");
error_reporting(0);
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$p_id=$_GET['p_id'];
///////picture delete/////////
$result=mysqli_query($con,"select p_name from publication where p_id='$p_id'")
or die("query is incorrect...");

list($image)=mysqli_fetch_array($result);
$path="book_images/$image";

if(file_exists($path)==true)
{
  unlink($path);
}
else
{}
/*this is delet query*/
mysqli_query($con,"delete from publication where p_id='$p_id'")or die("query is incorrect...");
}

///pagination

$page=$_GET['page'];

if($page=="" || $page=="1")
{
$page1=0;	
}
else
{
$page1=($page*10)-10;	
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>publication Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>
<body>
    <div class="col-md-9 content" style="margin-left:10px">
    <div class="panel-heading" style="background-color:#c4e17f">
	<h1>Publication listing </h1></div><br>
<div class='table-responsive'>  
<div style="overflow-x:scroll;">
<table class="table  table-hover table-striped" style="font-size:18px">
<tr><th>p_id</th><th>Name</th><th>p_des</th> <th> created_on</th><th>View</th>  <th>Edit </th> <th>Delete </th><th>
	<a class=" btn btn-primary" href="publication.php">Add New</a></th></tr>
<?php 
$sqll = mysqli_query($con, "SELECT `p_id`, `p_name`, `p_desc`, `p_createdon` FROM `publication`") or die("query 1 incorrect.......");
while(list($p_id, $p_name, $p_desc, $p_createdon)=mysqli_fetch_array($sqll))
{
echo "<tr>
<td>$p_id </td>
<td>$p_name</td>
<td>$p_desc</td><td> $p_createdon</td>
<td>
<a class=' btn btn-success' href='read_p.php?p_id=$p_id'>View </a>
</td>
<td>
<a class=' btn btn-success' href='edplist_c.php?p_id=$p_id' >Edit</a>
</td>
<td>

<a class=' btn btn-danger' href='list.php?p_id=$p_id&action=delete'>Delete</a>
</td></tr>";
}

?>
</table>
</div></div>

<nav align="center">
  

<?php 
//counting paging

$paging=mysqli_query($con,"SELECT `p_id`, `p_name`, `p_desc`, `p_createdon` FROM `publication`");
$count=mysqli_num_rows($paging);

$a=$count/10;
$a=ceil($a);
echo "<bt>";echo "<bt>";
for($b=1; $b<=$a;$b++)
{
?> 
<ul class="pagination" style="border:groove #666">
<li><a class="label-info" href="list.php?page=<?php echo $b;?>"><?php echo $b." ";?></a></li></ul>
<?php	
}
?>
</nav>
</div></div>
</body>
</html>