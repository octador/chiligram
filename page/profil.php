<?php
require_once("../connexion/connexionDb.php");
include_once("../partials/header.php");
include_once("../partials/footer.php");

session_start();
var_dump($_SESSION['pseudo']);
var_dump($_SESSION['image']);
?>

<section class="col-12">
    <div class="container d-flex justify-content-around rounded card-profil mt-1">
        <div class="m-1">
            <img src="<?php echo isset($_SESSION['image']) && !empty($_SESSION['image']) ? $_SESSION['image'] : '../image/icone-user.gif'; ?>" alt="Image icone" height="140px" class="rounded-start-circle rounded-end-circle">
        </div>

        <div class="mt-4">
            <img src="<?php echo isset($_SESSION['imag']) && !empty($_SESSION['image']) ? $_SESSION['image'] : '../image/icone-user.gif'; ?>" alt="Image icone" height="90px" class="rounded-start-circle rounded-end-circle">
        </div>
        <div class="mt-4">
            <img src="<?php echo isset($_SESSION['image']) && !empty($_SESSION['image']) ? $_SESSION['image'] : '../image/icone-user.gif'; ?>" alt="Image icone" height="90px" class="rounded-start-circle rounded-end-circle">
        </div>
        <div class="mt-4">
            <img src="<?php echo isset($_SESSION['image']) && !empty($_SESSION['image']) ? $_SESSION['image'] : '../image/icone-user.gif'; ?>" alt="Image icone" height="90px" class="rounded-start-circle rounded-end-circle">
        </div>
        <div class="mt-4">
            <img src="<?php echo isset($_SESSION['image']) && !empty($_SESSION['image']) ? $_SESSION['image'] : '../image/icone-user.gif'; ?>" alt="Image icone" height="90px" class="rounded-start-circle rounded-end-circle">
        </div>
        <div class="mt-4">
            <img src="<?php echo isset($_SESSION['image']) && !empty($_SESSION['image']) ? $_SESSION['image'] : '../image/icone-user.gif'; ?>" alt="Image icone" height="90px" class="rounded-start-circle rounded-end-circle">
        </div>
    </div>
</section>
<!-- --------------------------------------------PARTY 2 --------------------------------- -->
<section>
    <div class="container card-profil py-2 mt-2 rounded">
        <div class="d-flex mt-3 p-3 bg-white rounded ">
            <img src="../image/icone-add-picture.svg" alt="picture de profile" height="90">
            <p class="mx-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, similique? Autem a dolorum aut obcaecati itaque quis praesentium eligendi blanditiis rerum dicta, labore rem suscipit explicabo excepturi odio doloremque architecto quasi quas nisi adipisci. Libero impedit quis quod porro culpa quisquam fugit, debitis voluptatem asperiores.</p>
            <img src="<?php echo isset($_SESSION['image']) && !empty($_SESSION['image']) ? $_SESSION['image'] : '../image/icone-user.gif'; ?>" alt="Image icone" height="90px" class="rounded-start-circle rounded-end-circle">
        </div>
        
        <div class="d-flex  mt-3 p-3 bg-white rounded">
            <img src="../image/icone-add-picture.svg" alt="picture de profile" height="90">
            <p class="mx-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, similique? Autem a dolorum aut obcaecati itaque quis praesentium eligendi blanditiis rerum dicta, labore rem suscipit explicabo excepturi odio doloremque architecto quasi quas nisi adipisci. Libero impedit quis quod porro culpa quisquam fugit, debitis voluptatem asperiores.</p>
            <img src="<?php echo isset($_SESSION['image']) && !empty($_SESSION['image']) ? $_SESSION['image'] : '../image/icone-user.gif'; ?>" alt="Image icone" height="90px" class="rounded-start-circle rounded-end-circle">
        </div>

        <div class="d-flex  mt-3 p-3 bg-white rounded">
            <img src="../image/icone-add-picture.svg" alt="picture de profile" height="90">
            <p class="mx-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, similique? Autem a dolorum aut obcaecati itaque quis praesentium eligendi blanditiis rerum dicta, labore rem suscipit explicabo excepturi odio doloremque architecto quasi quas nisi adipisci. Libero impedit quis quod porro culpa quisquam fugit, debitis voluptatem asperiores.</p>
            <img src="<?php echo isset($_SESSION['image']) && !empty($_SESSION['image']) ? $_SESSION['image'] : '../image/icone-user.gif'; ?>" alt="Image icone" height="90px" class="rounded-start-circle rounded-end-circle">
        </div>
    </div>

</section>