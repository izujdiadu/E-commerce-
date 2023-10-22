<?php
$conn = mysqli_connect("localhost", "root", "root", "iPomme");
$conn->set_charset("utf8");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href='ipommecss.css'/>
    <title>Document</title>
</head>

<?php require_once("header.php"); require_once("conn.php"); ?>
<?php
$prenom =  $_GET["prenom"];
$nom =  $_GET["nom"];
$pays =  $_GET["pays"];
$appleid =  $_GET["appleid"];
$pwd =  $_GET["pwd"];
$numpays = $_GET["numpays"];
$numtel =  $_GET["numtel"];
$adresse = $_GET["adresse"];
#$ladate = date("Y-m-d H-i-s");

$appleid = mysqli_escape_string($conn, $appleid);

$query = mysqli_query($conn, "SELECT AppleID FROM User WHERE AppleID ='$appleid'");
if (mysqli_num_rows($query) != 0){
    $_SESSION["idexist"] = false;
    header("refresh: 0; url = /ipommeaccount.php");
}

else {

    $pwdhash = password_hash("$pwd", PASSWORD_BCRYPT);
    $sql = "INSERT into User (ID_User, Prenom, Nom, Pays, AppleID, PWD, NumPays, NumTel, Adresse, Historique, Solde) VALUES (null, '$prenom', '$nom' , '$pays', '$appleid', '$pwdhash', '$numpays', '$numtel', '$adresse', null, 100000)";
    $result = mysqli_query($conn, $sql);
    header("refresh: 10; url = /ipommeconnect.php");

?>
  <body>
    <section id="verif">
      <div class="veriftab">
        <h1>Bienvenue sur Apple, <?php echo "$prenom"; ?></h1>
        <h2>Votre compte a été crée avec succès</h2>
        <p>Vous allez être rediriger vers la page de connexion dans 10...</p>
      </div>
    </section>

  <?php require_once("footer.php"); ?>
    <script src="ipomme.js"></script>
  </body>
</html>
<?php } ?>




