<?php
function viewProdects($order)
{include('db_Config.php');
if($order == null)
{$sql="SELECT * FROM Product ";
$query1=mysqli_query($connect,$sql);
$numner=mysqli_num_rows($query1);}
else {
  if(array_key_exists('btn1',$_POST))
  $sql="SELECT * FROM Product WHERE os = '$order'";
  else if(array_key_exists('btn2',$_POST))
  if($_POST['btn2']==0)
  $sql="SELECT * FROM Product WHERE price = '$order'";
   else  $sql="SELECT * FROM Product WHERE price !=0";
   else $sql="SELECT * FROM Product WHERE P_type = '$order' ";
  $query1=mysqli_query($connect,$sql);
  $numner=mysqli_num_rows($query1);}
	
if($numner != 0 )


while ($row = mysqli_fetch_array($query1))
{   if($_COOKIE!=NULL)
  {$username = $_COOKIE['username'];
    $sql="SELECT * FROM cart WHERE p_id = '$row[P_id]' AND  username = '$username' ";
  $query=mysqli_query($connect,$sql);
  $num=mysqli_num_rows($query);}

$name = $row["P_name"];
$img = $row["image"];


echo '  <div id="product">
            <div class="Pwraper">
                <div class="p-h">
                    <a href="product.html"><img src="'.$img.'" alt="" class="p-img"></a>
                </div>
                <h2> <a >'.$row["P_name"].'  <a>
                $'.$row["price"].' 
                </a></a></h2>
              
                <div >
                   
                    <div>

                    <form  action ="home.php" method = "POST" >
                    <input name="P_id" type="hidden" value="'.$row["P_id"].'">';
                    if($_COOKIE==NULL)
                   { echo '
                  
                     <h5>قم بتسجيل الدخول لشراء المنتج</h5>
                   
                   ';}
                   else 
                   
                {   echo '
                    <button name="nbtn">
                   <img src="img/icons8-shopping-cart-with-money-80.png" alt="">';}
                    echo '  </button>  </form>
                   
                    </div>
                </div>
            </div>

        </div>
'

;}
  }
?>
