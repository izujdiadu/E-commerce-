<html>
<body>
<?php
$conn = mysqli_connect("localhost", "root", "root", "iPomme");
$conn->set_charset("utf8");
session_start();
?>
<?php
$promo = "code";

$sql ="SELECT * FROM User WHERE Promo = '$promo'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if(isset($_SESSION['Promo'])){
    echo "<h1 style='color:red;'> Code Promo is On </h1>";
}
else {
    unset($_SESSION["Promo"]);
    echo "<h1> Code promo is off </h1>";
}

?>





<?php
$id = $_SESSION["ID"];

$sql ="SELECT Sum(Quantite) as Quantite_Total FROM Panier WHERE ID_User = $id";



$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);


?>
    <section id="navbar">
      <div class="navclass">
        <a href="index.php"
          ><img
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ab/Apple-logo.png/240px-Apple-logo.png"
            alt=""
        /></a>
        <div class="navli">
          <a href="ipommeiphone.php"><li id="iphone">iPhone</li></a>
          <a href="ipommeipad.php"><li id="ipad">iPad</li></a>
              <?php if(isset($_SESSION['ID'])) {
                  echo '<a href="ipommeuser.php">';
                  echo '<img src="goku.png"';
                  echo '/> </a>';
                  echo '<a href="ipommeinterieurpanier.php">';
                  echo '<img src="iconpanier.png"';
                  echo '/> </a>';
                  echo "<h1 style='color:white'>";
                  echo $row["Quantite_Total"];
                  echo "</h1>";
              } else {
                  unset($_SESSION["ID"]);
                  echo '<a href="ipommeconnect.php">';
                  echo '<img src="iconuser.png"';
                  echo '/> </a>';
              }

              ?>

        </div>
      </div>
    </section>


<section id="dropdown">
        <div class="droptab">

            <?php

            $sql ="SELECT * FROM `PRODUITS` WHERE Nom like '%iphone%'";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)){
                $nom = $row["Nom"];
                $prodid = $row["ID_Produits"];
            ?><div class="dropdiv">
                <?php echo "<a href='/iPomme/ipommeproddetail.php?ID=$prodid'><li>$nom</li></a>"?>
            </div>
            <?php } ?>
        </div>
</section>

<section id="dropdown2">
    <div class="droptab">
        <?php $sql ="SELECT * FROM `PRODUITS` WHERE Nom like '%iPad%'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)){
            $nom = $row["Nom"];


            $prodid = $row["ID_Produits"];
            ?><div class="dropdiv">
            <?php echo "<a href='/iPomme/ipommeproddetail.php?ID=$prodid'><li>$nom</li></a>"?>
            </div>
        <?php } ?>
    </div>
</section>
</body>
</html>