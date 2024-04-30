<?php
if(array_key_exists('delP',$_POST))
{include('db_Config.php');
$id=$_POST['delP'];

$username=$_COOKIE['username'];

 $sqlcat="DELETE FROM cart WHERE id='$id'";
            $query2=mysqli_query($connect,$sqlcat);
}

?>