<?php
if(array_key_exists('SName',$_POST))
{include('db_Config.php');
	
$name=$_POST['SName'];
$type=$_POST['type'];
$price=$_POST['price'];
$details=$_POST['details'];
$username=$_COOKIE['username'];
$private = "Product/";
$fileName = basename($_FILES["image"]["name"]); 
$img=$private.$fileName;

move_uploaded_file(
    $_FILES["image"]["tmp_name"],$private.$_FILES["image"]["name"]
   
);

#$fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
$sql="INSERT INTO Product (P_name , dev_id, price , P_data ,P_type ,image) VALUES ('$name','$username','$price','$details','$type',' $img ')";
$query=mysqli_query($connect,$sql);

	



}

?>