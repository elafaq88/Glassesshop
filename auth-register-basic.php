<!DOCTYPE html>
<?php include ('php/register.php')?>
<html
  lang="ar"
  class="light-style customizer-hide"
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

    <title>إنشاء حساب</title>

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
    <!-- Page -->
    <link rel="stylesheet" href="assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
             
              <!-- /Logo -->
              <h4 class="mb-2">أنشئ حساب لتتمكن من الوصول لخدماتنا</h4>
              <p class="mb-4">قم بتعبيئة الحقول إدنا</p>
              
              <form id="formAuthentication" class="mb-3"  method="POST">
                <div class="mb-3">
                <div class="mb-3">
                <label for="country" class="form-label">نوع الحساب</label>
                            <select id="type" name="type" class="select2 form-select">
                              <option value=2 >حساب عادي</option>
                             
                            </select>
                          </div>
                  <label for="name" class="form-label">اسمك الكامل</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="ادخل اسمك"
                    autofocus
                  />
                  <label for="username" class="form-label">اسم المستخدم</label>
                  <input
                    type="text"
                    class="form-control"
                    id="username"
                    name="username"
                    placeholder="ادخل اسم أو رقم هاتف"
                    autofocus required
                  />
                </div>
               
                <div class="mb-3">
                  <label for="email" class="form-label">البريد الإلكتروني</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="أدخل بريدك الإلكتروني" required />
                </div>
                <div class="mb-3">
                <label for="country" class="form-label">الجنسية</label>
                            <select id="country" name="country" class="select2 form-select">
                              <option value="">اختر دولتك</option>
                              <option value="sa">السعودية</option>
                             
                              <option value="bh">البحرين</option>
                              <option value="kw">الكويت</option>
                              <option value="qt">قطر</option>
                              <option value="om">عمان</option>
                              <option value="iq">العراق</option>
                              <option value="sy">سوريا</option>
                              <option value="ps">فلسطين</option>
                              <option value="jo">الاردن</option>
                            </select>
                          </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">كلمة السر</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                      required
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>

                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" required/>
                    <label class="form-check-label" for="terms-conditions">
                      أنا موافق على
                      <a href="javascript:void(0);">سياسة الخصوصية والشروط</a>
                    </label>
                  </div>
                </div>
                <button class="btn btn-primary d-grid w-100" type="subimt">إنشاء حساب</button>
              </form>

              <p class="text-center">
                <span>هل لديك حساب معنا?</span>
                <a href="login.php">
                  <span>تسجيل الدخول</span>
                </a>
              </p>
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>
    <!-- / Content -->

   
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
