<?php
session_start();
$conn = mysqli_connect("localhost", "root", "root", "iPomme");
$conn->set_charset("utf8");

?>

<?php

$username = $_GET["username"];
$pwd = $_GET["pwd"];
$sql ="SELECT * FROM `User` WHERE AppleID ='$username' and PWD = '$pwd'";


$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if($row){
    $_SESSION["ID"] = $row["ID_User"];
    header("Location: index.php");

}
else {
    $_SESSION["IDENTIFIANT"] = false;
    header("Location: /ipommeconnect.php");
}

?>

<?php
$promo = $_GET["promo"];
$sql ="SELECT * FROM `User` WHERE Promo ='$promo'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if($row){
    $_SESSION["Promo"] = $row["Promo"];
    header("Location: index.php");

}
else {
    $_SESSION["promo"] = false;
    header("Location: /ipommeconnect.php");
}



?>

