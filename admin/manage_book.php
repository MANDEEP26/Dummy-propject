<?php
require"connection.php";
?>
<html>
<head>
<title>MANAGE BOOK</title>
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
 <div class="admin" align="center"><br>MANAGE BOOK</div> 
        <br/><br/><br/>

 <table align="center" border="1" width="700Px" height="150px" style="color:#330000">
 <tr>
 <th>
 Id
 </th>
 <th>
 book Name
 </th>
  <th>
 book price
 </th>
 <th>
 book Category name
 </th>
 <th>
 book image
 </th>
  <th>
 Delete
 </th>
 </tr>
 <?php
 $query='select * from book';
 $data=mysql_query($query);
  while($result=mysql_fetch_assoc($data))
  {
 ?> 
 <tr>
 <td>
 <?Php echo $result['id'];?>
 </td>
 <td>
 <?php echo $result['book_name'];
?> </td>
<td>
<?php echo $result['book_price']; ?>
</td>
<td>
<?php echo $result['book_cat_name']; ?>
</td>
<td align="center">
<img src="../upload/<?php echo $result['book_image']; ?>" height="100px" width="120px">
</td>
 <td>
  <a href="delete_book.php?id=<?php echo $result['id'];?>">Delete</a> 
 </td>
 </tr>
 <?php 
 }
 ?>
 </table>
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div class="footer" align="center"><span>Copyright &copy; <a href="#">Domain Name</a> All Rights Reserved<br></span> Design by <a target="_blank" href="http://www.templatemonster.com/">Monika,Shiwanki,Amrita</a> 
  </div>
</body>
	</html>
