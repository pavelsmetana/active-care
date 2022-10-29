<?php
//    session_start();
//    if ($_SESSION['user']) {
//        header('Location: profile.php');
//    }
//?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Добавление нового товара</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h3 style="text-align: center; font-family: Arial">Добавление нового товара</h3>

    <!-- Форма регистрации -->

    <form action="product-add.php" method="POST" enctype="multipart/form-data">
        <label>Название</label>
        <input type="text" name="name" placeholder="Введите название продукта">
        <label>Изображение Товара</label>
        <input type="file" name="img">
        <label>Подробное описание</label>
        <input type="text" name="description" placeholder="Введите подробное описание товара">
        <button type="submit">Подтвердить</button>

        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
<style>
    form {
        display: flex;
        flex-direction: column;
        width: 400px;
        padding: 30px;
        margin: auto auto;
    }

    input {
        margin: 10px 0;

        border: 30px;
        border-bottom: 2px solid #e3e3e3;
        outline: none;
    }

    button {
        padding: 10px;
        background: #e3e3e3;
        border: unset;
        cursor: pointer;
    }
</style>
</html>