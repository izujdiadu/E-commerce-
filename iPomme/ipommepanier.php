<?php
$conn = mysqli_connect("localhost", "root", "root", "iPomme");
$conn->set_charset("utf8");
session_start();
?>


<?php
$id = $_SESSION["ID"];

if(!isset($_SESSION['ID'])){
    header("Location: ipommeconnect.php");
}
$nom = $_GET["Nom"];
$id_user = $_GET["ID_User"];

$sql ="UPDATE Panier SET Quantite = Quantite + 1 Where ID_USER = $id AND ID_Produits = $id_user";

mysqli_query($conn, $sql);
echo"<h1> salut $nom :-)</h1>";
echo"<h1>$id_user</h1>";
header("Location: index.php");

?>