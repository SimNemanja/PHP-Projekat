<?php

// code will run if request through ajax
if (isset( $_SERVER['HTTP_X_REQUESTED_WITH'] )):

// Connection to the Database
include 'connect.php';

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO comment (pseudo, 	c_text, ID_gallery) VALUES(?, ?, ?)');
$req->execute(array(
    
    $_POST['pseudo'], 
    $_POST['comment'],
    $_POST['id']

));

    ?>

<!-- sending response with new comment and html markup-->
    <?php

    // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)

        echo '<div class="panel panel-default"><strong><div class="panel-heading">' .
            htmlspecialchars($_POST['pseudo']) . ' : <div style="float:right;">' . date('Y-m-d H:i:s' ) .
            ' </div></strong></div><div class="panel-body"> ' .
            htmlspecialchars($_POST['comment']) . '</div></div>';

    ?>

<?php
  // close connection
//  dbConnect(0);
endif?>