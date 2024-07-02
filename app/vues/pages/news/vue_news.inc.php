<?php


$id = filter_input(INPUT_GET,'id', FILTER_UNSAFE_RAW);

if(isset($id)){
$news = GestionBDD::getNewsById($id);
}

?>
<main>
    <br/>
    <a href="index.php?cas=compte">Compte</a>
    <br/>
    <a href="index.php?cas=compte">news</a>
    <br/>
    <div class="title-main"><?php echo($news->title)?></div>
    <br/>
    <?php echo($news->content) ?>

</main>