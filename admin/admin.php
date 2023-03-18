<?php
session_start();

if (isset($_POST['login']) && isset($_POST['password'])) {
  // Vérifiez les identifiants de connexion
  if ($_POST['login'] == 'admin' && $_POST['password'] == 'admin') {
    // Identifiants valides, enregistrez le login de l'utilisateur dans une variable de session
    $_SESSION['login'] = 'admin';

    // Redirigez l'utilisateur vers la page d'accueil de l'application
    header('Location: mainpage.php');
    exit;
  } 
}
?>
<link rel="stylesheet" href="../css/style.css">
<div class="container">

<section class="header">
<form method="post">

    <h1 class="heading"><center> connection d'admin</center></h1> <br> <br>
    
  <label for="login">nom d'utilisateur:</label>
  <input type="text" name="login" id="login"> <br> <br>
  <br>
  <label for="password">Mot de passe :</label>
  <input type="password" name="password" id="password"> <br> <br>
  <br>
  <input type="submit" class='btn' id="btn" name='btn' value="se connecter">
</form>

<?php if (isset($error)) { echo $error; } ?>
<style>
  form{
      margin-left:300px;
  }
  h1{
    border-bottom:1px solid black;
  }
  .heading{
    margin-left:-120px;
  }
  label{
    font-size:20px;
  }
  input{
    border:1px solid black;
    height:30px;

  }
 
</style>
<?php
if (isset($_FILES['image'])) {
    $target_dir = "../images_site/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Vérifier si le fichier image est réel ou faux
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Vérifier si le fichier existe déjà
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Vérifier la taille du fichier
    if ($_FILES["image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Autoriser certains formats de fichiers
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Vérifier si $uploadOk est défini à 0 par une erreur
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";

    // Si tout va bien, essayez de télécharger le fichier
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>

<!-- Formulaire HTML pour télécharger une image -->
<form action="" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="image" id="image">
    <input type="submit" value="Upload Image" name="submit">
</form>

