<?php

// Connexion à la base de données
try

{

    $bdd = new PDO('mysql:host=nsimiccovusimic.mysql.db;
                dbname=nsimiccovusimic;charset=utf8', 'nsimiccovusimic', 'Cvecara1');
//
//        $bdd = new PDO('mysql:host=localhost;dbname=phpgallery;charset=utf8', 'root', '');

}

catch(Exception $e)

{
    die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO comment (pseudo, comment, gallery) VALUES(?, ?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['comment'],$_GET['id']));

$nom = $_GET['nom'];
$gallery = $_GET['id'];

// Redirection du visiteur vers la page du minichat
header('Location: gallery.php?nom=' . $nom . '&id=' . $gallery );

    ?>