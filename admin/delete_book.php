<?php
require"connection.php";
$id=$_REQUEST['id'];
$query="delete from book where id='$id'";
mysql_query($query);
header("location:manage_book.php");
?>
