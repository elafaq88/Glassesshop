 <?php include('dheader.php') ?>
 <?php include('php/ViewProdect_stat.php'); ?>
 <!-- Content wrapper -->
 <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <!-- Order Statistics -->
               
                <!--/ Order Statistics -->
               
                

                <!-- Transactions -->
                <div class="col-md-6  order-2 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">الايرادات</h5>
                     
                    </div>
                    <div class="card-body">
                      <ul class="p-0 m-0">
                      <?php  learn();?>
                       
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Transactions -->
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded">
                            </div>
                            
                          </div>
                          <span class="fw-semibold d-block mb-1"> أجمالي ارادات المنصة</span>
                          <h3 class="card-title mb-2"><?php echo learnall();?>$</h3>
                        
                        </div>
                      </div>
                    </div>
              </div>
  </div>  </div> </div> </div> 
  </div>  
              

              
            <!-- / Content -->

            <!-- Footer -->
 <?php include('footer.php')?>