<?php
$servername = "localhost";
$username= "root";
$password = "";
$dbname = "piscine";

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
$myPDO = new PDO('mysql:host=localhost;dbname=piscine', 'root', 'root');
// $num = $_POST['numEditeur'];
$nomJeux = $_POST['nomJeux'];
$nombre=$_POST['nombre'];
$DateSortie = $_POST['DateSortie'];
$DureePartie = $_POST['DureePartie'];
$editeur = $_POST['numEditeur'];
$categ = $_POST['codeCategorie'];



//echo $nomJeux;
//echo $DateSortie;
//echo $editeur;
//echo $categ;
// Check connection
// if ($myPDO->connect_error) {
//     die("Connection failed: " . $myPDO->connect_error);
// } 

$sql = "INSERT INTO `jeux` VALUES (NULL, '$nomJeux', '$nombre', '$DateSortie', '$DureePartie', '$editeur', '$categ')";
// $sql = "SELECT * FROM `editeur`";

//$array=[];
//$stmt = $myPDO->prepare($sql);
// $stmt->execute($array) or die(print_r($stmt->errorInfo(), true));

//verification connexion base de donnes
if ($myPDO->query($sql) == TRUE) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>";// . $conn->error;
}

// $conn->close();
?>

<html>
<!--
<?php // A chaque fois on doit faire passer la variable NumEditeur pour que lorsqu'on revient sur la page infoEditeur il affiche les données de l'editeur
?>


<form name="envoie" method="POST" action="jeux.php">
	<input type="hidden" name="infoID" value="<?php echo $editeur; ?>" />
	
</form>
	<script type="text/javascript"> document.envoie.submit();</script>
	<script type="text/javascript">location.href = 'ajoutJeux.php';</script>
	
-->
		<script typr="text/javascript">location.href = 'jeux.php';</script>
</html>
