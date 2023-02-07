<?php
include 'db.php';
$id=$_GET['id'];

mysqli_query($con, "DELETE FROM `book_publication` WHERE id=$id") or die("query3 is incorrect...");
    header("location: show_book.php");
      mysqli_close($con);
?>