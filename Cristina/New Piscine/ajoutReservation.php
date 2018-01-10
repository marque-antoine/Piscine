<?php
	include'inc/header.php';
	//include'conexion2.php';

	function myFunction() {
	$nom = $_POST['nom'];
	$pass = $_POST['pass'];


}

    $myPDO = new PDO('mysql:host=localhost;dbname=piscine', 'root', 'root');

    //Editeur
    $sql = "SELECT NumEditeur, NomEditeur
            FROM `editeur`";
    $q = $myPDO->query($sql);
    $editeur = [];
    foreach($q as $ed){
        $editeur[$ed['NomEditeur']] = $ed['NumEditeur'];
    }


    //Zone
    $sql = "SELECT NumZone, NomZone
            FROM `zone`";
    $q = $myPDO->query($sql);
    $zone= [];
    foreach($q as $zo){
        $zone[$zo['NomZone']] = $zo['NumZone'];
    }
    	

?>
<middle>
<form action= "fctAjoutReservation.php" method="POST" id="add">

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
<form action= "ajoutLocaliser.php" method="POST" id="localiser">
    <p>
        <label for="numEditeur">Nom Editeur</label> : <select name="numEditeur" id="numEditeur" required>
            <?php
                foreach($editeur as $key => $value):
                echo '<option value="'.$value.'">'.$key.'</option>'; 
                endforeach;
            ?>
            </select>

    </p>
    <p>
        <label for="numZone">Nom Zone</label> : <select name="numZone" id="numZone" required>
            <?php
                foreach($zone as $key => $value):
                echo '<option value="'.$value.'">'.$key.'</option>'; 
                endforeach;
            ?>
            </select>

    </p>
    <input type="submit" value="Ajout Editeur dans zone" id = "localiser" />
    </form>

    <input type="submit" value="Ajouter" id = "add" />
</form>

</middle>
</body>
</html>