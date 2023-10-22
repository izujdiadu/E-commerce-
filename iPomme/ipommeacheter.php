<?php
$conn = mysqli_connect("localhost", "root", "root", "iPomme");
$conn->set_charset("utf8");
session_start();
?>

<?php 
 $id = $_SESSION["ID"];
$total = $_GET["total"];


?>
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
    <?php require_once("header.php"); ?>
    <section id="acheter">
        <div class="achetertab">
            <div class="acheterinfo">
        <h1> Vous avez un total de <?php echo $total ?> $ </h1>
        <h3> Vous produits sont : </h3>
        <ul>
        <?php $sql ="SELECT * from Panier join PRODUITS on Panier.ID_Produits = PRODUITS.ID_Produits where ID_User = $id AND Quantite > 0";

$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)){
   $prix = $row['Prix'];
   $nom = $row['Nom'];
   $quantite = $row['Quantite'];
   ?>
            <li><?php echo $nom ; echo " (x$quantite)"; ?></li>
            <?php } ?>
        </ul>
</div>
        <div class="userinfo">
            <h1> Vos coordoonés: </h1>
           
            <?php $sql ="SELECT * FROM `User` WHERE ID_User ='$id'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result); ?>
            <p> Nom : <?php echo $row["Nom"]; ?></p>
            <p> Prénom : <?php echo $row["Prenom"]; ?></p>
            <p> Adresse de livraison : <?php echo $row["Adresse"]; ?></p>
            <p> Information de livraison : <span style="color:red"> Veuillez remplir. </span>
            <p> Numero de tel : <?php echo $row["NumTel"]; ?></p>
            <p> RIB : <?php echo $row["RIB"]; ?> </p>
        </div>
        <form action="ipommepaiement.php" method="GET">
            <h1>Le total est de <?php echo $total ?>$</h1>
            <input type="hidden" name="total" value="<?php echo $total ?>">
        <button type="submit"> Acheter </button>
        </form>
        </div>
    </section>
    <script src="ipomme.js"></script>
</body>
</html>

