<?php
$user_id = filter_input(INPUT_GET,'id', FILTER_UNSAFE_RAW);
?>

<main>

    <div class="title-main">Connexion Reussie</div>



        Bienvenue <?php echo ($_SESSION['authenticated_user']) ?>
        <br/>
        <br/>
        <a href="index.php?cas=news">Les news</a>
        <br/>
        <br/>
        <a href="index.php?cas=deco">Se deconnecter</a>
</main>