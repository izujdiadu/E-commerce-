<?php
$conn = mysqli_connect("localhost", "root", "root", "iPomme");
$conn->set_charset("utf8");
?>


<?php
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
    <title>iPomme</title>
  </head>
  <body>
    <?php require_once("header.php"); require_once("conn.php") ?>

    <section id="background">
      <div class="fullbackground">
          <a href="/iPomme/ipommeproddetail.php?ID=1">
        <div class="backpic">
          <img
            src="iphonebackground.jpg"
            alt=""
          />
        </div>
        <div class="publicite">
          <div class="h1absolute">
            <h1>iPhone 14 pro</h1>
            <p>Pro. Plus. Ultra.</p>
          </div>
          <div class="savoirplus">
            <a href="/iPomme//ipommeproddetail.php?ID=1"><p>Acheter ></p></a>
          </div>
        </div>
          </a>
      </div>
    </section>


    <section id="randpublicite">
      <div class="randtab">
          <a href="ipommearticles.php">
        <div class="randname">
          <h1>iPhone et iPad</h1>
          <p>Voir l'intégralité du catalogue.</p>
        <div class="savoirplus">
            <a href="ipommearticles.php"><p>Savoir plus ></p></a>
        </div>
        </div>
        <div class="randpic">
            <a href="ipommearticles.php">
                <img
            src="ipadiphone.jpg"
            alt=""
                /></a>
        </div>
          </a>
        </div>
      </div>
    </section>


    <section id="randpublicite">
        <div class="randtab" style="background-color: black">
            <a href="ipommearticles.php">
                <div class="randname">
                    <h1 style="color: white">iPhone 14 Pro Max</h1>
                    <p style="color: white"><?php
                        $sql = "SELECT * FROM PRODUITS WHERE Prix = 1480.99";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result);
                        echo $row["Phrase"];
                        ?></p>
                    <div class="savoirplus">
                        <a href="/iPomme//ipommeproddetail.php?ID=2"><p>Savoir plus ></p></a>
                    </div> </div>
                <div class="randpic">
                    <a href="/iPomme//ipommeproddetail.php?ID=2">
                        <img
                                src="iphonepub1.jpg"
                                alt=""
                        /></a>
                </div>
            </a>
        </div>
        </div>
    </section>

    <section id="randpubliciteflex">
        <div class="randpubflextab">

            <div class="randpubflexinfo">
               <div class="randname">
                   <h1>iPad Pro 11 pouces</h1>
                   <p><?php
                       $sql = "SELECT * FROM PRODUITS WHERE Prix = 1077.99";
                       $result = mysqli_query($conn, $sql);
                       $row = mysqli_fetch_array($result);
                       echo $row["Phrase"];
                       ?></p>
                   <div class="savoirplus">
                       <a href="/iPomme//ipommeproddetail.php?ID=4"><p>Savoir plus ></p></a>
                   </div>
               </div>
                <div class="randpubflexprod">
                <img src="ipadpub1.jpg" />
            </div>
            </div>

            <div class="randpubflexinfo">
                <div class="randname">
                    <h1>iPhone SE</h1>
                    <p><?php
                        $sql = "SELECT * FROM PRODUITS WHERE Prix = 589.99";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result);
                        echo $row["Phrase"];
                        ?></p>
                    <div class="savoirplus">
                        <a href="/iPomme//ipommeproddetail.php?ID=3"><p>Savoir plus ></p></a>
                    </div>
                </div>
            <div class="randpubflexprod">
                <img src="iphonepub2.jpg" />
            </div>
            </div>

        </div>
        <div class="randpubflextab">

            <div class="randpubflexinfo">
                <div class="randname" style="background-color: black">
                    <h1 style="color:white">iPad Pro 12,9 Pouces</h1>
                    <p style="color:white"><?php
                        $sql = "SELECT * FROM PRODUITS WHERE Prix = 1470.99";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result);
                        echo $row["Phrase"];
                        ?></p>
                    <div class="savoirplus">
                        <a href="/iPomme//ipommeproddetail.php?ID=5"><p>Savoir plus ></p></a>
                    </div>
                </div>
                <div class="randpubflexprod">
                    <img src="ipadpub2.jpg" />
                </div>
            </div>

            <div class="randpubflexinfo">
                <div class="randname">
                    <h1>iPad Mini</h1>
                    <p><?php
                        $sql = "SELECT * FROM PRODUITS WHERE Prix = 659.99";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result);
                        echo $row["Phrase"];
                        ?></p>
                    <div class="savoirplus">
                        <a href="/iPomme//ipommeproddetail.php?ID=9"><p>Savoir plus ></p></a>
                    </div>
                </div>
                <div class="randpubflexprod">
                    <img src="ipadpub3.jpg" />
                </div>
            </div>

        </div>
    </section>

    </section>


   <?php require_once("footer.php")?>

  <script src="ipomme.js"></script>
  </body>
</html>
