<html>
<head> <title>View all users </title></head>

<body>
<center><h1>All the user information</h1></center>
	
	<form method='POST' action='admin.php'>
	 <input type='submit' name='admin_login' value="ADD Picture"/>
</form>
	
<font size='6' color='red'
<?php echo @$_GET['deleted']; ?></font>


<table width ='800' align='center' border='5'>

<tr bgcolor='yellow'>
<th>User No   </th>
<th>User Name   </th>
<th>User Password   </th>
<th>User Mobileno  </th>
<th>User email   </th>
<th>User address   </th>
<th>Delete User</th>
</tr>
<tr>
<?php
mysql_connect("localhost","root","ankit");
mysql_select_db("users_db");

$query = "select * from users";
$run = mysql_query($query);

while ($row=mysql_fetch_array($run))
{
	
$user_id = $row[0];
$user_name = $row[1];
$user_password = $row[2];
$user_mobileno = $row[3];
$user_email = $row[4];
$user_address = $row[5];

?>


<td><?php echo $user_id; ?></td>
<td><?php echo $user_name; ?></td>
<td><?php echo $user_password; ?></td>
<td><?php echo $user_mobileno; ?></td>
<td><?php echo $user_email; ?></td>
<td><?php echo $user_address; ?></td>
<td><a href='delete.php?del=<?php echo $user_id;?>'> Delete</a></td>
</tr>

<?php } ?>

</table>

</body>
</html>