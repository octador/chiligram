<?php
// --------------------------------------ADD USER----------------------
// je vien de adduser.php
require_once('../connexion/connexionDb.php');

session_start();
echo 'pseudo entré :';
var_dump($_POST['pseudo']);
echo 'picture entré :';
var_dump($_FILES['picture']);

if (
    isset($_POST['pseudo']) && !empty($_POST['pseudo']) &&
    isset($_FILES['picture']) && !empty($_FILES['picture'])
) {
    echo 'pseudo apres isset :';
    var_dump($_POST['pseudo']);
    echo 'picture apres isset :';
    var_dump($_FILES['picture']);

    // recuperation du post dans une variable 
    $pseudoSession = $_POST['pseudo'];
    echo '$pseudoSession :';
    var_dump($pseudoSession);

    // check si user existe dans la $db
    $sql = "SELECT * FROM profil WHERE pseudo = '$pseudoSession' ";
    $request = $db->prepare($sql);
    $request->execute();
    $checkuser = $request->fetch();

        $name = basename($_FILES["picture"]["name"]);
        $tmp_name = ($_FILES["picture"]["tmp_name"]);

        $image = move_uploaded_file($tmp_name, "../img/" . $name);
        $pathimage = "../img/" . $name;

        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['picture'] = $pathimage;

        $sqlInsert = "INSERT INTO profil (pseudo, picture ) VALUE (:pseudo, :picture)";
        $createUser = $db->prepare($sqlInsert);
        $createUser->execute(
            [
                'pseudo' => $pseudo,
                'picture' => $pathimage,
            ]
        );

    }
// si $pseudo est trouver dans la $bd je l'ajoute au session
echo 'ici';
var_dump($checkuser);
    if ($checkuser['pseudo'] === $pseudoSession) {
        $_SESSION['pseudo'] = $checkuser['pseudo'];
        $_SESSION['picture'] = $checkuser['picture'];

        header('Location: ../page/profil.php');
    }
}header("Location: ../index.php");

