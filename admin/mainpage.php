<html>
<head>
<link rel="stylesheet" href="../css/style.css"> 
</head>
<body>

<ul>
<br>
<h2>
	<form method="post" action="mainpage.php">	
	<center><h1 class='heading'>*******Bonjour Admin*******</h1> 
	<input type="submit" class='btn' id="btn" name='btn' value="se déconnecter">


	</form>
  
	
</ul>
</h2>
<p>

<?php
session_start();	
	if(isset($_POST['logout'])){
		session_unset();
		session_destroy();
		header( "Refresh:3; url=logout.php"); 
	}
?>
</body>
</html>