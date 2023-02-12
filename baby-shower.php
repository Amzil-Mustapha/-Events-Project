<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Baby shower</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
    .portfolio .portfolio-container .box .image{
        height: 40rem;
    }
    
   </style>
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

<section class="portfolio">

     <h1 class="heading">Douche BéBé</h1>

     <div class="portfolio-container">

     <a href= "baby-boy.php" class="box">
      <div class="image">
         <img src="images_site/baby_shower/boy/font-boys.jfif" alt="">
      </div>
      <h3>Douche Bébé Garçcon</h3>
     </a>

    <a href="baby-girl.php" class="box">
      <div class="image">
         <img src="images_site/baby_shower/girl/font-girl.jfif" alt="">
      </div>
      <h3>Douche Bébé Fille</h3>
   </a>
</section>

<?php @include 'footer.php'; ?>

</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>