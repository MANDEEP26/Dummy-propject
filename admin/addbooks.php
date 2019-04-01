<?php
require"connection.php";
$msg='';
if (isset($_REQUEST['submit']))
{
$book_name=$_REQUEST['book_name'];
$book_price=$_REQUEST['book_price'];
$book_cat_name=$_REQUEST['book_cat_name'];
$file=$_FILES['image']['name'];
$query="insert into book (book_name,book_price,book_image,book_cat_name) values('$book_name','$book_price','$file','$book_cat_name')";
$qr=mysql_query($query);
if(!$qr)
{
die('book is not Add'.mysql_error());
}
else
{
move_uploaded_file($_FILES['image']['tmp_name'],'../upload/'.$file);
$msg="book is add";
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
 <div class="admin" align="center"><br>ADD BOOKS</div> 
        <br/><br/><br/>
<div id="templatemo_content">

<h1><marquee  style="width:1150px;" behavior="alternate"> </marquee></h1>
<div id="div22">
<form  action="" name="bookform" method="post" enctype="multipart/form-data" onSubmit="return fun1();"  style="top:400px;margin-left:500px;position:absolute;">
<?php
echo $msg; 
?>
<table>
<tr>
<td>Book Name:</td>
<td><input id="user" type="text" name="book_name" /></td>
</tr>
<tr>
<td>Book Price</td>
<td><input type="text" name="book_price"/></td>
</tr>
<tr>
<td>Choose Image:</td>
<td><input id="price" type="file" name="image" /></td>
</tr>
<tr>
<td>Category:</td>
<td><select name="book_cat_name" >
	<?php
 $query='select * from category';
 $data=mysql_query($query);
  while($result=mysql_fetch_assoc($data))
  {
  ?>
  <option><?php echo $result['cat_name'];?></option>
	<?php
	} 
	?>	
	    </select></td>
</tr>
<tr>
<td colspan="2"><input type="submit" value="submit" name="submit" style="float:right; color:#FF0000;" /></td>
</tr>

</table>

</form>
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
</div>
</div>
<div class="footer" align="center"><span>Copyright &copy; <a href="#">Domain Name</a> All Rights Reserved<br></span> Design by <a target="_blank" href="http://www.templatemonster.com/">Monika</a> 
  </div>
</body>
	</html>
