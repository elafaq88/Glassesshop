<?php
if(array_key_exists('buy',$_POST))
{include('db_Config.php');
$id=$_POST['buy'];
$username=$_COOKIE['username'];
$sql="SELECT * FROM Product WHERE  P_id = '$id' ";
$query1=mysqli_query($connect,$sql);
while ($row = mysqli_fetch_array($query1))
{
    $count=$row['cout_buy'];
    $count=$count+1;
    $sqlu =" UPDATE  Product SET cout_buy ='$count' WHERE  P_id = '$id'";
    $queryu=mysqli_query($connect,$sqlu);
    
    $sql2 =" UPDATE cart SET state =1 WHERE username = '$username' AND p_id = '$id'";
    $query2=mysqli_query($connect,$sql2);


}
}
?>