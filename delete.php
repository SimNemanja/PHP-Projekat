<?php

// code will run if request through ajax
if (isset( $_SERVER['HTTP_X_REQUESTED_WITH'] )):

// Connection to the Database
$id = $_POST['delete_id'];
include 'connect.php';
$req = $bdd->prepare("DELETE FROM comment WHERE ID = '$id'");
$req->execute();

endif?>