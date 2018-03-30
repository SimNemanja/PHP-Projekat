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

    <!--   Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/lightbox.js"></script>
    <script src="js/jquery.justifiedGallery.js"></script>


    <title>Nemanja Simic Gallery</title>

    <?php

    $nom = $_GET['nom'];
    $gallery = $_GET['id'];

    // Connection to the Database
    include 'connect.php';

    ?>

    <!--
    
    To link the gallery name : use http://localhost/gallery/index.php?nom=nameOfGallery

-->

    <style>

        <?php include 'gtag.js'; ?>

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


    <div class="panel-group">

        <?php


        // Récupération des 10 derniers messages
        $reponse = $bdd->query('SELECT pseudo, dateofcomment, comment FROM comment WHERE gallery ="'. $gallery . '" ORDER BY ID DESC LIMIT 0, 10');

        // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)

        while ($donnees = $reponse->fetch())
        {
            echo '<div class="panel panel-default"><strong><div class="panel-heading">' .
                htmlspecialchars($donnees['pseudo']) . ' : <div style="float:right;">' . $donnees['dateofcomment'] .
                ' </div></strong></div><div class="panel-body"> ' .
                htmlspecialchars($donnees['comment']) . '</div></div>';
        }


        $reponse->closeCursor();

        ?>

        <p>
        <div class="comment-block">
        </div>
        </p>

        <p>
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel panel-heading">
                        <div class="form-group ">
                            <form action="ajax_comment.php?nom=<?php echo $nom ?>&id=<?php echo $gallery ?>" method="post" >
        <p>
            <label for="pseudo">Votre nom </label> : <br />
            <input type="text" name="pseudo" class="form-control" id="pseudo" /><br />
            <label for="comment">Laisser un commentaire </label> :<br />
            <textarea id="comment" name="comment" placeholder="Le texte de votre commentaire.." class="form-control" rows="5"></textarea>
            <br />
            <input type="submit" value="Envoyer" class="btn btn-primary"/>
        </p>
        </form>
        </p>
    </div>
</div>
</div>
</div>
<p/>

<script>
    $(document).ready(function(){
        var form = $('form');
        var submit = $('#submit');

        form.on('submit', function(e) {
            // prevent default action
            e.preventDefault();
            // send ajax request
            $.ajax({
                url: 'ajax_comment.php?nom=<?php echo $nom ?>&id=<?php echo $gallery ?>',
                type: 'POST',
                cache: false,
                data: form.serialize(), //form serizlize data
                beforeSend: function(){
                    // change submit button value text and disabled it
                    submit.val('Submitting...').attr('disabled', 'disabled');
                },
                success: function(data){
                    // Append with fadeIn see http://stackoverflow.com/a/978731
                    var item = $(data).hide().fadeIn(800);
                    $('.comment-block').append(item);

                    // reset form and button
                    form.trigger('reset');
                    submit.val('Submit Comment').removeAttr('disabled');
                },
                error: function(e){
                    alert(e);
                }
            });
        });
    });
</script>
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
