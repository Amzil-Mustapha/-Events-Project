<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boy Birthday </title>

    <link rel="stylesheet" href="css/style.css"/>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
</head>
<body>
<div class="container">

<section class="header">
   <img src="images_site/logo1.png" alt="" style="max-width: 80px; display: inline-block; vertical-align: top;">
   
   <a href="home.php" class="logo">OH Events</a>

   <nav class="navbar">
      <a href="homeanniv.php">Anniversaire</a>
      <a href="calendar/calendar_anniv.php">Réserver</a>
      <!-- <a href="contact.php"> Se Connecter</a> -->
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<section class="mariage">

   <h1 class="heading">anniversaire Garçcons</h1>

   <div class="swiper mariage-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images_site/birthday/boys/boy1.jpg" alt="">
            <div class="content">
               <a href="contact.php" class="btn">demander</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="slideshow-container">
          <div class="mySlides">
            <?php include('page.php'); ?>
            <img src="images_site/birthday/b1.png" style="width:400px;height:400px;">
         </div>

         <div class="mySlides">
           <img src="images_site/birthday/b2.png" style="width:400px;height:400px;">
         </div>

         <div class="mySlides">
           <img src="images_site/birthday/b3.png" style="width:400px;height:400px;">
         </div>

         <a class="prev" onclick="plusSlides(-1)">❮</a>
         <a class="next" onclick="plusSlides(1)">❯</a>
      </div>   
            <!-- <img src="images_site/birthday/boys/Transportation Themed Birthday Party Ideas Photo 2 of 8.jpg" alt=""> -->
            <!-- <div class="content">
               <a href="contact.php" class="btn">demander</a>
            </div> -->
         </div>

         <div class="swiper-slide slide">
            <img src="images_site/birthday/boys/lC-Da3PH.jpg" alt="">
            <div class="content">
               <a href="contact.php" class="btn">demander</a>
            </div>
         </div>  
      </div>
</div>

<div class="swiper mariage-slider" >
      <div class="swiper-wrapper">
        <div class="swiper-slide slide">
            <img src="images_site/birthday/boys/boy8.jpg" alt="">
            <div class="content">
               <a href="acontact.php" class="btn">damander</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images_site/birthday/boys/boy5.jpg" alt="">
            <div class="content">
               <a href="contact.php" class="btn">demander</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images_site/birthday/boys/boy6.jpg" alt="">
            <div class="content">
               <a href="contact.php" class="btn">demander</a>
            </div>
         </div>
      </div>
      


</div>

<?php @include 'footer.php'; ?>

</div>


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>