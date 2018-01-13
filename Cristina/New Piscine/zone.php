
<?php

			    //en tête
			    include'inc/header.php';
			   //connexion bdd
			    $mybdd = new PDO('mysql:host=localhost;dbname=piscine', 'root', '');

			    $requete = "SELECT NumZone, NomZone FROM zone";
			     
			    $reponse = $mybdd->query($requete);

			    ?>
    <div class="container">

	</br>
    <table class="table table-bordered table-condensed" id="editeur">
        <thead>
				    <tr>
					<th>Zones</th>
					<th>Actions</th>
				    </tr>
				</thead>
				<tbody>
					<!--Affiche les catégories-->
				    <?php while ($donnees = $reponse->fetch()):?>
					<tr>
					    <td><?php echo htmlspecialchars($donnees['NomZone']) ?></td>
					<td>
						<form method="POST" action="supZone.php">
							<input type="hidden" name="zoneID" value="<?php echo $donnees['NumZone']; ?>" />			
                            				<input type="submit" style="float:right;" value="Suppr" />
                        			</form>
						
						<form method="POST" action="AfficherJeuxZone.php">
							<input type="hidden" name="zoneID" value="<?php echo $donnees['NumZone']; ?>" />
                            				<input type="submit" style="float:right;" value="Voir les jeux de cette zone" />
                        			</form>
					</td>
					</tr>
				    <?php endwhile; ?>
				</tbody>
			    </table> 
    

	<middle>

			    <form method="POST" action="ajoutZone.php">
			    <input type="submit" value="Ajouter une zone" />
	
			</form>
				
		</middle>
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

.recherche {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.recherche {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}

.recherche:hover {
    background-color: #4CAF50;
    color: white;
}

input[type=text] {
    width: 130px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

/* When the input field gets focus, change its width to 100% */
input[type=text]:focus {
    width: 35%;
}

    </style>
</body>
</html>
