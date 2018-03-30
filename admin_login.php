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

</head>

<body>
    <?php

    include("navbar.php"); 


    if($_POST['password']=="password" && $_POST['username']=="admin") {
    
    // Connection to the Database
    include 'connect.php';
        
echo '

<div class="container justified-gallery" style="padding: 70px;">
<h2>Contrôle des commentaires</h2>
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
                <tbody>';

            // Récupération des 100 derniers messages
            $reponse = $bdd->query('
            SELECT comment.ID, pseudo, dateofcomment, c_text, gallery_name 
            FROM comment
            INNER JOIN gallery 
            ON comment.ID_gallery = gallery.ID
            ORDER BY comment.ID DESC LIMIT 0, 20;');

            // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)

            while ($donnees = $reponse->fetch())
            {
                
                $value = $donnees['ID'];
                echo ' <tr><td>' .
                    htmlspecialchars($donnees['pseudo']) . '</td><td>' .
                    $donnees['dateofcomment'] . '</td><td>' .
                    htmlspecialchars($donnees['gallery_name']) . '</td><td>' .
                    htmlspecialchars($donnees['c_text']) . '</td><td><button type="button"  id="' . $value . '" style="display:block; float: right" class="btn btn-primary btn-sm btn-danger delete_comment"><i class="fa fa-trash-o" style="font-size:18px"> Supprimer</i></button></td></tr>';
            }


            $reponse->closeCursor();


    echo         '</div>';
           
   }


            else {
                           header('Location: admin.php?error=denied');
            }

 ?>

        <script>
            $(document).ready(function() {
                $(".delete_comment").click(function() {
                    var del_id = $(this).attr('id');
                    $.ajax({
                        type: 'POST',
                        url: 'delete.php',
                        data: 'delete_id=' + del_id,
                        success: function(data) {
                            //reload page
                            location.reload();
                        }
                    });
                });
            });

        </script>
</body>

</html>
