

<?php
	include'inc/header.php';
    
    //$servername = "localhost";
    //$username = "root";
    //$password = "";
    //$dbname = "piscine";
    //$editeur= "editeur";
    $myPDO = new PDO('mysql:host=localhost;dbname=piscine', 'root', '');

    $sql = "SELECT NumEditeur, NomEditeur, VilleEditeur, RueEditeur, CodePostaleEditeur 
            FROM `editeur`";
     
    $q = $myPDO->query($sql);
    ?>
    <div class="container">
    <table class="table table-bordered table-condensed" id="editeur">
        <thead>
            <tr>
                <th>Nom Editeur</th>
                <th>Ville Editeur</th>
                <th>Rue Editeur</th>
                <th>Code Postale</th>
                <th>Functions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($r = $q->fetch()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($r['NomEditeur']) ?></td>
                    <td><?php echo htmlspecialchars($r['VilleEditeur']); ?></td>
                    <td><?php echo htmlspecialchars($r['RueEditeur']); ?></td>
                    <td><?php echo htmlspecialchars($r['CodePostaleEditeur']); ?></td>
                    <td>
                        <form method="POST" action="supEditeur.php">
                            <input type="hidden" name="editeurID" value="<?php echo $r['NumEditeur']; ?>" />
                            <input type="submit" style="float:right;" id="suppr" value="Supprimer" /></button>
                        </form>
                    </br>
                    </br>
                        <form method="POST" action="modifEditeur.php">
                            <!--<button type="submit">Modif</button> -->
                            <input type="hidden" name="editeurID" value="<?php echo $r['NumEditeur']; ?>" />
                            <input type="submit" style="float:right;" id="modif" value="Modifier" /></button>
                        </form>
                        <!-- <form method="POST" action="modifEditeur.php"> 
                            
                            <input type="submit" style="float:right;" id="modif" value="Modif"/>Modif</button>
                        </form>-->
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <?php 

	//$nom = $_POST['nom'];
	//$pass = $_POST['pass'];
	//echo $nom;
	//echo ' ';
	//echo $pass;
	//$utilisateur1= "alexandra";
	//$pass1 = "alex";
	//if ($nom !== $utilisateur1 and $pass !== $pass1){
		//<script type="text/javascript">location.href = 'accueil.php';</script>
		//myFunction();
	//}
//SHOW [FULL] {COLUMNS | FIELDS}
    //{FROM | IN} $editeur
    //[{FROM | IN} $dbname]
    //[LIKE 'pattern' | WHERE expr]
    //SHOW COLUMNS FROM $dbname.$editeur;


    //$sql = "SELECT NumEditeur, NomEditeur, RueEditeur FROM editeur";
    //$result = $myPDO->query($sql);

//if ($result->num_rows > 0) {
    // output data of each row
    //while($row = $result->fetch_assoc()) {
        //echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
    //}
//} else {
  //  echo "0 results";
//}

//$myPDO->close();
//?>






    
    <form method="POST" action="ajoutEditeur.php">
    <button class="button" type="submit">Ajouter Editeur</button>
</form>
</form>
</div>
<style>
#editeur {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#editeur td, #editeur th {
    border: 1px solid #ddd;
    padding: 8px;
}

#editeur tr:nth-child(even){background-color: #f2f2f2;}

#editeur tr:hover {background-color: #ddd;}

#editeur th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;

}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}

.button:hover {
    background-color: #4CAF50;
    color: white;
}



</style>
</body>
</html>
<?php
    include'inc/footer.php';
?>