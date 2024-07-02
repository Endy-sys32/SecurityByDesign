<?php

if(isset($_SESSION['authenticated_user'])){
$user = GestionBDD::getAllFromLogin($_SESSION['authenticated_user']);
}

?>
<main>
    <div class="title-main">Liens</div>

    <div class="content-main">

        <?php
        if(isset($user)){
            echo("<a href='index.php?cas=compte   '>Mon Compte</a>");
        } else {
            echo("<a href='index.php?cas=login'>Se Connecter</a>");
        }
        ?>
    </div>
</main>