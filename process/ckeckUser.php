<?php
require_once('../connexion/connexionDb.php');


if (isset($_POST['pseudo']) && !empty($_POST['pseudo'])) {

    $pseudoSession = $_POST['pseudo'];
    var_dump($pseudoSession);

    // verifier si il exist dans la $bd
    $sql = "SELECT * FROM profil WHERE pseudo = '$pseudoSession' ";
    $request = $db->prepare($sql);
    $request->execute();
    $checkuser = $request->fetch();

    //si le pseudo n'est pas dans la bd
    if ($checkuser['pseudo'] == false) {
        //vider la session avant envoi dans la pas adduser
        
        header("Location: ../page/addUser.php");
    }

    // pour select picture du pseudo
    $sql = "SELECT picture FROM profil WHERE pseudo = '$pseudoSession' ";
    $request = $db->prepare($sql);
    $request->execute();
    $checkPicture = $request->fetch();

    //si il y a pas d'ilage
    if ($checkPicture['picture'] == false) {
        //vider la session avant envoi dans la pas adduser
        
=======
    var_dump('en dessous');
    var_dump($checkPicture['picture']);
    

    if ($checkPicture['picture'] == false) {
>>>>>>> soumaia
        header("Location: ../page/addUser.php");
    }

    $valuecheckPicture = $checkPicture['picture'];


    if ($checkuser['pseudo'] == $pseudoSession) {

        $_SESSION['pseudo'] = $pseudoSession;
        $_SESSION['picture'] = $valuecheckPicture;

        header('Location: ../page/profil.php');
    }
}}
