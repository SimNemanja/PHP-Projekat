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
    // Connection to the Database
    include 'connect.php';
    
    // Connection to Google Analytics
    include 'gtag.js'; 
    ?>

        <style>


        </style>

</head>

<body>

    <?php include 'navbar.php';    ?>

    <form class="NScentered form-group" action="admin_login.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
                <?php if (isset($_GET['error'])){ echo '<h3>Identifiants incorrects, essayez à nouveau</h3>';};    ?>
            <h3>Mot de pass demandé</h3>
            <h4>Veuillez entrer le mot de passe pour acceder les outils d'administration :</h4>
        </div>
        <div class="form-group">
            <label for="email">Nom d'utilisateur:</label>
            <input type="text" class="form-control" name="username"><br/>
        </div>
        <div class="form-group">
            <label for="pwd">Mot de passe:</label>
            <input type="password" class="form-control" name="password">
        </div>
        <input type="submit" name="submit" value="Envoyer" class="btn btn-default">
    </form>

</body>

</html>
