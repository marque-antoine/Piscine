<html>

	<head>
	<title>Login</title>

	</head>
	<body>

	<?php

	// Check if username and password are correct
	if ($_POST["nom"] == "php" && $_POST["pass"] == "php") {

	// If correct, we set the session to YES
	  session_start();
	  $_SESSION["Login"] = "YES";
	  header("Location: acceuil.php");

	}
	else {

	// If not correct, we set the session to NO
	  $_SESSION["Login"] = "NO";
	  echo "<h1>Vous avez trompe le compte! Esseyer de nouveau :) </h1>";
	 
	}
	
	?>

	</body>
	</html>


	