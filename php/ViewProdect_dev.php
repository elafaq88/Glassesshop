<?php

include('db_Config.php');
$username=$_COOKIE['username'];
$sql="SELECT * FROM Product WHERE dev_id = '$username' ";
$query1=mysqli_query($connect,$sql);
$numner=mysqli_num_rows($query1);
	
if($numner != 0 )

while ($row = mysqli_fetch_array($query1))
{
$name = $row["P_name"];
$img = $row["image"];

echo '   
 

                          <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                              <img src="'.$img.'" alt="'.$name.'" class="me-35" height="30">
                            </div>
                            <div class="flex-grow-1 row">
                              <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                <h6 class="mb-0">'.$name.'</h6>
                                <small class="text-muted"></small>
                              </div>
                              <div class="col-4 col-sm-5 text-end">
                                    <form  action ="dhome.php" method = "POST" >
                                    <input name="delS" type="hidden" value="'.$row["P_id"].'">
                                    <button type="submit" class="btn btn-icon btn-outline-danger">
                                    <i class="bx bx-trash-alt"></i>
                                    </button>
                                    </form>
                              </div>
                            </div>
                          </div>
 
'

;}

?>