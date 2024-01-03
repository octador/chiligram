<?php
require_once("../connexion/connexionDb.php");
include_once("../partials/header.php");
include_once("../partials/footer.php");
?>

<section>
    <div class="col-0 col-md-4">

    </div>
    <div class="container col-8 col-md-4 mt-3">
        <div class="d-flex flex-column container rounded bg-add-user text-created-user">
            <h2 class="tilte-card text-center title-add-user mt-2">CREATED USER</h2>
            <form action="../page/addPost.php" method="post">
                <div class="d-flex flex-column mt-2 ">
                    <label for="pseudo" class="text-start">PSEUDO</label>
                    <input type="text" name="pseudo" id="pseudo" class="rounded">
                </div>

                <div class="d-flex flex-column mt-2 ">
                    <label for="lastname" class=" text-start">LASTNAME</label>
                    <input type="text" name="lastname" id="lastname" class="rounded">
                </div>

                <div class="d-flex flex-column mt-2 ">
                    <label for="firstname" class="text-start">FIRSTNAME</label>
                    <input type="text" name="firstname" id="firstname" class="rounded">
                </div>

                <div class="d-flex flex-column mt-2 ">
                    <label for="email" class="text-start">EMAIL</label>
                    <input type="email" name="email" id="email" class="rounded">
                </div>

                <div class="d-flex flex-column mt-2 ">
                    <label for="password" class="text-start">PASSWORD</label>
                    <input type="password" name="password" id="password" class="rounded">
                </div>

                <div class="d-flex flex-column mt-2 ">
                    <label for="confirme" class="text-start">CONFIRME</label>
                    <input type="password" name="confirme" id="confirme" class="rounded">
                </div>

                <div class="d-flex flex-column mt-2 rouded">
                    <label for="age" class="text-start">AGE</label>
                    <input type="date" name="age" id="age" class="rounded">
                </div>

                <div class="d-flex flex-column mt-2 mb-3">
                    <label for="imageInput">SELECT IMAGE</label>
                    <input type="file" id="imageInput" name="image" accept="image/*">
                    <input type="button" value="EFFACER" onclick="deleteImage()" class="text-card rounded mt-2">
                    <button type="submit" class="text-card mt-1 rounded">ENVOYER</button>
                </div>


            </form>
        </div>
    </div>
    <div class="col-0 col-md-4"></div>
</section>