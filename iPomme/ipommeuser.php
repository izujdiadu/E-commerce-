<?php
$conn = mysqli_connect("localhost", "root", "root", "iPomme");
$conn->set_charset("utf8");
session_start();
?>
<?php

$id = $_SESSION["ID"];

$sql ="SELECT * FROM `User` WHERE ID_User ='$id'";


$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);


$appleid = $row["AppleID"];
$adresse = $row["Adresse"];
$prenom = $row["Prenom"];
$pays = $row["Pays"];
$naissance = $row["Naissance"];
$solde = $row["Solde"];
$newnom =  $row["Nom"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ipommecss.css" />
    <title>Profile</title>
</head>
<body>
    <?php
    require_once("header.php")
     ?>
    <section id="user">
        <div class="usertab">
            <div class="pagetab">
            <div class="comptetab">
                <h1>Compte</h1>
                <a href="ipommelogout.php"><p>Se déconnecter ></p></a>
            </div>
            <div class="hellotab">
                <h1>Bonjour <?php echo $newnom; ?></h1>
            </div>
            </div>
            <div class="soldetab">
                <h1>Solde de votre compte Apple: <?php echo $solde ?> $</h1>
                <p>Ajoutez directement de l’argent ou transférez le montant de vos Cartes Cadeaux Apple sur votre compte, à tout moment. Puis utilisez votre solde pour acheter de nombreux articles et services Apple : produits, accessoires, apps, jeux, musique, films, séries, iCloud et bien plus encore.</p>
                <a href="#"><p>Gérer le solde ></p></a>
                <hr>
            </div>
            <div class="soldetab">
                <h1>Vos commandes:</h1>
                <p>Consultez vos commandes.</p>
                <a href="ipommeuserhisto.php"><p>Consulter l’historique de vos commandes ></p></a>
                <hr>
            </div>

            <div class="userinfo">
                <h1>Vos informations:</h1>
                <div class="userinfoflex">
                    <h1>Livraison</h1>
                    <div class="infoflex">
                        <p class="pmain">Adresse de livraison</p>
                        <p><?php echo $prenom . " " . $newnom ?></p>
                        <p><?php echo $adresse ?></p>
                        <p><?php echo $pays ?></p>

                    </div>
                    <div class="infoflex">
                        <p class="pmain">Coordonnées</p>
                        <p><?php echo $appleid; ?></p>
                    </div>
                </div>
                <div class="userinfoflex">
                    <h1>Confidentialité</h1>
                    <div class="infoflex">
                        <p class="pmain">Informations personnelles</p>
                        <p>
                            Informations personnelles
                            Vous disposez d'un contrôle complet sur vos informations personnelles que vous pouvez modifier ou effacer à tout moment. Apple s'engage à respecter votre vie privée.
                        </p>
                    </div>
                </div>

                <div class="userinfoflex">
                    <h1>Identifiant Apple</h1>
                    <div class="infoflex">
                        <p class="pmain"><?php echo $appleid; ?></p>
                        <p>
                            Votre identifiant Apple est le compte que vous utilisez pour accéder à des services Apple comme l’App Store, Apple Music, iCloud, iMessage, FaceTime et bien d’autres.
                        </p>
                        <img src="applepubli.jpg" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require_once("footer.php");?>
    <script src="ipomme.js"></script>
</body>
</html>