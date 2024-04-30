<?php
$username=$_COOKIE['username'];
include('db_Config.php');
$sqlc="SELECT * FROM cart WHERE username = '$username'";
$queryc=mysqli_query($connect,$sqlc);

echo'    <div class="card mb-4">
<h5 class="card-header">بنتظار الشراء</h5>
<div class="table-responsive text-nowrap">
  <table class="table">
    <thead>
      <tr>
        <th>الايقونة</th>
        <th>فئة النظارة</th>
        <th>سعر النظارة</th>
        <th>الناشر</th>
        <th>شراء</th>
      </tr>
    </thead>
    <tbody class="table-border-bottom-0">
      <tr>         ';
while ($row1 = mysqli_fetch_array($queryc))
{
  $state = $row1['state'];
  $Psql="SELECT * FROM Product WHERE P_id=$row1[p_id]";
  $Pquery=mysqli_query($connect,$Psql);
  while ($row = mysqli_fetch_array($Pquery))  
if ($state==0)
{echo '   
  
     
<tr>
<td>
<div class="flex-shrink-0">
 <img src="'.$row["image"].'"  class="me-1" height="30">
 </div>
</td>
<td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>'.$row["P_name"].'</strong></td>

<td>$ '.$row["price"].'  </td>
<td>'.$row["dev_id"].'</td>

<td>
<form action ="cart.php" method="POST">
 <button type="submit" class="btn btn-icon btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#buy'.$row["P_id"].'">
 <i class="bx bx-cart-alt"></i>
</button>

<input name="buy" type="hidden" value="'.$row["P_id"].'">
                               
</form>                            
</td>
<td>
<form  action ="cart.php" method = "POST" >
 <input name="delP" type="hidden" value="'.$row1["id"].'">
<button type="submit" class="btn btn-icon btn-outline-danger">
<i class="bx bx-trash-alt"></i>
</button>
</form>
</td>  
</tr>                  
'
;}

}
echo'
</tbody>';
$sql_a="SELECT * FROM cart WHERE username = '$username' AND state = 0";
$query_a=mysqli_query($connect,$sql_a);
$num=mysqli_num_rows($query_a);
if($num!=0 )
echo '
<tfoot class="table-border-bottom-0">
                      <tr>
                        <th>شراء كل محتويات العربة</th>
                        <th>
                        <form action ="cart.php" method="POST">
                                                    
                        <input name="buyall" type="hidden" value="">
                        <button type="submit" class="btn btn-icon btn-outline-secondary">
                        <i class="bx bx-cart-alt"></i>
                       </button>
                       </form>                            
                      </th>
                  
                      </tr>
                    </tfoot>';

echo '                  
</table>
</div>
</div>
<div class "mb-4"></div>
   <!-- Icon container -->
   <div class="card">
       <h5 class="card-header">تم الشراء</h5>
       <div class="table-responsive text-nowrap">
         <table class="table">
           <thead>
             <tr>
               <th>الايقونة</th>
               <th>فئة النظارة</th>
               <th>سعر النظارة</th>
               <th>الناشر</th>
               <th>شراء</th>
             </tr>
           </thead>
           <tbody class="table-border-bottom-0">
              <tr>';

$sqlc="SELECT * FROM cart WHERE username = '$username'";
$queryc=mysqli_query($connect,$sqlc);
while ($row1 = mysqli_fetch_array($queryc))
{ $state = $row1['state'];
 
  $Psql="SELECT * FROM Product WHERE P_id=$row1[p_id]";
  $Pquery=mysqli_query($connect,$Psql);
  while ($row = mysqli_fetch_array($Pquery))  
 { 
if ($state==1)
{echo '
  
           
  <td>
  <div class="flex-shrink-0">
   <img src="'.$row["image"].'"  class="me-1" height="30">
   </div>
  </td>
  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>'.$row["P_name"].'</strong></td>
  
  <td>$ '.$row["price"].'  </td>
  <td>'.$row["dev_id"].'</td>
  
  <td> 
  </tr>
';}
}

}
echo ' </tbody>
</table>
</div>
</div>';
?>