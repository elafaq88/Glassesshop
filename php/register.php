<?php

if(array_key_exists('username',$_POST))
{include('db_Config.php');
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$name=$_POST['name'];
$type=$_POST['type'];
$unationality=$_POST['country'];

$sql="SELECT * FROM account WHERE username='$username' ";
		$query=mysqli_query($connect,$sql);
    $num=mysqli_num_rows($query);
    if($num>0)
    echo ' <script >
    
    alert("اسم المستخدم الذي أدخلتة موجود الرجاء أدخال اسم مستخدم أخر");
    </script>';
	  
     else {
     $sql="INSERT INTO account ( username , password, type , email) VALUES ('$username','$password','$type','$email')";
     $query=mysqli_query($connect,$sql);
     if($type==2)
     {
     $sql1="INSERT INTO Customer (name , username , email, numberphone , brith , nationality ) VALUES ('$name','$username','$email',00,'','$unationality')";
     $query=mysqli_query($connect,$sql1);
     header("Location: login.php");
    }
     if($type==1)
     {
     $sql1="INSERT INTO Publisher (name , username , email, numberphone , brith , nationality ) VALUES ('$name','$username','$email',00,'','$unationality')";
     $query=mysqli_query($connect,$sql1);
     header("Location: login.php");
    }
    ;
    }
   
    exit();
  
}

?>