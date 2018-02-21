<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="image" id="image" size="40">
<input name="" type="submit" value="upload" />
 <input name="Delete" type="submit" value="delete" />

</form>
<?php 
$con = mysql_connect('localhost', 'root', 'ankit'); //Update hostname
mysql_select_db("users_db", $con); //Update database name
 
 if(isset($_POST['delete']))
 {
	 $query2='DELETE FROM store WHERE id=3';
	 	if(mysql_query($query2))
		{
			echo "image deleted";
		}
		else
			echo"nothing";
		}
 
define ("MAX_SIZE","1000"); 
function getExtension($str)
{
	 $i = strrpos($str,".");
	 if (!$i) { return ""; }
	 $l = strlen($str) - $i;
	 $ext = substr($str,$i+1,$l);
	 return $ext;
}
 
$errors=0;
$image=$_FILES['image']['name'];
echo $image;
if ($image) 
{
	$filename = stripslashes($_FILES['image']['name']);
	$extension = getExtension($filename);
	$extension = strtolower($extension);
	if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") 
		&& ($extension != "gif")&& ($extension != "JPG") && ($extension != "JPEG") 
		&& ($extension != "PNG") && ($extension != "GIF")) 
	{
		echo '<h3>Unknown extension!</h3>';
		$errors=1;
	}
	else
	{
		$size=filesize($_FILES['image']['tmp_name']);
 
		if ($size > MAX_SIZE*1024)
		{
			echo '<h4>You have exceeded the size limit!</h4>';
			$errors=1;
		}
 
		$image_name=$image;
		$newname="imagesss/".$image_name;
 
		$copied = copy($_FILES['image']['tmp_name'], $newname);
		echo $copied;
		if (!$copied) 
		{
			echo '<h3>Copy unsuccessfull!</h3>';
			$errors=1;
		}
		else echo '<h3>uploaded successfull!</h3>';
 
	//$query = "insert into users (user_name,user_pass,mobileno,user_email,address) values('$user_name','$user_pass','$mobilenumber','$user_email','$user_address')";
    
		mysql_query("insert into store(name,image) values('$image','$newname')");
	}
 
	//Display image
	$rs=mysql_query("select * from store");
	if($rs)
		while($row=mysql_fetch_array($rs))
		{
		 ?>
		 <img width="150" src="<?php echo $row['image'];?>"><br>
		 <?php 
		}
}
?>