<?php
// --------------------------------------ADD USER----------------------

require_once('../connexion/connexionDb.php');

session_start();

if (
    isset($_POST['pseudo']) && !empty($_POST['pseudo']) &&
    isset($_FILES['picture']) && !empty($_FILES['picture'])
) {
<<<<<<< HEAD
    $pseudoSession = $_POST['pseudo'];

    $sql = "SELECT * FROM profil WHERE pseudo = '$pseudoSession' ";
    $request = $db->prepare($sql);
    $request->execute();
    $checkuser = $request->fetch();

    if ($checkuser['pseudo'] == false) {
        var_dump('je n\'existe pas');
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
        
=======
    $pseudo = $_POST['pseudo'];
    // add url et formatage
    $images = $_FILES['picture'];
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

    $_SESSION['id'] = $db->lastInsertId();

>>>>>>> soumaia
    header('Location: ../page/profil.php');
    }

    if ($checkuser['pseudo'] == $pseudoSession) {
        $_SESSION['pseudo'] = $checkuser['pseudo'];
        $_SESSION['image'] = $checkuser['picture'];

        header('Location: ../page/profil.php');
    }
}
