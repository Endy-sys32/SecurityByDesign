<?php

$cas = filter_input(INPUT_GET,'cas', FILTER_UNSAFE_RAW);
$action = filter_input(INPUT_GET,'action', FILTER_UNSAFE_RAW);

if(isset($action) && $action == 'authent'){
// Récupérer les données du formulaire
    $login = $_GET['login'];
    $password = $_GET['password'];

// Hasher le mot de passe avec SHA1
    $hashed_password = sha1($password);

    echo($login . ' ' . $hashed_password);
    $isUser = GestionBDD::isUser($login, $hashed_password);

    if($isUser == true){
        $user = GestionBDD::getAllFromLoginPass($login, $hashed_password);
//        var_dump($user);
        echo ("<br>");
        echo($user->id);
        echo ("<br>");
        echo($user->login);
        echo ("<br>");
        echo($user->password);
        header("Location:index.php?cas=compte&action=connect");
        die();
    } else {
        header("Location:index.php?cas=login&action=failed&login=".$login);
    }
}

if(isset($cas)){
?>


<main>
    <?php
    if (isset($action) && $action == 'failed'){
        $login = filter_input(INPUT_GET,'login', FILTER_UNSAFE_RAW);
        echo("<div class='title-main'>Erreur lors de la connexion $login </div>");
    } else {
        echo("<div class='title-main'>Page de connection</div>");
    }
    ?>



    <form action="index.php" method="get">
        <label for="login">Login :</label>
        <input type="text" id="login" name="login" required><br><br>

        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="hidden" id="action" name="action" value="authent"><br><br>

        <input type="submit" value="S'inscrire">
    </form>
</main>

<?php
}
?>