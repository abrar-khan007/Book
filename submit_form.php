<?php
$link=$_REQUEST['success'];
?>
<html>
<head>
<script>
function myfunction()
{
	document.getElementById("success").click();
}
</script>
</head>
<body onLoad="myfunction()">
<form action="index.php" method="post" id="myform">
	<input hidden="" type="text" name="success" value="<?php echo"$link";?>">
    <button hidden="" type="submit" id="success" data-modal="success" name="success" value="success"></button>
</form>

<h1 style="padding-left:400px; padding-top:200px;"><img src="images/g0R9.gif" /></h1>
</body>
</html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>form submission</title>
</head>

<body>
</body>
</html>