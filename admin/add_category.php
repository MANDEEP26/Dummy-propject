<?php
require"connection.php";
$msg="";
if (isset($_REQUEST['submit']))
{
$ct_name=$_REQUEST['ct_name'];
if($ct_name=="")
{
$msg="Please Enter category Name";
}
else
{
$query="insert into category (cat_name)  values('$ct_name')";
$qr=mysql_query($query);
if(!$qr)
{
die ('category is not Add'.mysql_error());
}
else
{
$msg="category is  Add";
}
}
}
?>
<html>
<head>
<title>ADD BOOKS</title>
<link href="admin.css" rel="stylesheet" type="text/css" />
<script>
function fun1()
{
	var a=document.bookform.name.value;
	//var b=document.bookform.price.value;
	if(a=="")
	{
		alert("fill the Bookname for further processing");
		return false;
	}
	return true;

}
</script>
</head>
<body>
<div id="abc">
<img src="../images/bh.jpg" width="100%" height="200px"/> 
</div>
<div class="header">
&nbsp;&nbsp;&nbsp;&nbsp;<a href="add_category.php">Add category</a>
&nbsp;&nbsp;&nbsp;<a href="manage_category.php">Manage category</a>
&nbsp;&nbsp;&nbsp;<a href="addbooks.php">Add Books</a>
&nbsp;&nbsp;&nbsp;<a href="manage_book.php">Manage book</a>
&nbsp;&nbsp;&nbsp;<a href="manage_order.php">Manage order</a>
&nbsp;&nbsp;&nbsp;<a href="logout.php">Logout</a>

</div>
 <div class="admin" align="center"><br>ADD CATEGORY</div> 
        <br/><br/><br/>

<form  action="" name="bookform" method="post" enctype="multipart/form-data" onSubmit="return fun1();"  style="top:400px;margin-left:500px;position:absolute;">
 <table>
 <tr align="center">
 <td colspan="2">
<?php 
echo $msg;
?>
 </td>
 </tr>
 <tr>
 <td>
 category Name
 </td>
 <td>
 <input type="text" name="ct_name">
 </td>
 </tr>
 </table>
   <input type="submit" value="submit" name="submit" style="float:right; color:#FF0000;" />
</form>
<br/><br/><br/><br/><br/><br/><br/><br/><br/>

<div class="footer" align="center"><span>Copyright &copy; <a href="#">Domain Name</a> All Rights Reserved<br></span> Design by <a target="_blank" href="http://www.templatemonster.com/">Monika,Shiwanki,Amrita</a> 
  </div>
</body>
	</html>
