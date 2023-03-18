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

   <style>
      #inp{
        height:3.5rem;
        width:30rem;
        background: var(--transparent-white);
        backdrop-filter: blur(.1rem);
        box-shadow: var(--box-shadow);
        border-radius: .5rem;
        text-align: center;
    }
   </style>

</head>
<body>
   
<div class="container">

<?php @include 'header.php'; ?>

<section class="pricing">
   
      <form action="" id="formito">

<h4 class="heading">Voilà nos packs</h2> <br> <br> <br>

 <div class="box">
   <div style='margin-left:300px;'>
     <select name="event" id="inp" style=' height:50px;' >
       <option value="" >choisir le pack de votre événement</option>
       <option value="pricing/mariage_price.php">Mariage</option>
       <option value="pricing/anniv_price.php">Anniversaire</option>
       <option value="pricing/baby_price.php">Douche de bébés</option>
       <option value="pricing/gender_price.php">féte de revelation</option>
       <option value="pricing/diplome_price.php">remise de diplome</option>
       <option value="pricing/fiancelle_price.php">fiancelle</option>
     </select> <br> <br> 
     <input type="submit" class='btn' id="btn" name='btn' value="chercher">
   </div>
</div></div>
 </form>
</div>
<script>
  document.getElementById("btn").addEventListener("click", function(event){
     event.preventDefault();
     var selectedOption = document.querySelector('select[name="event"]').value;
     window.location.href = selectedOption;
  });
</script>
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
<style>
   .formito{
      margin-left:100px;

   }
</style>
</body>
</html>