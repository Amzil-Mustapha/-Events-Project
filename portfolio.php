<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>portfolio</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

<?php @include 'header.php'; ?>

<section class="portfolio">

   <h1 class="heading">Nos designs</h1>

   <div class="portfolio-container">

      <a href= "mariage.php" class="box">
         <div class="image">
            <img src="images_site/wedding/ooowww.jpg" alt="">
         </div>
         <h3>mariage</h3>
      </a>

      <a href="homeanniv.php" class="box">
         <div class="image">
            <img src="images_site/birthday/boys/boy2.jpg" alt="">
         </div>
         <h3>fete d'anniversaire</h3>
      </a>

      <a href="baby-shower.php" class="box">
         <div class="image">
            <img src="images_site/birthday/Fall Theme Baby Shower 40+ Stunning Ideas For Decorations & Food.jpg" alt="">
         </div>
         <h3>la douche de bébé</h3>
      </a>

      <a href="gender.php" class="box">
         <div class="image">
            <img src="images_site/birthday/TqpV9fep.jpg" alt="">
         </div>
         <h3>fete de révélation</h3>
      </a>

      <a href="diplome.php" class="box">
         <div class="image">
            <img src="images_site/cong.jpg" alt="">
         </div>
         <h3>Remise de diplome</h3>
      </a>

      <a href="fiancelle.php" class="box">
         <div class="image">
            <img src="images_site/f.jpg" alt="">
         </div>
         <h3>Le fiancaille</h3>
      </a>

   </div>

</section>

<?php @include 'footer.php'; ?>

</div>















<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>



</body>
</html>