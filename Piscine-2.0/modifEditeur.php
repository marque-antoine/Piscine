<?php
	include'inc/header.php';
	//include'conexion2.php';

	function myFunction() {
	$nom = $_POST['nom'];
	$pass = $_POST['pass'];
	
}
?>
<middle>
<form action= "modifEditeurFunc.php" method="POST" >
    <legend>Editeur</legend>
    <p>
        <label for="NomEditeur">Modifier le nom de l'Editeur</label> : <input type="text" name="nomEditeur" id="nomEditeur"  />
    </p>
                    
    <p>
        <label for="Ville">Mofifier le ville</label> : <input type="text" name="ville" id="ville" />

    </p>
    <p>
        <label for="Rue">modifier la rue</label> : <input type="text" name="Rue" id="Rue" />

    </p>
    <p>
        <label for="CodePostale">Modifier le code postale</label> : <input type="text" name="code" id="code" />
        <!--<label for="Num">NUM </label><input type="number" name="numEditeur" id="numEditeur" required/>-->

    </p>
    <input type="submit" value="Ajouter" id = "add" />
</form>
</middle>
</body>
</html>