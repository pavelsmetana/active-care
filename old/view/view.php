<?php

foreach ($products as $item) { ?>
    <div class="product-tile"><img class="product-thumb" src="/<?php echo ($item['1']);?>" a href="lala">    <!--  Img  goes here  -->
        <div class="product-info">
            <h3><?php echo ($item['0']);?></h3>   <!--  Name goes here  -->
            <p class="tile-desc"><?php echo ($item['2']);?></p>    <!--  Description goes here  -->
        </div>
    </div>
    <?php
}
echo '</div>';