<html>
<head>
<title>page</title>
</head>
<body>
<?php
//session_start();
$table="signup";
if(isset($_SESSION['id']))
{
	$id=$_SESSION['id'];
	$sql="select * from $table where id='$id'";
	$exec=mysql_query($sql);
	$fetch_u=mysql_fetch_assoc($exec);
}
?>
</body>
</html>