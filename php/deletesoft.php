<?php
if(array_key_exists('delS',$_POST))
{include('db_Config.php');
$id=$_POST['delS'];

$username=$_COOKIE['username'];

 $sqlcat="DELETE FROM  Product WHERE P_id='$id'";
$query2=mysqli_query($connect,$sqlcat);

	



}

?>