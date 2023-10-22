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
    <section id="produits">
        <div class="prodtab">
            <?php $sql = "SELECT * FROM PRODUITS WHERE Nom like '%phone%'";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)){
                $prix = $row['Prix'];
                $nom = $row['Nom'];
                $id = $row['ID_Produits'];
                $phrase = $row['Phrase'];
                ?>

                <div class="prodback">
                    <img src="background<?php echo $id ?>.jpg" alt="">
                    <div class="prodtext">
                        <h1><?php echo $nom ?></h1>
                        <p><?php echo $phrase ?></p>
                        <div class="savoirplus">
                            <?php $str = "ipommeproddetail.php?ID=". $id ?>
                            <a href="<?php echo $str ?>" > Acheter > </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
    <?php require_once("footer.php")?>
    <script src="ipomme.js"></script>
    </body>
</head>
</html>