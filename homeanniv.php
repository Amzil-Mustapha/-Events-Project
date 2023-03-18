<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>homeAnniversaire</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Add the Slick Slider CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<!-- Add the Slick Slider JavaScript -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

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
      <a href="calendar/calendar_anniv.php">Réserver</a>
      <!-- <a href="contact/contact_anniv.php"> Se Connecter</a> -->
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<section class="portfolio">

     <h1 class="heading">Les anniversaires</h1>

     <div class="portfolio-container">

     <a href= "boyanniv.php" class="box">
      <div class="image">
         <img src="images_site/birthday/boys/boy1.jpg" alt="">
      </div>
      <h3>Pour les garçons</h3>
     </a>

    <a href="girlanniv.php" class="box">
      <div class="image">
         <img src="images_site/birthday/girls/Temas de festa de aniversário infantil veja 10 temáticas incríveis.png" alt="">
      </div>
      <h3>Pour les Filles</h3>
   </a>
</section>

<?php @include 'footer.php'; ?>

</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<style>
  .slideshow-container {
    width: 400px;
    height: 400px;
    margin: auto;
    position: relative;
  }

  .slides {
    width: 400px;
    height: 400px;
    display: none;
  }

  .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    margin-top: -22px;
    padding: 16px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
  }

  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }

  .prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
  }

  .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }

  .active, .dot:hover {
    background-color: #717171;
  }
</style>
</body>