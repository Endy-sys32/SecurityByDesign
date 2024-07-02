<?php

$cas = filter_input(INPUT_GET,'cas', FILTER_UNSAFE_RAW);
$action = filter_input(INPUT_GET,'action', FILTER_UNSAFE_RAW);
$id = filter_input(INPUT_GET,'id', FILTER_UNSAFE_RAW);

if(isset($action) && $action == "voir"){
    header("Location:index.php?cas=voir_news&id=$id");
}

$les_news = GestionBDD::allNews();
?>

<main>
    <div class="title-main">News</div>

    <a href="index.php?cas=compte">Compte</a>
    <br/>
    <br/>

    <div class="main-content">
        <table border="solid">
            <tr>
                <td class="title">Les News</td>
            </tr>
            <?php
            foreach ($les_news as $news) {
                echo "<tr><td><a href='index.php?cas=news&action=voir&id=$news->id'>$news->title</a></td></tr>";
            }
            ?>
        </table>
    </div>
</main>