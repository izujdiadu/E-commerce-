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
    <link rel="stylesheet" href="ipommecss.css" />
    <link
      rel="icon"
      href="https://logos-marques.com/wp-content/uploads/2021/03/Apple-logo.png"
    />
    <title>Articles</title>
  </head>
  <body>
    <?php 
    require_once("header.php") ?>
        <section id="proddetail">
      <div class="prodtab">
          <form action="ipommepanier.php" method="GET">
          <?php
          $id = $_GET["ID"];
          $sql = "select * from PRODUITS join Couleur_Prod on PRODUITS.ID_Couleur_Prod = Couleur_Prod.ID_Couleur_Prod where PRODUITS.ID_Produits = $id";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_array($result);
          $prix = $row['Prix'];
          $nom = $row['Nom'];
          $couleur = $row["Couleur"];
          $desc = $row['Description'];
          $stockage = $row['ID_STOCKAGE_Prod'];
          $prixpromo = 0;
          ?>
        <div class="prodname">
            <h1>Acheter un <?php echo $nom?></h1>
          <p>À partir de <?php if(isset($_SESSION['Promo'])){
                  $prixpromo = $prix / 100 * 25;
                  $newprix = $prix - $prixpromo;
                  echo "<br/> <h1 style='color:red'>$newprix $ </h1>";
              }
              else {
                  unset($_SESSION["Promo"]);
                  echo $prix;
              }

?></p>
        </div>
        <div class="proddesc">
          <div class="prodcarousel">
              <?php
              echo "<img src=" . $id . ".jpg />";
              echo "<img src=" . $id . "_1.jpg />";
              echo "<img src=" . $id . "_2.jpg />";
              ?>

          </div>
          <div class="prodcara">
              <div class="couleurtab">
          <div class="couleur">
                    <img <?php if ($couleur == "Bleu") {
                        echo "id='couleurid'";
                    } ?>src="bleu.jpg" >
                    <img <?php if ($couleur == "Rose") {
                        echo "id='couleurid'";
                    } ?>src="rose.jpg" >
                    <img <?php if ($couleur == "Minuit") {
                        echo "id='couleurid'";
                    } ?>src="minuit.jpg" >
                    <img <?php if ($couleur == "Lumière stellaire") {
                        echo "id='couleurid'";
                    } ?>src="lumierestellaire.jpg" >
                    <img <?php if ($couleur == "Vert") {
                        echo "id='couleurid'";
                    } ?>src="vert.jpg" >
                    <img <?php if ($couleur == "Rouge") {
                        echo "id='couleurid'";
                    } ?> src="rouge.jpg" >
                    <img <?php if ($couleur == "Mauve") {
                        echo "id='couleurid'";
                    } ?>src="mauve.jpg" >
                    <img <?php if ($couleur == "Violet Intense") {
                        echo "id='couleurid'";
                    } ?>src="violetintense.jpg" >
                    <img <?php if ($couleur == "Or") {
                        echo "id='couleurid'";
                    } ?> src="or.jpg" >
                    <img <?php if ($couleur == "Argent") {
                        echo "id='couleurid'";
                    } ?> src="argent.jpg" >
                    <img <?php if ($couleur == "Noir sidéral") {
                        echo "id='couleurid'";
                    } ?> src="noirsideral.jpg" >
                </div>
                </div>

              <div class="stockagetab">
                  <div class="stockage" <?php if ($stockage == 1) {
                      echo "id='stockageid'";
                  } ?>>
                      <h1>128 Go²</h1>
                  </div>
                  <div class="stockage"<?php if ($stockage == 2) {
                      echo "id='stockageid'";
                  } ?>>
                      <h1>256 Go²</h1>
                  </div>
                  <div class="stockage" <?php if ($stockage == 3) {
                      echo "id='stockageid'";
                  } ?>>
                      <h1>512 Go²</h1>
                  </div>
              </div>

            <h1>Description : <?php echo $desc ?></h1>
          </div>
        </div>
        <button name="button" type="submit">Ajouter au panier</button>
              <?php echo"<input type='hidden' name = 'ID_User' value = '$id'>"; ?>
          </form>
      </div>
    </section>
    <?php require_once("footer.php")?>
    <script src="ipomme.js"></script>
  </body>
</html>