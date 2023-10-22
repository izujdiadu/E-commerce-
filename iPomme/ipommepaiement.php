<?php
$conn = mysqli_connect("localhost", "root", "root", "iPomme");
$conn->set_charset("utf8");
session_start();
?>

<?php 
$id = $_SESSION["ID"];
$total = $_GET["total"];?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ipommecss.css" />
    <title>Document</title>
</head>
<body>
    <?php require_once("header.php");?>
    <section id="paiement">
        <div class="paiementtab">
        <h1>  COMMANDE EFFECTUÉ !!! </h1>
        <h3> Merci de votre confiance. Nous espérons vous revoir très bientôt!</h3>
        <a href="index.php">Retournez sur la page d'accueil</a></div>
        <div class="commande">
            <h1> Vous avez achetez: </h1>
            <ul>
            <?php 
            $sql ="SELECT * from Panier join PRODUITS on Panier.ID_Produits = PRODUITS.ID_Produits where ID_User = $id AND Quantite > 0";
            date_default_timezone_set('UTC');
            $today = date("Y-m-d H:i:s");
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
               $prix = $row['Prix'];
               $nom = $row['Nom'];
               $quantite = $row['Quantite'];
            ?>
                <li><?php echo $quantite . " "; echo $nom; } ?></li>
            </ul>
            <p> Le <?php echo $today; ?> </p>
        </div>
    </div>
</section>
    <script src="ipomme.js"></script>
</body>
</html>
<?php 
$sql = "UPDATE User SET Historique = 'Vous avez achetez $quantite $nom le $today', Solde = Solde - $total WHERE ID_User = $id";
mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result))
?>

<?php 
$sql = "UPDATE Panier SET Quantite = 0 WHERE ID_User = $id";
mysqli_query($conn, $sql);

?>