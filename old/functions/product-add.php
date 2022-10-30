<?php
session_start();
require_once __DIR__.'/connect.php';

$name = $_POST['name'];
$category = $_POST['category'];
$description = $_POST['description'];

    $img = 'res/img-uploads/' . time() . $_FILES['img']['name'];
    if (!move_uploaded_file($_FILES['img']['tmp_name'], '../' . $img)) {
        $_SESSION['message'] = 'Ошибка при загрузке изображения!';
        header('Location: product-add-form.php');
    }


$pdo->query("INSERT INTO `products` (`id`, `name`,  `img`, `description`) 
VALUES (NULL, '$name', '$img', '$description')");

    $_SESSION['message'] = 'Продукт добавлен успешно!';
    header('Location: ../index.php');


