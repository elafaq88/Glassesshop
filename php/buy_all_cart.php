<?php
if(array_key_exists('buyall',$_POST))
{include('db_Config.php');
$username=$_COOKIE['username'];
$sql="SELECT * FROM cart WHERE  username = '$username' ";
$query=mysqli_query($connect,$sql);
while ($row = mysqli_fetch_array($query))
{
$sql1="SELECT * FROM  Product WHERE  P_id = '$row[p_id]' ";
$query1=mysqli_query($connect,$sql1);
while ($row1 = mysqli_fetch_array($query1))
{
    $count=$row1['cout_buy'];
    $count=$count+1;
    $sqlu =" UPDATE Product SET cout_buy ='$count' WHERE  P_id = '$row[p_id]'";
    $queryu=mysqli_query($connect,$sqlu);
    
    $sql2 =" UPDATE cart SET state =1 WHERE username = '$username' AND p_id = '$row[p_id]'";
    $query2=mysqli_query($connect,$sql2);

}
}
}
?>