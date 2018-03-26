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
    <link rel="stylesheet" href="css/justifiedGallery.css" />
    <link rel="stylesheet" href="css/NSgallery.css">

    <title>Galerie</title>

    <?php

    $gallery = $_GET['id'];

    // Connexion à la base de données
    try

    {
                $bdd = new PDO('mysql:host=nsimiccovusimic.mysql.db;
                dbname=nsimiccovusimic;charset=utf8', 'nsimiccovusimic', 'Cvecara1');

//        $bdd = new PDO('mysql:host=localhost;dbname=phpgallery;charset=utf8', 'root', '');
    }

    catch(Exception $e)

    {
        die('Erreur : '.$e->getMessage());
    }
    ?>

    <!--
    
    To link the gallery name : use http://localhost/gallery/index.php?nom=nameOfGallery

-->

    <style>

        .starter-template {
            padding: 3rem 1.5rem;
            text-align: center;
        }

        html,
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Roboto", sans-serif;
        }

        h2 {
            text-align: center;
        }

        #liveDemo {
            margin-bottom: 50px;
        }
    </style>

</head>

<body>

<?php include 'navbar.php';    ?>

<div class="container" style="margin-top: 15px;">


    <h2>
        <?php
        $title = substr($_GET['nom'], 3);
        echo (ucfirst($title));
        ?>
    </h2>

    <div id="liveDemo" class="container justified-gallery" style="margin-left: 10px;">


        <?php

        $folder_path = $_GET['nom'];
        include 'lightbox_display_function.php';
        lightbox_display('photos/' . $folder_path . '/', 'lightbox[images]');

        ?>
    </div>

    <?php


    // Récupération des 10 derniers messages
    $reponse = $bdd->query('SELECT pseudo, dateofcomment, comment FROM comment WHERE gallery ="'. $gallery . '" ORDER BY ID DESC LIMIT 0, 10');

    // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)

    echo '<div class="panel-group">';

    while ($donnees = $reponse->fetch())
    {
        echo '<div class="panel panel-default"><strong><div class="panel-heading">' .
            htmlspecialchars($donnees['pseudo']) . ' : <div style="float:right;">' . $donnees['dateofcomment'] .
            ' </div></strong></div><div class="panel-body"> ' .
            htmlspecialchars($donnees['comment']) . '</div></div>';
    }


    $reponse->closeCursor();

    //                 echo '<div/>';
    ?>

    <p>
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel panel-heading">
                    <div class="form-group ">
                        <form action="minichat_post.php?id=<?php echo $gallery ?>" method="post" >
    <p>
        <label for="pseudo">Votre nom </label> : <br />
        <input type="text" name="pseudo" class="form-control" id="pseudo" /><br />
        <label for="comment">Laisser un commentaire </label> :<br />
        <textarea id="comment" name="comment" placeholder="Le texte de votre commentaire.." class="form-control" rows="5"></textarea>
        <br />
        <input type="submit" value="Envoyer" class="btn btn-primary"/>
    </p>
    </form>
</div>
</div>
</div>
</div>
</div>
</div>
<p/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/lightbox.js"></script>
<script src="js/jquery.justifiedGallery.js"></script>

<script>
    lightbox.option({
        'resizeDuration': 150,
        'wrapAround': true
    })
</script>
<script>
    jQuery(document).ready(function() {
        jQuery("#liveDemo").justifiedGallery({
            rowHeight: 120,
            // maxRowHeight : 150,
            captions: false,
            lastRow: 'justify',
            randomize: true,
        });
    });
</script>

</body>

</html>
