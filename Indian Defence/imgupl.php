<?php

mysql_connect("localhost","root","ankit");
mysql_select_db("users_db");

$file = $_FILES['fileToUpload']['temp_name'];

if(!isset($file))
{
	echo "please select an image";
}
else
{
$image = addslashes(file_get_contents($_FILES['fileToUpload']['temp_name']));
$image_name = 	addslashes($_FILES['image']['name']);
$image_size = getimagesize($_FILE['image']['temp_name']);
}

if($image_size==false)
{
	echo "Thats not an image";
	
}
else
{
	if(! $insert = mysql_query("insert into store values('','$image_name','$image')"))
	{
		echo "Problem Uploading image";
		
	}
	else
	{
		echo "image uploaded"
	}
	
}




?>