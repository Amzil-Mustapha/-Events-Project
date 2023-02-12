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
<?php

$conn = mysqli_connect('localhost','root','','contact_db');

if(isset($_POST['btn'])){

   $ville = $_POST['ville'];
   $event = $_POST['event'];
   

   $insert = "INSERT INTO `reserver`(`ville`, `event`) VALUES ('$ville','$event')";

   mysqli_query($conn, $insert);

   if ($conn->query($insert) === TRUE) {
    echo "New record created successfully";
   } else {
    echo "Error creating record: " . $conn->error;
   }

}
$conn->close();
?>

<div class="form-container">
  <?php
  if (isset($_POST['btn'])) {
    echo '<p>You have selected: '.$event.'</p>';
  }
  ?>
  <form action="">
   
    <div class="input-box">
      <input type="text" id="inp" name='ville' placeholder='Entrez votre ville'>
    </div><br> <br>
    <div class='input-box'>
      <select name="event" id="inp" >
        <option value="" >choisir votre événement</option>
        <option value="mariage.php">Mariage</option>
        <option value="homeanniv.php">Anniversaire</option>
        <option value="baby-shower.php">Douche de bébés</option>
        <option value="gender.php">féte de revelation</option>
        <option value="diplome.php">remise de diplome</option>
        <option value="fiancelle.php">fiancelle</option>
      </select>
      <input type="submit" class='btn' id="btn" name='btn'>
    </div>
  </form>
</div>
<script>
   document.getElementById("btn").addEventListener("click", function(event){
      event.preventDefault();
      var selectedOption = document.querySelector('select[name="event"]').value;
      window.location.href = selectedOption;
   });
</script>

