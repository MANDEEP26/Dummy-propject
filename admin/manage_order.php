<?php
require"connection.php";
?>
<html>
<head>
<title>MANAGE ORDER</title>
<link href="admin.css" rel="stylesheet" type="text/css" />
<script>
function fun1()
{
	var a=document.bookorder.name.value;
	//var b=document.bookform.price.value;
	if(a=="")
	{
		alert("fill the Bookorder for further processing");
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
 <div class="admin" align="center"><br>MANAGE ORDER</div> 
        <br/><br/><br/>

 <table align="center" border="1" width="700Px" height="150px" style="color:#330000">
 <tr>
 <th>
 Order Id
 </th>
 <th>
 book Id
 </th>
  <th>
 Email Id
 </th>
 <th>
 Name
 </th>
 <th>
 Address
 </th>
  
 </tr>
 <?php
 $query='select * from order';
 $data=mysql_query($query);
  while($result=mysql_fetch_assoc($data))
  {
 ?> 
 <tr>
 <td>
 <?Php echo $result['order_id'];?>
 </td>
 <td>
 <?php echo $result['book_id'];
?> </td>
<td>
<?php echo $result['email_id']; ?>
</td>
<td>
<?php echo $result['name']; ?>
</td>
<td>
<?php echo $reullt['address']; ?>
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
