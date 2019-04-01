<?php
require"../connection.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../templatemo_style.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>
</head>

<body>
<div id="templatemo_container">
	 <div id="templatemo_menu">
    	<ul>
			<li><a href="addbooks.php" class="current">Add Books</a></li>
			<li><a href="user_record.php" class="current">User Record</a></li>
			<li><a href="Books Record.php" class="current">Manage Books</a></li>
			<li><a href="feedback.php" class="current">Feedback Record</a></li>
            <li><a href="logout.php" class="current" style="float:right;">Log Out</a></li>
            
            
    	</ul>
    </div> <!-- end of menu -->
    
    <div id="templatemo_header">
    	<div id="templatemo_special_offers">
        	<p>
                <span>25%</span> discounts for
        purchase over $80
</p>
        </div>
        
        
        <div id="templatemo_new_books">
        	<ul>
                <li>Cracking the IT interview</li>
                <li>SEO</li>
                <li>Children Books</li>
            </ul>
           
        </div>
    </div> <!-- end of header--->
	
	<div id="templatemo_content">
    	 <div align="center" style="color:#FFFF33; font-size:36px;">User Record</div> 
        <br/><br/>
      

<h1><marquee  style="width:1150px;" behavior="alternate"> </marquee></h1>
<div id="div22">
<form name="search" method="post" action="usersearch.php">

<table  align="center" style="height:100%; width:100%;">
	<tr>
		
<?php
$search=$_POST["search"]; 
$flag=0;
$query="select * from signup ";
$result=mysql_query($query);
echo "<table style=' border:1px solid silver;' align='center'>";
echo "<tr bgcolor='#CCCCCC' style='color:#000000; font-weight:bold;font-size:18px;'>
		<th>ID</th> 
		<th>UName</th>
		<th>Pswd</th>
		<th>Email</th>
		<th>Address</th>
		<th>Gender</th>
		<th>Phone</th>
		<th>City</th>
		<th colspan='2' align='center'>&nbsp;&nbsp;&nbsp;&nbsp;Action</th></tr>";
while ($row = mysql_fetch_array($result)) {
$flag=1;
echo "<tr><td colspan='9'>&nbsp;</td></tr>";
echo "<tr><td align='left'>".$row['id']."&nbsp;&nbsp;</td>";
echo "<td align='left'>".$row['username']."&nbsp;&nbsp;</td>";
echo "<td align='left'>".$row['password']."&nbsp;&nbsp;</td>";
echo "<td align='left'>".$row['email']."&nbsp;&nbsp;</td>";
echo "<td align='left'>".$row['address']."</td>&nbsp;";
echo "<td align='left'>".$row['gender']."</td>&nbsp;";
echo "<td align='left'>".$row['city']."</td>&nbsp;";
echo "<td align='left'>".$row['phone']."&nbsp;&nbsp;</td>";
echo "<td align='left'  style=' color:#FFFFFF;'><a href=userdelete.php?id=". $row['id'] ." style='color:#FF0000;'>Delete</a></td>";
echo "<tr><td colspan='9'>&nbsp;</td></tr>";
}
echo "</table>";
if($flag==0)

echo "<tr><td colspan='3' align='center' style='color:red'>Record not found</td></tr>";

?> 
</tr>
</table>
		</form>

<br/><br/><br/><br/><br/><br/><br/><br/><br/>

</div>
</div>
 <div id="templatemo_footer">
    
	       
         <strong>SOLITAIRE INFOSYS MOHALI</strong>
    <!-- end of footer -->
<!--  Free CSS Template www.templatemo.com -->
</div>

          </div>
        </div>
        <div class="bottom_prod_box_big"></div>
      </div>
    </div>
  
<!-- footer -->
</body>
</html>
