<!DOCTYPE html>
<?php
include('php/db_Config.php');
 if($_COOKIE==NULL)
 header("Location: login.php");
    else {$sql="SELECT * FROM account WHERE username='$_COOKIE[username]'";
		$query=mysqli_query($connect,$sql);
    $num=mysqli_num_rows($query);
    while ($row = mysqli_fetch_array($query))
    { if($row['type']!=1)
      header("Location: login.php");}}
?>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="rtl"
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

    <title>Glasses Shop</title>

    <meta name="description" content="" />

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

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
           
              <span class="app-brand-text demo menu-text fw-bolder ms-2">Glasses Shop</span>
            

            
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="dhome.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">منتجاتك</div>
              </a>
            </li>
            
            <li class="menu-item">
              <a href="dstatistics.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-money"></i>
                <div data-i18n="Analytics">الاحصائيات</div>
              </a>
            </li>
           

            <!-- Layouts -->
            
            
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div  class="nav__link hide" class="layout-page">
          <!-- Navbar -->

          <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="javascript:void(0)">Home</a>
                  </li>
                 
                  
                </ul>
                <li class="nav-item navbar-dropdown dropdown-user dropdown d-flex">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar ">
                      <img src="assets/img/profile.jpg" alt="" class="w-px-40 h-auto rounded-circle">
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
                            include('php/db_Config.php');
                            {
                            $username=$_COOKIE['username'];
                            $sql="SELECT * FROM Publisher WHERE username='$username' ";
	                        	$query=mysqli_query($connect,$sql);
                            $row = mysqli_fetch_array($query);
                              
                            echo '<span class="fw-semibold d-block">'.$row["name"].'</span>
                            <small class="text-muted">بائع</small>';}
                            ?>
                          </div>
                        </div>
                      </a>
                    </li>
                   
                   
                    <li>
                      <a class="dropdown-item" href="login.php">
                        <span class="align-middle">تسجيل الخروج</span>
                        <i class="bx bx-power-off me-2"></i>
                      </a>
                    </li>
                  </ul>
                </li>
             
            </div>
          </nav>
          <!-- / Navbar -->

         
