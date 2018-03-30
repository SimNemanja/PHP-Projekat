<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--    W3CSS-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" media="screen" href="css/lightbox.css">
    <link rel="stylesheet" href="css/NSgallery.css">

    <!--   Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <title>Gallery Admin</title>

    <?php

    include("navbar.php"); 
    // Connection to the Database
    include 'connect.php';

    ?>

    <div class="container justified-gallery" style="padding: 80px;">
        <table class="table table-striped .table-hover">
            <thead>
            <tr class="info">
                <th>Nom</th>
                <th>Date</th>
                <th>Gallery</th>
                <th>Comment</th>
                <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>

            <?php


            // Récupération des 100 derniers messages
            $reponse = $bdd->query('SELECT pseudo, dateofcomment, comment, gallery FROM comment ORDER BY ID ASC LIMIT 0, 100');

            // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)

            while ($donnees = $reponse->fetch())
            {
                echo ' <tr><td>' .
                    htmlspecialchars($donnees['pseudo']) . '</td><td>' .
                    $donnees['dateofcomment'] . '</td><td>' .
                    htmlspecialchars($donnees['pseudo']) . '</td><td>' .
                    htmlspecialchars($donnees['comment']) . '</td><td><button type="button" style="display:block; float: right" class="btn btn-primary btn-sm btn-danger">Supprimer</button></td></tr>';
            }


            $reponse->closeCursor();

            ?>
    </div>



    </div>

    </body>
</html>
