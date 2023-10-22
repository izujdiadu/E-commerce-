<?php
$conn = mysqli_connect("localhost", "root", "root", "iPomme");
$conn->set_charset("utf8");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ipommecss.css" />
</head>
<body>
    <?php require_once("header.php"); ?>
    <?php $id = $_SESSION["ID"];

$sql ="SELECT * FROM `User` WHERE ID_User ='$id'";


$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result); ?>
    <section id="userinfo">
        <div class="userinfotab">
            <div class="userinfoname">
                <h1>Nom & Prenom: <?php echo $row['Nom']; echo " ";  echo $row['Prenom'] ; ?> </h1>
                <h1>Pays: <?php echo $row['Pays']; ?></h1>
                <h1>Date de naissance: <?php echo $row['Naissance']; ?></h1>
                <h1>Mail: <?php echo $row['AppleID']; ?></h1>
                <h1>Numéro de téléphone: <?php echo $row['NumTel']; ?></h1>
                <h1>Adresse: <?php echo $row['Adresse']; ?></h1>
                <h1>Ce compte a été créer le:</h1>
        </div>
        </div>
</section>
    <script src="ipomme.js"></script>
</body>
</html>