<?php
$conn = mysqli_connect("localhost", "root", "root", "iPomme");
$conn->set_charset("utf8");
session_start();
$id = $_SESSION["ID"];
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
    <section id="bgconn">
        <div class="bgconntab">
            <img
                    src="htts://i.pinimg.com/736x/d4/91/1a/d4911ab0da2a03f13062d69e6ada85ee.jpg"
                    alt=""
            />
        </div>
    </section>

    <section id="formconn">
        <div class="formconntab">
            <form action="ipommeverif.php" method="GET">
                <div class="phpverif">
                    <?php
                    if(isset($_SESSION["IDENTIFIANT"]) == true){
                        echo"<h1 style='color:red'>Identifiants incorrect</h1>";
                        unset($_SESSION["IDENTIFIANT"]);
                    }
                    ?>

                    <?php
                    if(isset($_SESSION["Test"]) == true){
                        echo"<h1 style='color:red'>Test</h1>";
                        unset($_SESSION["Test"]);
                    }
                    ?>
                <h1>Apple connection</h1></div>
                <div class="formconninput">
                    <input
                            type="text"
                            placeholder="Apple ID"
                            name="username"
                            id="username"
                    />
                    <input type="text" placeholder="Mot de passe" name="pwd" id="pwd" />
                    <input type="text" placeholder="Code Promo" name="promo" id="promo" />
                    <button id="buttonstyle" type="submit">></button>
                    <a href="ipommeaccount.php"><p>Crée un compte? ></p></a>
                </div>
            </form>
        </div>
    </section>
    <script src="ipomme.js"></script>
</body>
</html>
