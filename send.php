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

    <title>Merci pour votre message !</title>

    <style>
    </style>

</head>

<body>

    <?php include 'navbar.php';    ?>

    <div class="container" style="margin-top: 15px;">

        Merci pour votre message !

        <?php

 if(isset($_POST['submit']))
 {
    extract($_POST); 
    $to = "nemanja.painter@gmail.com"; 
    $from = $_POST['email'];
    $subject = "new mail";
    $message =  $_POST['sujet'];              
    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
    $headers = "From:" . $from;
    $mail_sent = mail($to, $subject, $message, $headers);  

    if($mail_sent)
        echo "<script>alert('Merci, messagé envoyé. Nous allons revenir vers vous.');
           window.location='index.php';exit();</script>";
    else
        echo "<script>alert('Désole, nous n'avons pas reussi à envoyer le mail. Essayez à nouveau.');
           window.location='index.php';exit();</script>";

    }
?>
<!--
        
        <?php
$to = "somebody@example.com, somebodyelse@example.com";
$subject = "HTML email";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>
-->

    </div>

</body>

</html>