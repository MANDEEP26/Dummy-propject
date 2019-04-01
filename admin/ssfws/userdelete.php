<?php require "../connection.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="../templatemo_style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Delete User</title>
<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="Your name" />
		<link rel="stylesheet" type="text/css" href="../css/admin/demo.css" />
		<link rel="stylesheet" type="text/css" href="../css/admin/style3.css" />
		<link href='http://fonts.googleapis.com/css?family=Electrolize' rel='stylesheet' type='text/css' />
</head>
<body>

<?php require "../connection.php";
if($id=$_GET["id"])
{
$query="delete from signup where id=$id"; 
mysql_query($query);
echo "<center><font color='red'>Successfully Deleted</center>";
echo "<center><a href='user_record.php' style='color:#FFFFFF; text-decoration:underline;'>Go Back to User</a></center>"; 
}
else if($id=$_GET["id"])
{
$query="delete from contactus where id=$id"; 
mysql_query($query);
echo "<center><font color='red'>Successfully Deleted</center>";
echo "<center><a href='feedback.php' style='color:#FFFFFF; text-decoration:underline;'>Go Back to Feedback Record</a></center>";  
}
else if($id=$_GET["product_id"])
{
$query="delete from products where product_id=$id"; 
mysql_query($query);
echo "<center><font color='red'>Successfully Deleted</center>";
echo "<center><a href='Books Record.php' style='color:#FFFFFF; text-decoration:underline;'>Go Back to Books Manage</a></center>"; 
}
?>
<br/><br/>
</body>
</html>
