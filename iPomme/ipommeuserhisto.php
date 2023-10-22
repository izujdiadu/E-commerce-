<?php
$conn = mysqli_connect("localhost", "root", "root", "iPomme");
$conn->set_charset("utf8");
session_start();
?>

<?php
$id = $_SESSION["ID"]; ?>
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
    <section id="userhisto">
        <div class="userhistotab">
            <h1>Historique de vos commandes:</h1>
            <?php
            $sql = "SELECT Historique FROM User WHERE ID_User = $id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            echo $row["Historique"];
            ?>


        </div>
    </section>
    <script src="ipomme.js"></script>
</body>
</html>