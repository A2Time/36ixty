<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/form.css">
    <script src="/js/app.js" defer></script>
    <title>Document</title>
</head>

<body>
    <?php include_once 'includes/header.php' ?>
    <section class="formulaire">
        <div class="login-box">
            <?php if (isset($_SESSION["error"])) {
                foreach ($_SESSION["error"] as $messageError) {
            ?>
                    <p class="error">* <?= $messageError ?></p>
            <?php
                }
                unset($_SESSION["error"]);
            }
            ?>
            <form action="../36ixty/devis.php" method="post">
                <div class="user-box">
                    <input type="text" name="nom">
                    <label>Nom</label>
                </div>
                <div class="user-box">
                    <input type="text" name="prenom">
                    <label>Prenom</label>
                </div>

                <div class="user-box">
                    <input type="email" name="email">
                    <label>Email</label>
                </div>
                <div class="user-box">
                    <input type="tel" name="telephone">
                    <label>Telephone</label>
                </div>

                <div class="user-box">

                    <input type="date" name="date_event">
                    <label></label>
                </div>
                <div class="user-box">
                    <!-- 2h , 4h , 6h -->
                    <input type="text" name="nb_h">
                    <label>Nombre d'heures estimés</label>
                </div>

                <div class="user-box">
                    <input type="number" name="nb_inv">
                    <label>Nombre d'invités</label>
                </div>
                <!-- type d'evenement -->
                <a href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <input type="submit" value="Envoyez" name="demande">
                </a>
            </form>
        </div>
    </section>


</body>

</html>