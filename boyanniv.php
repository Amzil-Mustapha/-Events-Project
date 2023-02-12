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

   <a href="home.php" class="logo">OH Events</a>

   <nav class="navbar">
      <a href="homeanniv.php">Anniversaire</a>
      <a href="contact.php"> Se Connecter</a>
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
            <img src="images_site/birthday/boys/Transportation Themed Birthday Party Ideas Photo 2 of 8.jpg" alt="">
            <div class="content">
               <a href="contact.php" class="btn">demander</a>
            </div>
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
<style>
    .local .slide{

height: 35rem;

width: 30rem;

overflow: hidden;

position: relative;

user-select: none;

margin-bottom: 4rem;

}



.local .slide img{

height: 100%;

width: 100%;

object-fit: cover;

transition: .2s linear;

margin-left: 10px;

}



.local .slide:hover img{

transform: scale(1.1);

}



.local .slide .content{

position: absolute;

bottom:0; left:0; right:0;

background: var(--transparent-white);

backdrop-filter: blur(.5rem);

padding:2rem;

text-align: center;

transition: .2s linear;

transform: translateY(calc(100% - 6.5rem));

margin-bottom: 40px;

}



/* .local .slide:hover .content{

transform: translateY(0);

} */



.local .slide .content .btn{

font-size: 2rem;

color:var(--black);

text-transform: uppercase;

}
</style>
</body>
</html>