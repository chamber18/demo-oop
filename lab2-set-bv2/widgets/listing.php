<?php 
$path = "./widgets/";
$card = $path."card.php"
?>

<h2 class="content-text">Hot Items</h2>
    <div class="listing">
    <?php 
     for($i = 0; $i < 10; $i++){
        include($card);
     }
    ?>


        <!-- <div class="item-card">
            <div class="card-content">
                <h3 class="item-name">Super Phone V8</h3>
                <p class="item-category">Electronics</p>
            </div>
            <img src="images/listing/item-1.png" alt="">
            <p class="item-price"><span>P6,900.00</span> P4,200.00</p>
        </div>
        <div class="item-card">
            <div class="card-content">
                <h3 class="item-name">Super Led Projector</h3>
                <p class="item-category">Electronics</p>
            </div>
            <img src="images/listing/item-2.png" alt="">
            <p class="item-price"><span>P12,90.00</span> P9,200.00</p>
        </div>
        <div class="item-card">
            <div class="card-content">
                <h3 class="item-name">VR Googles</h3>
                <p class="item-category">Electronics</p>
            </div>
            <img src="images/listing/item-3.png" alt="">
            <p class="item-price"><span>P690.00</span> P420.00</p>
        </div>
        <div class="item-card">
            <div class="card-content">
                <h3 class="item-name">Game Controller</h3>
                <p class="item-category">Electronics</p>
            </div>
            <img src="images/listing/item-4.png" alt="">
            <p class="item-price"><span>P8,990.00</span> P5,599.00</p>
        </div> -->
    </div>