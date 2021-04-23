 <!------------------------------------------
    SLIDER
    ------------------------------------------->
 <section class="slider-section">
   <!-- <div class="container"> -->
   <div class="slider-inner">


     <div class="row">
       <div class="col-lg">
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
           <ol class="carousel-indicators">
             <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
             <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
             <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
           </ol>
           <div class="carousel-inner">
             <div class="carousel-item active">
               <img class="d-block w-100" src="<?= base_url() ?>assets/web/img/slides/slide1.jpg" alt="First slide">
             </div>
             <div class="carousel-item">
               <img class="d-block w-100" src="<?= base_url() ?>assets/web/img/slides/slide2.jpg" alt="Second slide">
             </div>
             <div class="carousel-item">
               <img class="d-block w-100" src="<?= base_url() ?>assets/web/img/slides/slide3.jpg" alt="Third slide">
             </div>
           </div>
           <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="sr-only">Previous</span>
           </a>
           <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="sr-only">Next</span>
           </a>
         </div>
         <!-- End Slider -->

       </div>
     </div>
     <!-- </div> -->
   </div>

 </section>

 <!-- Services -->
 <section class="pt-5 pb-5">
   <div class="container">
     <div class="row">
       <div class="col-md-4">
         <div class="media">
           <div class="iconbox iconmedium rounded-circle text-info mr-4">
             <i class="fa fa-truck"></i>
           </div>
           <div class="media-body">
             <h5>Fast Shipping</h5>
             <p class="text-muted">
               All you have to do is to bring your passion. We take care of the rest.
             </p>
           </div>
         </div>
       </div>
       <div class="col-md-4">
         <div class="media">
           <div class="iconbox iconmedium rounded-circle text-purple mr-4">
             <i class="fa fa-credit-card-alt"></i>
           </div>
           <div class="media-body">
             <h5>Online Payment</h5>
             <p class="text-muted">
               All you have to do is to bring your passion. We take care of the rest.
             </p>
           </div>
         </div>
       </div>
       <div class="col-md-4">
         <div class="media">
           <div class="iconbox iconmedium rounded-circle text-warning mr-4">
             <i class="fa fa-refresh"></i>
           </div>
           <div class="media-body">
             <h5>Free Return</h5>
             <p class="text-muted">
               All you have to do is to bring your passion. We take care of the rest.
             </p>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End Services -->
 <section class="products-grids trending pb-4">
   <div class="container">
     <div class="row">
       <div class="col-12">
         <div class="section-title">
           <h2>New Product Items</h2>
         </div>
       </div>
     </div>
     <div class="row mt-4">
       <?php foreach ($getprod as $prod) : ?>
         <div class="col-xl-3 col-lg-4 col-md-4 col-12">
           <?= form_open('belanja/tambah');
            echo form_hidden('id', $prod['id_produk']);
            echo form_hidden('qty', 1);
            echo form_hidden('price', $prod['harga']);
            echo form_hidden('name', $prod['nama_produk']);
            echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));


            ?>
           <div class="single-product">
             <div class="product-img img-fluid">
               <a href="<?= base_url('website/product_detail/' . $prod['id_produk']); ?>">
                 <img src="<?= base_url('assets/images/' . $prod['gambar']); ?>" width="250px" height="250px" />
               </a>
             </div>
             <div class="product-content">
               <h3>
                 <p class="font-weight-500"><?= $prod['nama_produk']; ?></p>
               </h3>
               <div class="product-price">
                 <span>Rp. <?= number_format($prod['harga'], 0) ?></span>
               </div>
             </div>
             <div class="product-content">

               <div class="product-price">
                 <a class="btn btn-success btn-sm" href="<?= base_url('website/product_detail/' . $prod['id_produk']);  ?>">Detail</a>
                 <button class=" btn btn-primary btn-sm mr-4" type="submit"><i class="fa fa-shopping-cart mr-1"></i>Add
                   to
                   chart</button>

               </div>
             </div>
           </div>
           <?php echo form_close(); ?>
         </div>
       <?php endforeach; ?>

     </div>
   </div>
 </section>