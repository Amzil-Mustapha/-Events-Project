<?php
session_start();
if(isset($_POST['add_cart'])){
  //if user has already added a  product to cart
  if(isset($_SESSION['cart'])){
    $products_array_ids=array_column($_SESSION['cart'],"product_id");
    //if  product has already been added to cart or not
    if( !in_array($_POST['product_id'], $products_array_ids)){ 
      $product_id = $_POST['product_id'];
        $product_array = array(
                         'product_id' => $_POST['product_id'],
                         'product_name' => $_POST['product_name'],
                         'product_price' => $_POST['product_price'],
                         'product_image' => $_POST['product_image'],
                         'product_quantity' => $_POST['product_quantity'],
                         'product_size' => $_POST['product_size']

     );
     $_SESSION['cart'][$product_id] = $product_array;
     //if  product has already been added
    }else{
      // echo'<script>alert("product was already to cart")</script>';
      
    }
 //if this is the first product
  }else{
     $product_id=$_POST['product_id'];
     $product_name=$_POST['product_name'];
     $product_price=$_POST['product_price'];
     $product_image=$_POST['product_image'];
     $product_quantity=$_POST['product_quantity'];
     $product_size=$_POST['product_size'];

     $product_array=array(
                    'product_id'=>$product_id,
                    'product_name'=>$product_name,
                    'product_price'=>$product_price,
                    'product_image'=>$product_image,
                    'product_quantity'=>$product_quantity,
                    'product_size'=>$product_size

     );
     $_SESSION['cart'][$product_id]=$product_array;
     //[]
  }
  //calculer total
  calculateTotalCart();
// remove product from cart
}else if(isset($_POST['remove_product'])){
  $product_id = $_POST['product_id'];
  unset($_SESSION['cart'][$product_id]);
    //calculer total
  calculateTotalCart();
}else if( isset($_POST['edit_quantity'])){
  //get id and qtit from the form
  $product_id = $_POST['product_id'];
   $product_quantity = $_POST['product_quantity'];
   //get the product array from the session
   $_SESSION['cart'][$product_id ];
   //update product quantity
   $product_array = $_SESSION['cart'][$product_id];
   $product_array['product_quantity'] = $product_quantity;
   //return array back the its palce
   $_SESSION['cart'][$product_id]=$product_array;
     //calculer total
  calculateTotalCart();

}else{
  //  header('location:index.php');
}
function calculateTotalCart(){
   $total = 0;
  foreach($_SESSION['cart'] as $key => $value){
    $product = $_SESSION['cart'][$key];
    $price = $product['product_price'];
    $quantity = $product['product_quantity'];

    $total = $total+($price * $quantity);
  }
  $_SESSION['total'] = $total;
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assests/css/style.css"/>
    <title>Cart</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg  navbar-white bg-body-tertiary py-3 fixed-top">
      <div class="container">
        <img class="logo" src="assests/imgs/logo.png" alt="">
        <h2 class="brand">E-Shop</h2>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            
            <li class="nav-item">
              <a class="nav-link" href="index.php">Acceuil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.php">Boutique</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="#">Contactez-nous</a>
            </li>
            <!-- Ajouter shop and user icons -->
            <li class="nav-item">
              <a href="cart.php"><i class="fas fa-solid fa-bag-shopping"></i></a>
              <a href="account.html"><i class="fas fa-solid fa-user"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

        <!-- Cart -->

        <section class="cart container my-5 py-5">
            <div class="container mt-5">
                <h2 class="font-weight-bolde">Votre panier</h2>
                <hr>
            </div>

            <table class="mt-5 pt-5">
                <tr>
                    <th>produit</th>
                    <th>quantité</th>
                    <th></th>
                    <th>sous-total</th>
                </tr>
                <?php foreach ($_SESSION['cart'] as $key => $value) { ?>     
                <tr>
                    <td>
                        <div class="product-info">
                            <img src="assests/imgs/<?php echo $value['product_image'];?>"/>
                            
                            <div>
                                <p><?php echo $value['product_name'];?></p>
                                <small><span>$</span><?php echo $value['product_price'];?></small>
                                <br>
                                <form method="POST"action="cart.php">
                                <input type="hidden"  name="product_id" value="<?php echo $value['product_id'];?>"/>
                                <input type="submit"  name="remove_product" class="remove-btn" value="remove"/>
                                </form>
                                
                            </div>
                        </div>
                    </td>
                    <td>
                      
                      <form method="POST" action="cart.php">
                        <input type="hidden" name="product_id" value="<?php echo $value['product_id'];?>"/>
                        <input type="number" name="product_quantity" value="<?php echo $value['product_quantity'];?>"/>
                        <input type="submit" class="edit-btn" value="edit" name="edit_quantity"/>
                      </form>
                      
                    </td>
                    <td>
                      <span>$</span>
                      <span class="product-price"><?php echo $value['product_quantity'] * $value['product_price']; ?></span>
                    </td>

                </tr> 
                <?php } ?>  
            <!-- total table -->
            <div class="cart-total">
              <table>
                <!-- <tr>
                  <td>Subtotal</td>
                  <td>$155</td>
                </tr> -->
                <tr>
                  <td>Totale</td>
                  <td>$ <?php echo $_SESSION['total'];?></td>
                </tr>

              </table>
            </div>
            

            <!-- chechout button -->

            <div class="checkout-container">
              <form action="checkout.php" method="POST">
              <input type="submit" class="btn checkout-btn" value="Checkout" name="checkout">
              </form>
              
            </div>
  





        </section>
        
      <!-- Footer -->
      <footer class="mt-5 py-5">
        <div class="row container mx-auto pt-5">
           <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <img class="logo" src="assests/imgs/logo1.png"alt="">
            <p class="pt-3"> Nous fournissons les meilleurs produits aux prix les plus abordables</p>
           </div>
           <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <h5 class="pb-2">Vedettes</h5>
            <ul class="text-uppercase">
              <li><a href="#">Hommes</a></li>
              <li><a href="#">Femmes</a></li>
              <li><a href="#">Garçons</a></li>
              <li><a href="#">Filles</a></li>
              <li><a href="#">Nouveaux arrivants</a></li>
              <li><a href="#">vêtement</a></li>
            </ul>
           </div>
          
          <!-- contact us -->
          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <h5 class="pb-5">Contactez-nous</h5>
            <div>
              <h6 class="text-uppercase">Adresse</h6>
              <p>12345 Marrakech</p>
            </div>
            <div>
              <h6 class="text-uppercase">Téléphone</h6>
              <p>05.34.56.12.44</p>
            </div>
            <div>
              <h6 class="text-uppercase">Email</h6>
              <p>ecomerce@gmail.com</p>
            </div>
          </div>
          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <h5 class="pb-2">Instagram</h5>
            <!-- <div class="row">
              <img src="assests/imgs/featured1.jpg" class="img-fluid w-25 h-100 m-2 "alt="">
              <img src="assests/imgs/featured4.jpg" class="img-fluid w-25 h-100 m-2 "alt="">
              <img src="assests/imgs/featured3.jpg" class="img-fluid w-25 h-100 m-2 "alt="">
            </div> -->
          </div>
        </div>
        <!-- copyright -->

        <div class="copyright mt-5">
          <div class="row container mx-auto ">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
              <img src="assests/imgs/pay.png"  alt="">
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
        </div>


      </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>