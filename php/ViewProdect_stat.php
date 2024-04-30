<?php

function learn()
{
  include('db_Config.php');
$username=$_COOKIE['username'];
$sql="SELECT * FROM Product WHERE dev_id = '$username' ORDER BY cout_buy*price DESC ";
$query1=mysqli_query($connect,$sql);

	$numner=mysqli_num_rows($query1);
if($numner != 0 )
while ($row = mysqli_fetch_array($query1))
{

$cout_buy = $row["cout_buy"];
$price = $row["price"];


echo '  
<li class="d-flex mb-4 pb-1">
<div class="avatar flex-shrink-0 me-3">
  <img src="'.$row["image"].'" alt="User" class="rounded">
</div>
<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
  <div class="me-2">
    <small class="text-muted d-block mb-1">'.$row["P_name"].'</small>
    <h6 class="mb-0"> عدد المشترين :'.$row["cout_buy"].'</h6>
  </div>
  <div class="user-progress d-flex align-items-center gap-1">
    <h6 class="mb-0">'.$price*$cout_buy.'</h6>
    <span class="text-muted">USD</span>
  </div>
</div>
</li>

'

;}
}
function learnall(){
  include('db_Config.php');
$username=$_COOKIE['username'];
$sql="SELECT * FROM Product WHERE dev_id = '$username' ORDER BY cout_buy*price DESC ";
$query1=mysqli_query($connect,$sql);
$Total = 0;
  while ($row = mysqli_fetch_array($query1))
{
  $cout_buy = $row["cout_buy"];
  $price = $row["price"];
  $Total = $Total + $price*$cout_buy;

}
echo $Total;}
?>