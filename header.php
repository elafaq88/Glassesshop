<!DOCTYPE html>


<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>GlassesShop</title>

    <meta name="description" content="" />
    <meta name="Viewport" content="width=device-width , initial-scale=1.0,maximunscale=1,user-scalable=0"/>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet" />
      <link href="css/style2.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="css/responsive.css" rel="stylesheet" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <link rel="stylesheet" href="assets/vendor/css/pages/page-icons.css" />

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
    
  </head>
  
  <body>
    
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

          
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5 header_section">
    
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <h3><img src="img/logo.png" class=" "></h3>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="home.php">Home</a>
                  </li>
                
                  
                 
                 
                </ul>
                <li class="nav-item navbar-dropdown dropdown-user dropdown d-flex">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar ">
                      <img src="assets/img/profile.jpg"  alt="" class="w-px-40 h-auto rounded-circle">
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar ">
                              <img src="assets/img/profile.jpg" alt="" class="w-px-40 h-auto rounded-circle">
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <?php
                            if($_COOKIE==NULL)
                            {  echo '<span class=" d-block">قم بتسجيل الدخول</span>
                              <small class="text-muted">مشتري</small>';}
                              else 
                             { include('php/db_Config.php');
                              
                              $sql1="SELECT * FROM Account WHERE username='$_COOKIE[username]' AND type = 1  ";
                              $query1=mysqli_query($connect,$sql1);
                              $row = mysqli_fetch_array($query1);
                               if($row!=0)
                               {echo '<span class=" d-block">قم بتسجيل الدخول</span>
                               <small class="text-muted">مشتري</small>';}
                               else
                           { $sql="SELECT * FROM Customer WHERE username='$_COOKIE[username]'  ";
	                        	$query=mysqli_query($connect,$sql);
                            $row = mysqli_fetch_array($query);
                              
                            echo '<span class=" d-block">'.$row["name"].'</span>
                            <small class="text-muted">مشتري</small>';}}
                          
                            ?>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                   
                   
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                    <a class="nav-link" href="login.php">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">تسجيل الدخول</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <form class="d-flex" onsubmit="return false">
                  <div class="container-fluid">
                    
                    <!--/ User -->
                  </ul> 


                  <?php
                  if($_COOKIE==NULL)
                   { echo '<a class="btn btn-outline-primary"  href="login.php" >
                    تسجيل الدخول</a>';}
                    else 
                   {  include('php/db_Config.php');
                    $sql1="SELECT * FROM Account WHERE username='$_COOKIE[username]' AND type = 1  ";
                    $query1=mysqli_query($connect,$sql1);
                    $row = mysqli_fetch_array($query1);
                     if($row!=0)
                     {echo '<a class="btn btn-outline-primary"  href="login.php" >
                      تسجيل الدخول</a>';}
                    else {
                    $sqlc="SELECT * FROM cart WHERE username = '$_COOKIE[username]'AND state = 0";
                    $queryc=mysqli_query($connect,$sqlc);
                    $num=mysqli_num_rows($queryc);
                  
                 echo '<a class="btn btn-outline-primary"  href="cart.php" >
                       
                  العربة<i class="menu-icon tf-icons bx bx-cart"><span class="badge badge-center rounded-pill bg-danger">'.$num.'</span></i> </a>';}}
                 
                  ?>
                </form>
              </div>
            </div>
          </nav>
          <!-- / Navbar -->

         
