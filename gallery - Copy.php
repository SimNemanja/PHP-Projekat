<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--    W3CSS-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<!-- Custom styles for this template -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" media="screen" href="css/lightbox.css">
<link rel="stylesheet" href="css/justifiedGallery.css" />
<link rel="stylesheet" href="css/NSgallery.css">

    <title>Galerie</title>

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
    </div>

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

    <?php
    // Connexion à la base de données
    try

    {
        $bdd = new PDO('mysql:host=nsimiccovusimic.mysql.db;dbname=nsimiccovusimic;charset=utf8', 'nsimiccovusimic', 'Cvecara1');
    }

    catch(Exception $e)

    {
        die('Erreur : '.$e->getMessage());
    }

    // Récupération des 10 derniers messages
    $reponse = $bdd->query('SELECT Name, Comment FROM comment ORDER BY ID DESC LIMIT 0, 10');

    // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)

    while ($donnees = $reponse->fetch())
    {
        echo '<p><strong>' . htmlspecialchars($donnees['Name']) . '</strong> : ' . htmlspecialchars($donnees['Comment']) . '</p>';
    }

    $reponse->closeCursor();

    ?>

</body>

</html>

</body>

</html>