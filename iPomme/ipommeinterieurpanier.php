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
    <?php require_once("header.php") ?>
    <section id="interieur">
        <div class="interieurtab">
            <?php
            $id = $_SESSION["ID"];

            $sql ="SELECT * from Panier join PRODUITS on Panier.ID_Produits = PRODUITS.ID_Produits where ID_User = $id AND Quantite > 0";
            $prixglobal = 0;
            $total = " ";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){;
                $prix = $row['Prix'];
                if(isset($_SESSION['Promo'])){
                    $prixpromo = $prix / 100 * 25;
                    $lastprix = $prix - $prixpromo;
                    $quantite = $row['Quantite'];
                    $quantite * $lastprix;
                    $prixglobal += $quantite * $lastprix;
                } else {
                $nom = $row['Nom'];
                $quantite = $row['Quantite'];
                $quantite * $prix;
                $prixglobal += $quantite * $prix; }
            }
            ?>
            <div class="montanttab">
            <h1>Le montant de votre panier total est de <?php echo $prixglobal; ?>$.</h1>
                <form action="ipommeacheter.php" method="GET">
                    <input type="hidden" name="total" value="<?php echo $prixglobal ?>">
                    <button type="submit">Valider la commande</button>
                </form>
            </div>

            <div class="panierprodtab">
                <div class="panierprodflex">
                        <div class="panierprodinfo">
                            <?php
                            $sql ="SELECT * from Panier join PRODUITS on Panier.ID_Produits = PRODUITS.ID_Produits where ID_User = $id AND Quantite > 0";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_array($result)){;
                                $prix = $row['Prix'];
                            $nom = $row['Nom'];
                            $idprod = $row['ID_Produits'];
                                $prix = $row['Prix'];
                                if(isset($_SESSION['Promo'])){
                                    $prixpromo = $prix / 100 * 25;
                                    $lastprix = $prix - $prixpromo;
                                    $quantite = $row['Quantite'];
                                    $quantite * $lastprix;
                                    $prixglobal += $quantite * $lastprix;
                                } else {
                                    $nom = $row['Nom'];
                                    $quantite = $row['Quantite'];
                                    $quantite * $prix;
                                    $prixglobal += $quantite * $prix; }
                            }
                                ?>
                                    <div class="panierprodphone">
                                        <div class="panierprodpic">
                            <img src="<?php echo $idprod;?>.jpg" /></div>
                    <div class="panierprodtext">
                        <h1><?php echo $nom; ?></h1>
                        <a href="/iPomme/ipommeproddetail.php?ID=<?php echo $idprod; ?>">Afficher les détails du produit ></a>
                        <h1><?php echo $quantite ?></h1>
                        <h1><?php if(isset($_SESSION['Promo'])) {
                            echo $lastprix; } else {
                                echo $prix;
                            }; ?>$ <?php
                            if($quantite > 1){
                                if(!isset($_SESSION['Promo']))
                                {
                                $newprix = $quantite * $prix;
                                echo "<span style='color:#c94040'>($newprix$)</span>";
                            } else {
                                    $newprix = $quantite * $lastprix;
                                    echo "<span style='color:#c94040'>($newprix$)</span>";
                                }
                            ?></>
                    </div>
                                        <?php } ?>
                                    </div>

                </div>
                        <div class="valider">
                            <form action="ipommeacheter.php" method="GET">
                                <?php if($newprix > 0){ ?>
                                <h1>Total :

                                    <?php echo $newprix; ?>$</h1>
                            <input type="hidden" name="total" value="<?php echo $newprix ?>">
                            <button type="submit">Valider la commande</button>
                            </form> <?php } ?>
                        </div>
            </div>

        </div>

    </section>

    <?php require_once("footer.php") ?>
    <script src="ipomme.js"></script>
</body>
</html>