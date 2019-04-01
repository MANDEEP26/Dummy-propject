<html>
<head>
<title>
online book store
</title>
<link rel="stylesheet" href="admin.css" type="text/css">
<script>
function fun1()
{
var a=document.loginform.username.value;
	var b=document.loginform.password.value;
	if(a=="" || b=="")
	{
		alert("fill the username and password for further processing");
		return false;
	}
	
	else
	{
		alert("THANKS");
		return true;
	}
}
</script>
</head>
<body>
<!-- START PAGE SOURCE -->
<div id="abc">
<img src="../images/bh.jpg" width="100%" height="200px"/> 
</div>

<?php
include('confi_db.php');
if(isset($_POST['submit']))
{
	$value1=$_POST['username'];
	$value2=$_POST['password'];
	$connect=mysql_connect("localhost","root","");
	mysql_select_db("bookstore");
	
		$query="select * from admin where admin_name='$value1' and pswd='$value2'";
		$res=mysql_query($query);
		$num=mysql_num_rows($res);
		$fetch=mysql_fetch_assoc($res);
		if($num>0)
		{
			$_SESSION['id']=$fetch['id'];
			header('location:add_category.php');
		
	}
		else
		{
			?>
            <script>
			alert("wrong username and password");
		     
			</script>
        <?php
		}
	}
?>
<div class="admin" align="center"><br>ADMIN PANEL</div> 
        <br/><br/><br/>
<div id="div">
<form  action="" name="loginform" method="post"  onsubmit="return fun1();">
<table>
<tr height="60px">
<td><b>USERNAME&nbsp;&nbsp;&nbsp;</td>
<td><input id="user" type="text" name="username" placeholder="please enter username"/></td>
</tr>
<tr height="60px">
<td><b>PASSWORD&nbsp;&nbsp;&nbsp;</td>
<td><input id="password" type="password" name="password" placeholder="please enter password"/></td>
</tr>
<tr height="60px">
<td colspan="2" align="center"><input id="login" width="70px" type="submit" value="login" name="submit" style="background-color:#330000; color:#FFFFFF" /></td>
</tr> 
</table>
</form>
</div>
</div><br>
<br>
<br><br><br><br><br><br><br><br>
<div class="footer" align="center"><span>Copyright &copy; <a href="#">Domain Name</a> All Rights Reserved<br></span> Design by <a target="_blank" href="http://www.templatemonster.com/">Monika,Rupinder kaur</a> 
</div>
</body>
</html>
