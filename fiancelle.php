<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<div class="container">

<section class="header">

   <a href="home.php" class="logo">OH Events</a>

   <nav class="navbar">
      <a href="portfolio.php">Nos Designs</a>
      <a href="contact.php"> Se Connecter</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<section class="services">

   <h1 class="heading">Décoration</h1>

   <div class="swiper service-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images_site/fiancelle/deco1.jfif" alt="">
            <div class="content">
               <a href="contact.php" class="btn">demander</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images_site/fiancelle/deco2.jfif" alt="">
            <div class="content">
               <a href="contact.php" class="btn">demander</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images_site/fiancelle/deco3.jfif" alt="">
            <div class="content">
               <a href="contact.php" class="btn">demander</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images_site/fiancelle/deco4.jfif" alt="">
            <div class="content">
               <a href="contact.php" class="btn">demander</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images_site/fiancelle/deco5.jfif" alt="">
            <div class="content">
               <a href="contact.php" class="btn">demander</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images_site/fiancelle/deco6.jfif" alt="">
            <div class="content">
               <a href="contact.php" class="btn">demander</a>
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<section class="services">
<h1 class="heading">Menu</h1>
   <div class="swiper service-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images_site/fiancelle/meal1.jfif" alt="">
            <div class="content">
               <a href="contact.php" class="btn">demander</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images_site/fiancelle/meal2.jfif" alt="">
            <div class="content">
               <a href="contact.php" class="btn">demander</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images_site/fiancelle/meal3.jfif" alt="">
            <div class="content">
               <a href="contact.php" class="btn">demander</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images_site/fiancelle/meal4.jfif" alt="">
            <div class="content">
               <a href="contact.php" class="btn">demander</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images_site/fiancelle/meal5.jfif" alt="">
            <div class="content">
               <a href="contact.php" class="btn">demander</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images_site/fiancelle/meal6.jfif" alt="">
            <div class="content">
               <a href="contact.php" class="btn">demander</a>
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>


<?php @include 'footer.php'; ?>

</div>















<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>