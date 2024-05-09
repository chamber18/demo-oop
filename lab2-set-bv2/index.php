<?php 
 $path = "./widgets/";
 $header = $path."header.php";
 $nav = $path."main_menu.php";
 $hero = $path."hero.php";
 $listing = $path."listing.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <div class="header">
        <?php include( $header) ?>
        </div>
        <div class="nav">
        <?php include( $nav) ?>
        </div>
        <div class="hero">
        <?php include( $hero) ?>
        </div>
        <div class="content">
        <?php include( $listing) ?>
        </div>
        <div class="footer"> [YOUR LASTNAME HERE] - 2nd Lab Exam - SET B</div>
    </div>
</body>
</html>