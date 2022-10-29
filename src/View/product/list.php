<?php
/**
 * @var $products array
 */
?>
<div>Product list</div>

<?php foreach ($products as $product) : ?>
<div><?php echo $product["name"]?></div>
<?php endforeach; ?>

