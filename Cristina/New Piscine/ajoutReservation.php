<?php
	include'inc/header.php';
	//include'conexion2.php';

	function myFunction() {
	$nom = $_POST['nom'];
	$pass = $_POST['pass'];
	
}
?>
<middle>
<form action= "fctAjoutReservation.php" method="POST" >
    <legend>Editeur</legend>
    <p>
        <label for="DateReservation">Date de reservation</label> : <input type="date" name="dateReservation" id="dateReservation" required  />
    </p>
                    
    <p>
        <label for="Commenaire">Commentaire</label> : <input type="text" name="Commenaire" id="Commenaire" required/>

    </p>
    <p>
        <label for="PrixEspace">Prix Espace</label> : <input type="number" name="PrixEspace" id="PrixEspace" required/>

    </p>
    <p>
        <label for="Statut">Statut</label> : <input type="bool" name="Statut" id="Statut" required/>
    </p>
    <p>
        <label for="EtatFacture">Etat de la Facture</label> : <input type="bool" name="EtatFacture" id="EtatFacture" required/>
        <!--<label for="Num">NUM </label><input type="number" name="numEditeur" id="numEditeur" required/>-->

    </p>
    <input type="submit" value="Ajouter" id = "add" />
</form>
</middle>
</body>
</html>