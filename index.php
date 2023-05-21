<?php 
require 'Common.php';
if(isset($_SESSION['email']))
    header('location:Products.php');

?><!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>LeatherHoard</title>
   <meta name="keywords" content="leather, leather products, leather website, e-commerce, selling, leather shop, leather service, buy leather">
   <meta name="description" content="An Open Source E-commerce website for selling leather products">
   <meta name="author" content="Kiran Panjwani">
   <!-- bootstrap css -->

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="logincss.css">
   <link rel="stylesheet" href="css/theme.css">
   <link rel="stylesheet" href="./Style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- favicon -->
   <link rel="icon" href="images/logo3.png" type="image/gif" />
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

   <!-- theme.js needs to be in the head -->
   <script src="./js/theme.js" async></script>
</head>
<!-- body -->

<body class="main-layout">
   <button onclick="topFunction()" id="myBtn" title="Go to top">
   <a href="#">top</a>
   </button>
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader-wrapper">
         <div class="loader-circle"></div>
         <div class="loader-circle"></div>
         <div class="loader-circle"></div>
         <div class="loader-shadow"></div>
         <div class="loader-shadow"></div>
         <div class="loader-shadow"></div>
      </div>
   </div>
   <!-- end loader -->
   <!-- header -->


   <!-- Progress bar  -->
   <div class="progressBar"></div>
   

   <header>
      <!-- header inner -->
   <!-- end header inner -->
   <!-- end header -->
   <!-- banner -->
   <section class="banner_main">
      <div id="banner1" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#banner1" data-slide-to="0" class="active"></li>
            <li data-target="#banner1" data-slide-to="1"></li>
            <li data-target="#banner1" data-slide-to="2"></li>
            <li data-target="#banner1" data-slide-to="3"></li>
            <li data-target="#banner1" data-slide-to="4"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="container">
                  <div class="carousel-caption">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="text-bg">
                              <span>Experience Royalty With Our</span>
                              <h1>Leather Collection</h1>
                              <p>Every piece of leather product produced and sold by us reflects affluence, both in
                                 its appearance as well as feel.</p>
                              <a href="./Products.php">Buy Now </a> <a href="./Contact.php">Contact </a>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="text_img">
                              <figure class="banner-img"><img src="./images/leathers.png" alt="#" /></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <div class="carousel-caption">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="text-bg">
                              <span>Experience Royalty With Our</span>
                              <h1>Leather Collection</h1>
                              <p>Every piece of leather products produced and sold by us reflects affluence, both in
                                 its appearance as well as feel.</p>
                                 <a href="./Products.php">Buy Now </a> <a href="./Contact.php">Contact </a>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="text_img">
                              <figure class="banner-img"><img src="./images/leathers.png" alt="leather pieces" /></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <div class="carousel-caption">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="text-bg">
                              <span>Experience Royalty With Our</span>
                              <h1>Leather Collection</h1>
                              <p>Every piece of leather products produced and sold by us reflects affluence, both in
                                 its appearance as well as feel.</p>
                                 <a href="./Products.php">Buy Now </a> <a href="./Contact.php">Contact </a>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="text_img">
                              <figure class="banner-img"><img src="./images/leathers.png" alt="leather pieces" /></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <div class="carousel-caption">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="text-bg">
                              <span>Experience Royalty With Our</span>
                              <h1>Leather Collection</h1>
                              <p>Every piece of leather products produced and sold by us reflects affluence, both in
                                 its appearance as well as feel.</p>
                                 <a href="./Products.php">Buy Now </a> <a href="./Contact.php">Contact </a>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="text_img">
                              <figure class="banner-img"><img src="./images/leathers.png" alt="leather pieces" /></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <div class="carousel-caption">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="text-bg">
                              <span>Experience Royalty With Our</span>
                              <h1>Leather Collection</h1>
                              <p>Every piece of leather products produced and sold by us reflects affluence, both in
                                 its appearance as well as feel.</p>
                                 <a href="./Products.php">Buy Now </a> <a href="./Contact.php">Contact </a>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="text_img">
                              <figure class="banner-img"><img src="./images/leathers.png" alt="leather pieces" /></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
         </a>
         <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
         </a>
      </div>
   </section>
   <!-- end banner -->

   <!-- company quality services -->
   <div class="page-section">
      <div class="container">
         <div class="row">
            <div class="col-lg-4">
               <div class="card-service wow fadeInUp">
                  <div class="service_img">
                     <img src="./images/quality1.png" alt="">
                  </div>
                  <div class="body">
                     <h5 class="text-secondary">Providing Quality Item</h5>
                     <p>Quality leather speaks sobriety, versatility, and timeless elegance in today's ultra-modern
                        fashion industry. Value for money has become a trend now. Customers demand quality. Satisfying
                        you with quality leather products is our Unique Selling Point. We claim
                        your trust as we deliver the promise.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="card-service wow fadeInUp">
                  <div class="service_img">
                     <img src="./images/quality2.png" alt="">
                  </div>
                  <div class="body">
                     <h5 class="text-secondary">Customer Update</h5>
                     <p>At Leather Company we are here to help with your shopping experience, get in touch by either
                        email or by phone. If an item is out of stock our team will let you know when we will have it
                        back in stock. If you
                        are happy or unhappy with our service for any reason then please contact us on the details
                        below.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="card-service wow fadeInUp">
                  <div class="service_img">
                     <img src="./images/quality3.png" alt="">
                  </div>
                  <div class="body">
                     <h5 class="text-secondary">Personalized Items</h5>
                     <p>We are experts in all leather products, we will help you find an exact sizing, or if you are
                        trying to track down a fashion item which is overpriced on the High Street, then we will try and
                        source a similar and affordable item to match or we offer a bespoke made to order service in
                        quality leather goods</p>
                  </div>
               </div>
            </div>
         </div>
      </div> <!-- .container -->
   </div>

   <div class="customer">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Customer Reviews</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div id="myCarousel" class="carousel slide customer_Carousel " data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#myCarousel" data-slide-to="0" class="active next-circle"></li>
                     <li data-target="#myCarousel" data-slide-to="1" class="next-circle"></li>
                     <li data-target="#myCarousel" data-slide-to="2" class="next-circle"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="container">
                           <div class="carousel-caption ">
                              <div class="row">
                                 <div class="col-md-9 offset-md-3">
                                    <div class="test_box">
                                       <i><img class="customer-review-quote" src="./images/cos.png" alt="#" /></i>
                                       <h4>William Lucas</h4>
                                       <p>Hi it's William from Lahore! I just received my new backpack purse and it is
                                          exactly what I've been looking for!!!! I totally love it!!!! I just love your
                                          stuff!!!!! Thanks so much and thanks to LeatherHoard.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                   
                   
                  </div>
                  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end customer -->

   <!--  contact -->
 
   <!-- Javascript files-->
   <script src="./js/jquery.min.js"></script>
   <script src="./js/bootstrap.bundle.min.js"></script>
   <!-- sidebar -->

   <script src="./js/custom.js"></script>

   <!-- reiquired js for the page  -->
   <script src="./js/searchSuggestions.js"> </script>
   <script src="./js/index.js"></script>
   <script src="./js/carousal.js"></script>
   <?php
        include "Footer.php";
        ?>
</body>

</html>
        
    </body>
</html>
