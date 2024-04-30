<?php

if(array_key_exists('nbtn',$_POST))
{include('db_Config.php');
$p_id=$_POST['P_id'];

$username=$_COOKIE['username'];

 $sqlcat="INSERT INTO cart (p_id , username,state ) VALUES ('$p_id','$username', 0 )";
            $query2=mysqli_query($connect,$sqlcat);

	



}

?>