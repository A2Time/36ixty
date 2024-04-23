<?php
require_once 'connexionBdd.php';
require_once 'security.php';

function saveDemande($nom, $prenom, $email, $telephone, $dateEvent, $nbHeure, $nbInvite)
{
    $connexion = cnx();
    $sql = "INSERT INTO `demande`(`nom`, `prenom`, `email`, `telephone`, `date_event`, `nb_heure`, `nb_invite`)
                        VALUES (:nom,:prenom,:email,:telephone,:dateEvent,:nbHeure,:nbInvite)";
    $req = $connexion->prepare($sql);
    $req->bindValue(":nom", $nom);
    $req->bindValue(":prenom", $prenom);
    $req->bindValue(":email", $email);
    $req->bindValue(":telephone", $telephone);
    $req->bindValue(":dateEvent", $dateEvent);
    $req->bindValue(":nbHeure", $nbHeure);
    $req->bindValue(":nbInvite", $nbInvite);
    $req->execute();
    echo 'execute ok';
}
