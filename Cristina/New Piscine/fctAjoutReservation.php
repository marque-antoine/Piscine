<!DOCTYPE html>
<html>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "piscine";


<<<<<<< HEAD
$myPDO = new PDO('mysql:host=localhost;dbname=piscine', 'root');

$dateReservation = $_POST['dateReservation'];
$Commenaire=$_POST['Commenaire'];
$PrixEspace = $_POST['PrixEspace'];
$Statut = $_POST['Statut'];
$EtatFacture=$_POST['EtatFacture'];


$sql = "INSERT INTO `reservation` VALUES (NULL, '$dateReservation', '$Commenaire', '$PrixEspace', '$Statut', '$EtatFacture')";

=======
$myPDO = new PDO('mysql:host=localhost;dbname=piscine', 'root', 'root');

$nom = $_POST['nomEditeur'];
$ville=$_POST['ville'];
$rue = $_POST['Rue'];
$code = $_POST['code'];


$sql = "INSERT INTO `editeur` VALUES (NULL, '$nom', '$ville', '$rue', '$code')";
>>>>>>> 97ce80c76be07eaef5e882432f67f38d1f2d6e80

if ($myPDO->query($sql) == TRUE) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>";// . $conn->error;
}


?>

<html>
<<<<<<< HEAD
		<script type="text/javascript">location.href = 'reservation.php';</script>
=======
		<script type="text/javascript">location.href = 'editeur.php';</script>
>>>>>>> 97ce80c76be07eaef5e882432f67f38d1f2d6e80
</html>