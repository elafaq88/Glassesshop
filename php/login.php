<?php

if(array_key_exists('username',$_POST))
{ include('db_Config.php');
$username=$_POST['username'];
$password=$_POST['password'];



$sql="SELECT * FROM account WHERE username='$username'AND password= '$password'";
		$query=mysqli_query($connect,$sql);
    $num=mysqli_num_rows($query);
    if($num==0)
    echo ' <script >
    alert("اسم المستخدم أو كلمة السر الذي أدخلتة خاطئ");
    </script>';
	  
     else {
     
      while ($row = mysqli_fetch_array($query))
     { if($row['type']==1)
      header("Location: dhome.php");
      else if($row['type']==2)
      header("Location: home.php");
     
    exit();
  }
}
}
?>