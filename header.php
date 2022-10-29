    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/x-icon" href="/res/img/logo.png">
        <title>Бытовая химия Active - Россия</title>
        <div class="navbar">
            <img class="logo" src="res/img/logo.png" align="left" height="60">
            <a href="index.php">Главная</a>
            <a href="#news">Представительство в РФ</a>
            <div class="dropdown">
                <button class="dropbtn">Продуктовая линейка
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="#">продукт 1</a>
                    <a href="#">продукт 2</a>
                    <a href="#">продукт 3</a>
                </div>
            </div>
            <a href="about.php">О нас</a>

            <?php
            if ($_SESSION['user']){
                echo '<a href="functions/product-add-form.php">Добавить товар</a>';
                echo '<a href="functions/signout.php">Выйти</a>';
            }
            if (!$_SESSION['user']){
                echo '<a href="functions/signin-form.php">Войти</a>';
            }

            ?>
            </form>
        </div>
    </head>



