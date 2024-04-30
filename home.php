<?php include('php/Add_Cart.php') ?>
 <?php include('header.php') ?>
 <!-- Content wrapper -->
 <div >
            <!-- Content -->
            <section id="heroSection">

<section class="herowrap">
    <div class="text_control">
        <h1 class="cFont">Lorinda Glasses</h1>
        <p>نظارتك الى باب بيتك</p>
      
    </div>

</section>
</section>
            <div >
              <h4 class="fw-bold py-3 mb-4"></h4>

              

              <!-- Icon container -->
              <section class="products">
         <div class="container">
            <div class="heading_container heading_center">
              
            </div>
            <div class="row">
            <?php include('php/ViewProdects.php') ;
                if(array_key_exists('btn',$_POST ))
                viewProdects($_POST['btn']);
                else  if(array_key_exists('btn1',$_POST ))
                viewProdects($_POST['btn1']);
                else  if(array_key_exists('btn2',$_POST ))
                viewProdects($_POST['btn2']);
                else viewProdects(null); ?>
            
            
             
            </div>
           
         </div>
      </section>
                
               
            
               

</div>
</div>
 
              
            <!-- / Content -->

            <?php include('footer.php')?>