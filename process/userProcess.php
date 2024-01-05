<?php
// --------------------------------------ADD USER----------------------

require_once('../connexion/connexionDb.php');

session_start();

if (
    isset($_POST['pseudo']) && !empty($_POST['pseudo']) &&
    isset($_FILES['image']) && !empty($_FILES['image'])
) {
    $pseudo = $_POST['pseudo'];
    // add url et formatage
    $images = $_FILES['image'];
    $name = basename($_FILES["image"]["name"]);
    $tmp_name = ($_FILES["image"]["tmp_name"]);

    $image = move_uploaded_file($tmp_name, "../img/" . $name);
    $pathimage = "../img/" . $name;
    $_SESSION['pseudo'] = $pseudo;
    $_SESSION['image'] = $pathimage;

    $sqlInsert = "INSERT INTO profil (pseudo, picture ) VALUE (:pseudo, :picture)";
    $createUser = $db->prepare($sqlInsert);
    $createUser->execute(
        [
            'pseudo' => $pseudo,
            'picture' => $pathimage,
        ]
    );
    header('Location: ../page/profil.php');
}



