<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>pricing</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

<?php @include 'header.php'; ?>

<section class="pricing">

   <h1 class="heading">NOS PRIX </h1>

   <div class="box-container">

      <div class="box">
         <h3>Plan Basic</h3>
         <div class="price">DH 20 000/+</div>
         <div class="list">
            <p> <i class="fas fa-check"></i> photographie</p>
            <p> <i class="fas fa-check"></i> Maquillage</p>
            <p> <i class="fas fa-check"></i> Invitations</p>
            <p> <i class="fas fa-check"></i> Décoration</p>
            <p> </p>
            <p> </p>
            <p> </p>
            <p> </p>
         </div>
         <a href="contact.php" class="btn">choose plan</a>
      </div>

      <div class="box">
         <h3>Plan Premium </h3>
         <div class="price">DH 30 000/+</div>
         <div class="list">
         <p> <i class="fas fa-check"></i> photography</p>
         <p> <i class="fas fa-check"></i> Makeup</p>
         <p> <i class="fas fa-check"></i> Invitations</p>
         <p> <i class="fas fa-check"></i> Décoration</p>
         <p><i class="fas fa-check"></i> Animation & Music </p>
         <p></p>
         <p> </p>
         </div>
         <a href="contact.php" class="btn">choose plan</a>
      </div>

      <div class="box">
         <h3>Plan Ultime </h3>
         <div class="price">DH 60 000/+</div>
         <div class="list">
         <p> <i class="fas fa-check"></i> photography</p>
         <p> <i class="fas fa-check"></i> Makeup</p>
         <p> <i class="fas fa-check"></i> Invitations</p>
         <p> <i class="fas fa-check"></i> Décoration</p>
         <p><i class="fas fa-check"></i> Animation & Music </p>
         <p> <i class="fas fa-check"></i> Meals & Drinks</p>
         </div>
         <a href="contact.php" class="btn">choose plan</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="heading">Avis Clients</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images_site/client/client1.png" alt="">
            <h3>la famille d'El Abssi</h3>
            <p>Nous sommes très heureux ,nous avons apprécié la décoration de notre cérémonie.Elle est parfaite</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images_site/client/client2.png" alt="">
            <h3>La famille de Wahabi</h3>
            <p>Quel beau moment! l'organisation du mariage est plus que parfaite j'adore!!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <!-- <i class="fas fa-star"></i> -->
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images_site/client/client3.png" alt="">
            <h3>Mademoiselle Najwa</h3>
            <p>J'ai passé un bon anniversaire avec mes amis,je donne 5 étoiles.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-4.png" alt="">
            <h3>john doe</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga magni perspiciatis aut repellat nihil? Eveniet fugit eius quos architecto repellendus.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-5.png" alt="">
            <h3>john doe</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga magni perspiciatis aut repellat nihil? Eveniet fugit eius quos architecto repellendus.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
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