<?php
	include'inc/header.php';
	//include'conexion2.php';

	function myFunction() {
	$nom = $_POST['nom'];
	$pass = $_POST['pass'];
	
}
?>
<middle>
<form action= "ajoutJeuxfunc.php" method="POST" >
    <legend>Editeur</legend>
    <p>
        <label for="NomJeux">Nom du jeux</label> : <input type="text" name="nomJeux" id="nomJeux" required  />
    </p>
                    
    <p>
        <label for="NombreJoueur">Nombre Joueur</label> : <input type="int" name="nombre" id="nombre" required/>

    </p>
    <p>
        <label for="DateSortie">Date sortie</label> : <input type="date" name="DateSortie" id="DateSortie" required/>

    </p>
    <p>
        <label for="DureePartie">Duree partie</label> : <input type="int" name="DureePartie" id="DureePartie" required/>
        <!--<label for="Num">NUM </label><input type="number" name="numEditeur" id="numEditeur" required/>-->

    </p>
     <p>
        <label for="numEditeur">ID editeur</label> : <input type="int" name="numEditeur" id="numEditeur" required/>
        <!--<label for="Num">NUM </label><input type="number" name="numEditeur" id="numEditeur" required/>-->

    </p>

     <p>
        <label for="codeCategorie">Code categorie</label> : <input type="int" name="codeCategorie" id="codeCategorie" required/>
        <!--<label for="Num">NUM </label><input type="number" name="numEditeur" id="numEditeur" required/>-->

    </p>
    <input type="submit" value="Ajouter jeux" id = "add" />
</form>
</middle>
</body>
</html>