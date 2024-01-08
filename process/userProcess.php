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

    var_dump($checkuser);

    // echo 'sortie de checkuser';
    // var_dump($checkuser);
    // si checkuser existe pas
    
    if ($checkuser === false) {
        // poste dans une variable
        $pseudo = $_POST['pseudo'];

        // $_FILES dans picture
        $images = $_FILES['picture'];
        // formatage pour recupré l'adresse du $_FILES
        $name = basename($_FILES["picture"]["name"]);
        $tmp_name = ($_FILES["picture"]["tmp_name"]);

        $image = move_uploaded_file($tmp_name, "../img/" . $name);
        $pathimage = "../img/" . $name;

        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['picture'] = $pathimage;
        echo 'adresse formaté :';
        var_dump($pathimage);
        // insertion dans la $db du pseudo et chemin de image
        $sqlInsert = "INSERT INTO profil (pseudo, picture ) VALUE (:pseudo, :picture)";
        $createUser = $db->prepare($sqlInsert);
        $createUser->execute(
            [
                'pseudo' => $pseudo,
                'picture' => $pathimage,
            ]
        );
        // je met id dans une session du user que je vien de créé
        $_SESSION['id'] = $db->lastInsertId();

        // check $_SESSION['id']
        // verifié que la session id ce crée
        echo'check creation de session id';
        var_dump($_SESSION['id']);
        header('Location: ../page/profil.php');
    }
// si $pseudo est trouver dans la $bd je l'ajoute au session
echo 'ici';
var_dump($checkuser);
    if ($checkuser['pseudo'] === $pseudoSession) {
        $_SESSION['pseudo'] = $checkuser['pseudo'];
        $_SESSION['picture'] = $checkuser['picture'];
        $_SESSION['id'] = $checkuser['id'];
        var_dump($_SESSION['id']); 
        header('Location: ../page/profil.php');
    }
}header("Location: ../index.php");

