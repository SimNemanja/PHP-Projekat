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

    <title>Nemanja Simic - Cotactez nous</title>


    <style>

    </style>

        <?php include 'gtag.js'; ?>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
            }

            input[type=text],
            select,
            textarea {
                width: 100%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                margin-top: 6px;
                margin-bottom: 16px;
                resize: vertical;
            }

            input[type=submit] {
                background-color: #4CAF50;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            input[type=submit]:hover {
                background-color: #45a049;
            }

            .container {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
            }
        </style>

    </head>
    <body>

        <div>
            <?php include("navbar.php"); ?>

            <div class="container">
                <h3>Formulaire de contact</h3>
                <form action="send.php" method="POST" enctype="multipart/form-data">
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="name" placeholder="Votre nom et prenom..">

                    <label for="email">E-mail</label>
                    <input type="text" id="email" name="email" placeholder="Votre addresse E-mail..">

                    <label for="artiste">Vous désirez écrire à</label>
                    <select id="artist" name="artist">
                        
<option value="nemanja">Nemanja SIMIC</option>
<option value="milena">Milena SIMIC</option>
<option value="tata">Dobrivoje SIMIC</option>
                        
    </select>

                    <label for="sujet">Sujet</label>
                    <textarea id="sujet" name="sujet" placeholder="Le texte de votre e-mail..." style="height:180px"></textarea>

                    <input type="submit" name="submit" value="Envoyer">
                </form>
            </div>
        </div>

    </body>

</head>

</html>