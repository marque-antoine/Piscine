
<html>
<head>
	<meta charset="UTF-8">
	<title>Edite</title>

	<link rel="stylesheet" href="style-acceuil.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="shortcut icon" href="#" />
	<meta charset="utf-8">
	<style>
		body  {
		    background-image: url("im1.jpg");
		    background-color: #cccccc;
		}


		input[type=text], select {
		    width: 100%;
		    padding: 12px 20px;
		    margin: 8px 0;
		    display: inline-block;
		    border: 1px solid #ccc;
		    border-radius: 4px;
		    box-sizing: border-box;
		}

		input[type=password], select {
		    width: 100%;
		    padding: 12px 20px;
		    margin: 8px 0;
		    display: inline-block;
		    border: 1px solid #ccc;
		    border-radius: 4px;
		    box-sizing: border-box;
		}

		input[type=submit] {
		    width: 100%;
		    background-color: #4CAF50;
		    color: white;
		    padding: 14px 20px;
		    margin: 8px 0;
		    border: none;
		    border-radius: 4px;
		    cursor: pointer;
		}

		input[type=submit]:hover {
		    background-color: #45a049;
		}

		div {
		    border-radius: 5px;
		    background-color: #f2f2f2;
		}
		{
			padding: 100px;
		}
	</style>
</head>
<header>
	<div class="top"> 
		<div class="container">
			<div class="content">
				
			</div>
		</div>
	</div>
</header>
<body>



<script>

function myFunction() {
    var message, x;
    message = document.getElementById("error");
    message.innerHTML = "";
    x = document.getElementById("nom").value;
    y = document.getElementById("pass").value;
    try { 
        if(x == "")  throw "empty";
        if(x !=="Ali") throw "n'exite pas";
        x = String(x);
        if(y == "")  throw "empty";
        if(y !=="pass") throw "n'exite pas";
        if(x !=="Ali" && y !=="pass") throw document.getElementByHref("acceuil.php").value = "login.html" ;

        
    }
    catch(err) {
        error.innerHTML = "Nom or password " + err;
        die("yo");
    }
    if(x !=="Ali" && y !=="pass") throw myFunction() ;

}
function myFunction3() {
	$nom = $_POST['nom'];
	$pass = $_POST['pass'];
	
}
</script>
  
	<section>
		<div class="middle" >
			<div class="containner">

				<div class="content">
					<div class="col-md-4">
					</div>
					
					<div class="col-md-4">
						<h1>Se connecter</h1>
						<form action= "acceuil.php" method="POST" onsubmit="myFunction()">
							<label for="name" >Nom: </label>
							<input name="nom" type="text" placeholder="Nom d'utilisateur" id="nom" required/>
							<p id="error"></p>

							<label for="password">Password: </label>
							<input name="pass" type="password" placeholder="Mot de passe" id="pass" required/>

							<input type="submit" value="Se connecter" id = "seConnecter" onclick="myFunction()" onsubmit="myFunction()"/>
							<button type="button" id = "buton" onclick="myFunction()">Test Input</button>

				    		<input type="radio" name="souvenir" value="se souvenir" > Se souvenir de moi<br>
						</form>
					</div>
					
					<div class="col-md-4">
					</div>
				</div>
			</div>
		</div>
	</section>
	
</body>
	
</html>
