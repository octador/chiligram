<?php 
require_once("./connexion/connexionDb.php");
include_once("./partials/header.php");
include_once("./partials/footer.php");
?>

<section>
    <img src="./image/icone-user.gif" alt="icone user">
    <h2>chiligram</h2>
    <form action="./processe/userProcess.php" method="post">
    <label for="pseudo">CREATED USER</label>
    <input type="text" name="newpseudo">
    <label for="pseudo">PSEUDO</label>
    <input type="text" name="pseudo">
    <label for="pseudo">PASSWORD</label>
    <input type="text" name="password">
    </form>
</section>