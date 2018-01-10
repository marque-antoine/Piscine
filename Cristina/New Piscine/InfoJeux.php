<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style>
			<table>
			{
				text-align= center ;
			}
		</style>
	</head>
</html>

<?php
	include'inc/header.php';
    //$servername = "localhost";
    //$username = "root";
    //$password = "";
    //$dbname = "piscine";
    //$editeur= "editeur";
    if ( !empty($_POST['infoID'])) {
    		$num = $_POST['infoID']; // si ça vient du bouton info on aura la variable infoID en post mais si ça vient de la barre recherche alors c'est la varia nomJeux qu'on va traduire en NumJeux juste en dessous.
    		} 
    
    // Il faut penser a mettre cette varia dans toutes les pages qui viennent ici
    $myPDO = new PDO('mysql:host=localhost;dbname=piscine', 'root', 'root');

    $num = $m['JeuxID'];
        
    $sql2 = "SELECT *
            FROM jeux WHERE NumJeux='".$num."'"; 
    

    
    $q = $myPDO->query($sql2);
    
    ?>
    <form method="POST" action="jeux.php">
    <button type="submit">Retour Jeux</button>
	</form>
    <table class="table table-bordered table-condensed">
        <thead>
        	<h3>Catégorie <?php echo $q ['NomJeux'] ?></h3>
            <tr>
                <th>Nom Categorie</th>
                <th>Nombre de joueurs</th>
                <th>Date de sortie</th>
                <th>Durée d'une partie</th>
                <th>Commentaires</th>
            </tr>
        </thead>
        <tbody>
            
                <tr>
                    <td><?php echo htmlspecialchars($r['NomCategorie']) ?></td>
                    <td><?php echo htmlspecialchars($r['NombreJoueur']); ?></td>
                    <td><?php echo htmlspecialchars($r['DateSortie']); ?></td>
                    <td><?php echo htmlspecialchars($r['DureePartie']); ?></td>
                    <td><?php echo htmlspecialchars($r['Commentaire']); ?></td>
                    <td>
                        <form method="POST" action="supCategorie.php">
                            <input type="hidden" name="CategorieID" value="<?php echo $r['NumCategorie']; ?>" />
                            <input type="hidden" name="infoID" value="<?php echo $num; ?>" />
                            <input type="submit" style="float:right;" id="suppr" value="Suppr" /></button>
                        </form>

                        <form method="POST" action="modifCategorie.php">
                            <!--<button type="submit">Modif</button> -->
                            <input type="hidden" name="CategorieID" value="<?php echo $r['NumCategorie']; ?>" />
                            <input type="hidden" name="infoID" value="<?php echo $num; ?>" />
                            <input type="submit" style="float:right;" id="suppr" value="modif" /></button>
                        </form>
                        <!-- <form method="POST" action="modifEditeur.php"> 
                            
                            <input type="submit" style="float:right;" id="modif" value="Modif"/>Modif</button>
                        </form>
                    </td>-->
                    
                </tr>
            
    
        </tbody>
    </table>
    <form method="POST" action="ajoutJeux.php">
        <input type="hidden" name="infoID" value="<?php echo $num; ?>" />
		<button type="submit">Ajouter un jeu</button>
	</form>

<!-- On affiche maintenant ses jeux

--> <?php

		$sql2 = "SELECT * FROM categorie WHERE NumCategorie='".$num."'"; 
		$jeux = $myPDO->query($sql2);

	?>
	
	<table class="table table-bordered table-condensed" text-align="center">
        <thead>
        	<h3>Editeur <?php echo $NomCategorie['NomCategorie'] ?></h3>
            
        </thead>
        <tbody>
            <?php while ($JeuxCourant = $categorie->fetch()): ?>
                <tr>
                    <tr><td> Nom du jeux :</td><td><strong><?php echo htmlspecialchars($JeuxCourant['NomCategorie']) ?><strong></td> 
                    	<td>  
                    	<form method="POST" action="supJeux.php">
                            <input type="hidden" name="jeuxID" value="<?php echo $r['NumJeux']; ?>">
                            <input type="hidden" name="infoID" value="<?php echo $num; ?>" />
                            <input type="submit" style="float:right;" id="suppr" value="Suppr" />
                        </form>
                    	</td>
                    	<td>
                        <form method="POST" action="modifJeux.php">
                            <!--<button type="submit">Modif</button> -->
                            <input type="hidden" name="jeuxID" value="<?php echo $r['NumJeux']; ?>" />
                            <input type="hidden" name="infoID" value="<?php echo $num; ?>" />
                            <input type="submit" style="float:right;" id="suppr" value="modif" />
                        </form> 
                        </td> 
                    </tr>
                    <tr><td>Nombre de Joueurs : </td><?php echo htmlspecialchars($JeuxCourant['NombreJoueur']); ?></td></tr>
                    <tr><td>Date de Sortie : <td><?php echo htmlspecialchars($JeuxCourant['DateSortie']); ?></td></tr>
                    <tr><td>Duree Partie<td><?php echo htmlspecialchars($JeuxCourant['DureePartie']); ?></td></tr>
                    <tr><td>Categorie penser a faire une fonction qui renvoie le str de la caté<td><?php echo htmlspecialchars($JeuxCourant['CodeCategorie']); ?></td></tr>
                    <tr>
                        
                        <!-- <form method="POST" action="modifEditeur.php"> 
                            
                            <input type="submit" style="float:right;" id="modif" value="Modif"/>Modif</button>
                        </form>-->
                    </td>
                </tr>
            </br>
            <?php endwhile; ?>
    
        </tbody>
    </table>
    <form method="POST" action="ajoutJeux.php">
        <input type="hidden" name="infoID" value="<?php echo $num; ?>" />
		<button type="submit">Ajouter un jeux</button>
	</form>