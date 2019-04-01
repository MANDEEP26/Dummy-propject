<?php
require"connection.php";
$cat_id=$_REQUEST['cat_id'];
$query="delete from category where cat_id='$cat_id'";
mysql_query($query);
header("location:manage_category.php");
?>
