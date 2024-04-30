<?php include('dheader.php');
      include('php/AddProdect.php');

?>

            
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
             
              <div class="row">
                <div class="col-md-12">
                  
                  <div class="card mb-4">
                    <h5 class="card-header">اضافة نظارة جديدة </h5>
                    <!-- Account -->
                    <form  method="POST" enctype = "multipart/form-data">
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img
                         
                          alt="user-avatar"
                          class="d-block rounded"
                          height="100"
                          width="100"
                          id="uploadedAvatar"
                        />
                        <div class="button-wrapper">
                          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">اضافة أيقونة</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              name="image"
                              type="file"
                              id="upload"
                              class="account-file-input"
                              hidden
                              accept="image/png, image/jpeg"
                            />
                          </label>
                          <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                            <i class="bx bx-reset d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">حذف</span>
                          </button>

                          <p class="text-muted mb-0">يسمح فقط للامتدادات JPG أو GIF أو PNG. وحجم لايزيد عن 1م.ب</p>
                        </div>
                      </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                     
                        <div class="row">
                          <div class="mb-3 col-md-6">

                            <label for="SName" class="form-label">فئة النظارة</label>
                            <input
                              class="form-control"
                              type="text"
                              id="SName"
                              name="SName"
                              
                              autofocus
                              required
                            />
                          </div>
                         
                          
                         
                         
                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">تاريخ النشر</label>
                            <script>
                              document.write('<input type="text"  class="form-control"  id="organization"   name="date" value="'+ new Date().getDate()+'-'+ new Date().getMonth()+'-'+new Date().getFullYear()+'"/>' );
                     
                              </script>
                           
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="Type" class="form-label">نوع النظارة</label>
                            <select id="type" name="type"class="select2 form-select" required >
                             
                              <option value=0>سوداء</option>
                              <option value=1>شفافة</option>
                              <option value=2>عاكس للضوء</option>
                              <option value=3>فخمة</option>
                              <option value=4>رخيصة</option>
                              </select>
                          </div>
                          
                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">سعر النظارة</label>
                            <input type="text" class="form-control" id="address" name="price" required  />
                          </div>
                         
                          <div class="mb-3 col-md-6">
                          <label for="state" class="form-label">تفاصيل حول النظارة</label>
                          <textarea required  name= "details" id="basic-default-message" class="form-control" placeholder="اكتب تفاصيل أكثر عن النظارة"  aria-describedby="basic-icon-default-message2" style="margin-top: 0px; margin-bottom: 0px; height: 360px;"></textarea>
                          </div>
                         
                         
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2" onclick="dhome.php">نشر  النظارة</button>
                          <button type="reset" class="btn btn-outline-secondary">إلغاء</button>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                  
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , taiz soft
                 
                </div>
               
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    
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
    <script src="assets/js/pages-account-settings-account.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
