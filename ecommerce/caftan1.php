
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style2.css">
  <link rel="stylesheet" href="../css/style.css">
  <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../fonts/glyphicons-halflings-regular.svg" rel="stylesheet">

  <link href="../css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
  <div id="content" ><!-- content Starts -->
<div class="container" ><!-- container Starts -->


<div class="col-md-12"><!-- col-md-12 Starts -->

<div class="row" id="productMain"><!-- row Starts -->

<div class="col-sm-6"><!-- col-sm-6 Starts -->

<div id="mainImage"><!-- mainImage Starts -->

<div id="myCarousel" class="carousel slide" data-ride="carousel">

<ol class="carousel-indicators"><!-- carousel-indicators Starts -->

<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>

</ol><!-- carousel-indicators Ends -->

<div class="carousel-inner"><!-- carousel-inner Starts -->

<div class="item active">
<center>
<img src="../images_site/image_caftan/caftan11.png" class="img-responsive">
</center>
</div>

<div class="item">
<center>
<img src="../images_site/image_caftan/caftan14.png" class="img-responsive">
</center>
</div>

<div class="item">
<center>
<img src="../images_site/image_caftan/caftan13.png" class="img-responsive">
</center>
</div>

</div><!-- carousel-inner Ends -->

<a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Starts -->

<span class="glyphicon glyphicon-chevron-left"> </span>

<span class="sr-only"> Previous </span>

</a><!-- left carousel-control Ends -->

<a class="right carousel-control" href="#myCarousel" data-slide="next"><!-- right carousel-control Starts -->

<span class="glyphicon glyphicon-chevron-right"> </span>

<span class="sr-only"> Next </span>

</a><!-- right carousel-control Ends -->

</div>

</div><!-- mainImage Ends -->



</div><!-- col-sm-6 Ends -->


<div class="col-sm-6" ><!-- col-sm-6 Starts -->

<div class="box" ><!-- box Starts -->

<h1 class="text-center" > Traditionnel Caftan </h1>


<form action="" method="post" class="form-horizontal"  id="add-to-cart-form" ><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->
    <label class="col-md-4 control-label" for="quantity">Quantité</label>
    <div class="col-md-8"><!-- col-md-8 Starts -->
        <input type="number" id="quantity" name="quantity" value="1" min="1" max="10" class="form-control">
    </div><!-- col-md-8 Ends -->
</div><!-- form-group Ends -->


  <div class="form-group" ><!-- form-group Starts -->
    <label class="col-md-4 control-label" >La Taille</label>
    <div class="col-md-8" ><!-- col-md-7 Starts -->
      <select name="product_size" class="form-control" >
        <option value="">Selectionner la taille</option>
        <option value="Small">Small</option>
        <option value="Medium">Medium</option>
        <option value="Large">Large</option>
      </select>
    </div><!-- col-md-7 Ends -->
  </div><!-- form-group Ends -->

  <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">

  <p class='price'>
    Le prix de ce caftan : 1000DH
  </p>

  <p class="text-center buttons">
  <button class="btn btn-danger" type="submit" name="add_cart" onclick='addToCart("<?php echo $row_products['product_id']; ?>", 1, "<?php echo $product_size; ?>")'>
    <i class="fa fa-shopping-cart"></i> Ajouter au panier
  </button>
</p>

</form><!-- form-horizontal Ends -->


<button class="btn btn-warning" type="submit" name="add_wishlist">

<i class="fa fa-heart" ></i> ajouter au favoris

</button>



</p><!-- text-center buttons Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- box Ends -->


<div class="row" id="thumbs" ><!-- row Starts -->

<div class="col-xs-4" ><!-- col-xs-4 Starts -->

<a href="#" class="thumb" >

<img src="../images_site/image_caftan/caftan11.png" class="img-responsive" >

</a>

</div><!-- col-xs-4 Ends -->

<div class="col-xs-4" ><!-- col-xs-4 Starts -->

<a href="#" class="thumb" >

