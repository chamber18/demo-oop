<?php 
$path = "./src/";
$menu = file($path."main-menu.txt")
?>

<ul>
    <?php 
    foreach($menu as $i){
        list($text, $link) = explode(",",$i);
    ?>
    <li><a href="<?= $link ?>"><?= $text ?></a></li>

    <?php 
    }
    ?>
</ul>