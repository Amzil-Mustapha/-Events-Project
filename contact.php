<?php

$conn = mysqli_connect('localhost','root','','contact_db');

if(isset($_POST['send'])){

   $name = $_POST['name'];
   $email = $_POST['email'];
   $number = $_POST['number'];
   $plan = $_POST['plan'];
   $address = $_POST['address'];
   $event = $_POST['event'];

   $insert = "INSERT INTO `contact_form`(`name`, `email`, `number`, `plan`, `address`, `event`) VALUES ('$name','$email','$number','$plan','$address','$event')";

   mysqli_query($conn, $insert);

   header('location:contact.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

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

<section class="contact">

   <h1 class="heading">Connectez-Nous</h1>

   <form action="" method="post">

      <div class="flex">

         <div class="inputBox">
            <span>Votre Nom </span>
            <input type="text" placeholder="Entrer votre Nom" name="name" required>
         </div>

         <div class="inputBox">
            <span>Votre Email</span>
            <input type="email" placeholder="Entrer votre Email" name="email" required>
         </div>

         <div class="inputBox">
            <span>Votre Numéro</span>
            <input type="text" placeholder="Entrer votre Numéro" name="number" required>
         </div>

         <div class="inputBox">
            <span>Choisir Plan</span>
            <select name="plan">
               <option value="basic">Plan Basic </option>
               <option value="premium">Plan Premium </option>
               <option value="ultimate">Plan Ultimate </option>
            </select>
         </div>

         <div class="inputBox">
            <span>Votre Adresse</span>            
            <textarea name="address" placeholder="Entrer votre Adresse" required cols="30" rows="10"></textarea>
         </div>

         <div class="inputBox">
            <span>Evènements choisi</span>            
            <textarea name="event" placeholder="Entrer votre événement choisi " required cols="30" rows="10"></textarea>
         </div>

      </div>

      <input type="submit" value="ENVOYER" name="send" class="btn">

   </form>

</section>

<?php @include 'footer.php'; ?>

</div>















<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>