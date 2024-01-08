<?php
require_once('../connexion/connexionDb.php');

session_start();
// je verifie si $poste pseudo existe
if (isset($_POST['pseudo']) && !empty($_POST['pseudo'])){

    $pseudoSession = $_POST['pseudo'];

    var_dump($pseudoSession);
    // verifier si il exist dans la $bd
    $sql = "SELECT * FROM profil WHERE pseudo = '$pseudoSession' ";
    $request = $db->prepare($sql);
    $request->execute();
    $checkuser = $request->fetch();

    //si le pseudo n'est pas dans la bd
    if ($checkuser['pseudo'] == false) {
        //    je renvoi a l'inscription
        header("Location: ../page/addUser.php");
    }

    // pour select picture du pseudo si le pseudo n'est pas false
    $sql = "SELECT picture FROM profil WHERE pseudo = '$pseudoSession' ";
    $request = $db->prepare($sql);
    $request->execute();
    $checkPicture = $request->fetch();

