<?php
session_start();
require_once 'security.php';
require_once 'connexionBdd.php';
require_once 'service.php';
if (isset($_POST['demande'])) {
    echo 'on entre de le poste';
    if (
        isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['telephone'], $_POST['date_event'], $_POST['nb_h'], $_POST['nb_inv'])
        && !empty($_POST['nom'])  && !empty($_POST['prenom'])  && !empty($_POST['email'])  && !empty($_POST['telephone'])  && !empty($_POST['date_event'])  && !empty($_POST['nb_h'])  && !empty($_POST['nb_inv'])
    ) {
        $_SESSION['error'] = [];
        echo 'les champs sont bien rempli';
        $nom = security($_POST['nom']);
        $prenom = security($_POST['prenom']);
        $email = security($_POST['email']);
        $telephone = security($_POST['telephone']);
        $dateEvent = security($_POST['date_event']);
        $nbHeure = security($_POST['nb_h']);
        $nbInvite = security($_POST['nb_inv']);

        if (!preg_match("/^[a-zA-Z-' ]*$/", $nom)) {
            $_SESSION["error"][] = "Nom invalide";
            header("Location: formulaire.php");
        }

        if (!preg_match("/^[a-zA-Z-' ]*$/", $prenom)) {
            $_SESSION["error"][] = "Nom invalide";
            header("Location: formulaire.php");
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION["error"][] = "L'adresse email est incorrecte";
            header("Location: formulaire.php");
        }


        if (!preg_match("/^\\+?[0-9]{10}$/", $telephone)) {
            $_SESSION["error"][] = "Téléphone incorrect";
            header("Location: formulaire.php");
        }

        if (strtotime(date($dateEvent))  < strtotime(date("Y/m/d H:i:s"))) {
            $_SESSION["error"][] = "La date de l'évenement  ne peut pas etre antérieur à la date du jour";
            header("Location: formulaire.php");
        }


        if ($_SESSION['error'] === []) {
            saveDemande($nom, $prenom, $email, $telephone, $dateEvent, $nbHeure, $nbInvite);
            echo 'ok bdd';
        }
        var_dump($_SESSION['error']);
    }
}