<img src="../images_site/image_caftan/caftan14.png" class="img-responsive" >

</a>

</div><!-- col-xs-4 Ends -->

<div class="col-xs-4" ><!-- col-xs-4 Starts -->

<a href="#" class="thumb" >

<img src="../images_site/image_caftan/caftan13.png" class="img-responsive" >

</a>

</div><!-- col-xs-4 Ends -->


</div><!-- row Ends -->


</div><!-- col-sm-6 Ends -->


</div><!-- row Ends -->

<div class="box" id="details"><!-- box Starts -->

<a class="btn btn-info tab" style="margin-bottom:10px;" href="#description" data-toggle="tab"><!-- btn btn-primary tab Starts -->

Description sur l'article
</a><!-- btn btn-primary tab Ends -->





<hr style="margin-top:0px;">

<div class="tab-content"><!-- tab-content Starts -->

<div id="description" class="tab-pane fade in active" style="margin-top:7px;" ><!-- description tab-pane fade in active Starts -->



caftan pour votre mariage



</div><!-- description tab-pane fade in active Ends -->






</div><!-- video tab-pane fade in  Ends -->


</div><!-- tab-content Ends -->

</div><!-- box Ends -->




</div><!-- box same-height headline Ends -->

</div><!-- col-md-3 col-sm-6 Ends -->

<!-- 
<div class='text' >

<center>

<p class='btn btn-warning'> Lacoste </p>

</center>

<hr>

<h3><a href='product-url-5' >Denim Borg Lined Western Jacket</a></h3>

<p class='price' > <del> $259 </del> | $100 </p>

<p class='buttons' >

<a href='product-url-5' class='btn btn-default' >View Details</a>

<a href='product-url-5' class='btn btn-danger'>

<i class='fa fa-shopping-cart'></i> Add To Cart

</a>


</p>

</div>



<a class='label sale' href='#' style='color:black;'>

<div class='thelabel'>Gift</div>

<div class='label-background'> </div>

</a>




</div>

</div>



<div class='col-md-3 col-sm-6 center-responsive' >

<div class='product' >

<a href='product-url-8' >

<img src='admin_area/product_images/Black Blouse Versace Coat1.jpg' class='img-responsive' >

</a>

<div class='text' >

<center>

<p class='btn btn-warning'> Philip Plein </p>

</center>

<hr>

<h3><a href='product-url-8' >Sleeveless Flaux Fur Hybrid Coat</a></h3>

<p class='price' > $245  </p>

<p class='buttons' >

<a href='product-url-8' class='btn btn-default' >View Details</a>

<a href='product-url-8' class='btn btn-danger'>

<i class='fa fa-shopping-cart'></i> Add To Cart

</a>


</p>

</div>








</div>

</div>



<div class='col-md-3 col-sm-6 center-responsive' >

<div class='product' >

<a href='product-url-9' >

<img src='admin_area/product_images/product-1.jpg' class='img-responsive' >

</a>

<div class='text' >



<a href='product-url-9' class='btn btn-default' >View Details</a>

<a href='product-url-9' class='btn btn-danger'>

<i class='fa fa-shopping-cart'></i> Add To Cart

</a>


</p>

</div> -->








</div>

</div>



</div><!-- row same-height-row Ends -->

</div><!-- col-md-12 Ends -->


</div><!-- container Ends -->
</div><!-- content Ends -->

<script src="../js/jquery-3.6.0.min.js"> </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script>
		$(document).ready(function() {
			$('#add-to-cart-form').submit(function(e) {
				e.preventDefault(); // empêche le formulaire de se soumettre
				var formData = $(this).serialize(); // récupère les données du formulaire
				$.ajax({
					type: 'POST',
					url: $(this).attr('action'),
					data: formData,
					success: function(response) {
						alert('Le produit a été ajouté au panier !');
						location.reload(); // recharge la page
					},
					error: function() {
						alert('Une erreur est survenue lors de l\'ajout du produit au panier.');
					}
				});
			});
		});
	</script>
</body>
</html>



