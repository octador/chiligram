<?php

include_once("../partials/header.php");
include_once("../partials/footer.php");
// include_once("../process/addPostProcess.php");
session_start();
// var_dump($_SESSION['pseudo']);
// var_dump($_SESSION['picture']);
// var_dump($_SESSION['text']);
// $_SESSION['image'] = $_SESSION['picture'];

require_once('../connexion/connexionDb.php');
$proliste = $db->query('SELECT * FROM profil');

$profils = $proliste->fetchALL();
// var_dump($_SESSION['id']);
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];

    $request = $db->query("SELECT * FROM profil WHERE id = $id");
    $user = $request->fetch();
    var_dump($user);
}
// $postId=$db->query('SELECT * FROM post');

// $post = $postId->fetch();
// var_dump($post);
$postliste = $db->query('SELECT post.id, profil.id, post.id_user_post, post.text, post.picture_post, profil.pseudo, profil.picture, post.date  FROM post JOIN profil ON profil.id = post.id_user_post');

$posts = $postliste->fetchAll();
// var_dump($posts['id']);

$comliste = $db->query('SELECT commentaire.id, commentaire.text_com, commentaire.id_user_com, commentaire.id_post, profil.pseudo, profil.picture, post.id_user_post, post.id, post.text, post.picture_post, post.date  FROM commentaire JOIN profil JOIN post ON commentaire.id_post = post.id  AND commentaire.id_user_com = profil.id WHERE commentaire.id_post = post.id');
$coms = $comliste->fetchAll();

?>


<section class="col-12">
    <div class="d-flex flex-column container rounded bg-add-user text-created-user">

        <div class="d-flex justify-content-around align-items-center ">
            <h2 class="tilte-card text-center title-add-user mt-2"> <?= $_SESSION['pseudo'] ?> PROFIL</h2>
            <a class="text-decoration-none text-dark title-add-user" href="../page/addUser.php">Se déconnecter</a>
        </div>
    </div>
    <div class="container d-flex justify-content-around rounded card-profil mt-1">
        <div class="m-1">
            <img src="<?= $_SESSION['picture'] ?>" alt="Image icone" height="140px" class="rounded-start-circle  rounded-end-circle">
            <h3 class="title-add-user"><?= $_SESSION['pseudo'] ?></h3>
        </div>
        <?php foreach ($profils as $profil) { ?>

            <div class="mt-4">

                <img src="<?php $profil['picture'] ?>" alt="Image icone" height="90px" class="rounded-start-circle rounded-end-circle">
                <h3 class="title-add-user"><?= $profil["pseudo"] ?></h3>
            </div>
        <?php } ?>
    </div>
</section>
<section>

    <div class="container  mt-3">
        <div class="d-flex flex-column container rounded bg-add-user text-created-user">
            <div class="d-flex justify-content-around align-items-center ">
                <a href="./addPost.php">
                    <h2 class="tilte-card text-center text-dark text-decoration-none title-add-user mt-2">Add Post</h2>
                </a>

            </div>
        </div>
    </div>
</section>
<!-- --------------------------------------------PARTY 2 --------------------------------- -->

<?php foreach ($posts as $post) { ?>
    <section class="col-12">
        <div class="container card-profil mt-1">
            <div class="">
                <div class=" d-flex justify-content-between mt-3 p-3 bg-white rounded ">
                    <div class="col-2">
                        <img class="post rounded-start-circle rounded-end-circle" src="<?php $post['picture'] ?>" alt="">
                        <h3 class="title-add-user"><?= $post['pseudo'] ?></h3>
                    </div>
                    <div>
                        <p><?= $post['date'] ?></p>
                    </div>
                </div>
                <div class="">

                    <div>
                        <p class="title-add-user"><?= $post['text'] ?></p>
                    </div>
                    <div>
                        <img class="post" src="<?= $post['picture_post'] ?>">
                    </div>
                </div>


            </div>
            <div>
                <h1 class="title-add-user">Tous les commentaires</h1>
               
                <?php foreach ($coms as $com) { ?>
                    <div class="mt-4">

                        <img src="<?php $com['picture'] ?>" alt="Image icone" height="90px" class="rounded-start-circle rounded-end-circle">
                        <h3 class="title-add-user"><?= $com["pseudo"] ?></h3>
                        <p><?= $com["text_com"] ?></p>

                    </div>
                 <?php } ?>

            </div>
           
            <form action="../process/addcomment.php" method="post">
                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                <input type="hidden" name="postId" value="<?= $post['id'] ?>">
                
                <label for="">commenter</label>
                <input type="text" name="text_com" id="text_com" class="rounded pb-2 mb-5 w-75">

                <button type="submit" class="text-card mt-1 rounded">ENVOYER</button>
            </form>
            
        </div>
    </section>
<?php } ?>