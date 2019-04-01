<html>
<head>
<title>connection</title>
</head>
<body>
<?php
mysql_connect("localhost","root","");
mysql_select_db("../database/bookstore")or die("database couldnot connect");
//echo "connected";
?>
</body>
</html>
