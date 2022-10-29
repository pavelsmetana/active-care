<?php
session_start();

if ($_SESSION['user']) {
    header('Location: index.php');
}

?>



<body>
<!-- Форма авторизации -->

<form action="signin.php" method="post">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите свой логин">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль">
    <button type="submit">Войти</button>
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
        background: #4373d2;
        border: unset;
        cursor: pointer;
    }
</style>
    </html>