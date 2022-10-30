<?php
if (isset($_SESSION['user'])){
    echo '<h3>Добро пожаловать, '. $_SESSION['full_name']. '</h3>';
    echo '<a href="/functions/signout.php">Выйти</a>';
}
?>
<div class="grid-container">
    <div class="product-tile"> <span style="position: absolute; top: 2px; right: 2px; z-index: 100;"><a href="product-deletet.php"> X</a></span>
        <img src="/res/img/body-wash-(-3-green)1549800464.png" class="product-thumb">
        <div class="product-info">
            <h3>Образец 1</h3>
            <p class="tile-desc">Эта карточка выступает как образец описания Товара. Просто описание.</p>
        </div>
    </div>
    <div class="product-tile">
        <img src="/res/img/body-wash-(-3-red)1549800464.png" class="product-thumb">
        <div class="product-info">
            <h3>Образец 2</h3>
            <p class="tile-desc">Образец описания Товара. Просто описание. Вот так будут выглядеть карточки товаров на сайте</p>
        </div>
    </div>


