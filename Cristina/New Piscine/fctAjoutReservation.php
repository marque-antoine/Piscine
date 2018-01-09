<!DOCTYPE html>
<html>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "piscine";


$myPDO = new PDO('mysql:host=localhost;dbname=piscine', 'root', 'root');

$nom = $_POST['nomEditeur'];
$ville=$_POST['ville'];
$rue = $_POST['Rue'];
$code = $_POST['code'];


$sql = "INSERT INTO `editeur` VALUES (NULL, '$nom', '$ville', '$rue', '$code')";

if ($myPDO->query($sql) == TRUE) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>";// . $conn->error;
}


?>

<html>
		<script type="text/javascript">location.href = 'editeur.php';</script>
</html>