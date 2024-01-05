<?php
require_once("./connexion/connexionDb.php");
include_once("./partials/header.php");
include_once("./partials/footer.php");


?>

<section>
    <div class="col-0 col-md-4"></div>
    <div class="container d-flex justify-content-center mt-3 p-3 ">
        <div class="d-flex flex-column col-8 col-md-4 border rounded container bg-card">
            <div class="d-flex justify-content-center align-items-center flex-column ">
                <div class="mt-3">
                    <img src="./image/icone-user.gif" alt="icone annimate user" height="70px" class="img">
                </div>
                <div class="mt-3 ">
                    <h2 class="title-card">Chiligram</h2>
                </div>
            </div>

            <form action="./process/ckeckUser.php" method="post">
                <div class="d-flex justify-content-center flex-column">
                    <label for="pseudo" class="mb-2 mt-2 text-card">PSEUDO</label>
                    <input type="text" name="pseudo" class="rounded">

                    <a href="./page/addUser.php" class="border mt-4 btn btn-white"> ADD ACCOUNT</a>
                    <button type="submit" class="mt-4 mb-4 rounded text-card">GO</button>
                </div>
            </form>

        </div>
    </div>
    <div class="col-0 col-md-4"></div>
</section>