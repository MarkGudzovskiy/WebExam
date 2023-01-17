<!DOCTYPE html>
<html long="ru">
<head>
    <meta charset="utf-8">
    <title>FirstPage</title>
    <!-- подключение стилей gooleFonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Andika:wght@400;700&display=swap" rel="stylesheet">
    <!-- подключние файла стилей -->
    <link rel="stylesheet" href="styleMain.css">
</head>
<body>
    <header>
        <a href="#" id="logo">MielPops</a>
        <a href="index.php"><span class="nav">Главная</span></a>
        <span class="right">
            <a href="form_of_com.php"><span class="nav">Обратная связь</span></a>
            <a href="form_login.php"><span class="nav">Войти</span></a>
        </span>
        
    </header>
<?php
    $login='lab4';
    $password='qwerty'
?>
<div class="wrap">
        <main class="main_form2">
            <form name="log_in" action="#" enctype="multipart/form-data" method="post" class="center">
                <legend class="form2_legend">Авторизация</legend>
                <input type="text" name="login" placeholder="логин" class="txt_block"><br>
                <input type="password" name="pass" placeholder="пароль" class="txt_block"><br>
                <input type="checkbox" name="remember" value="Запомнить меня" class="checkbox"><label class="form2_label">Запомнить меня</label><br>
                <input type="submit" value="Войти" class="button">

                <? if (isset($_POST['login']) & isset($_POST['pass'])) {if ($_POST['login'] == $login & $_POST['pass'] == $password) echo "<p>Авторизация прошла успешно!</p>";} ?>
            </form>          
        </main>
        <footer>

            <span class="left">Все права защищены &copy; 2022
            <?php echo date('d.m.y в H:i:s'); ?>
            </span>
            <span class="right">
                <span class="contact">+7 (900) 235-75-07</span>
                <span class="contact">mark_gudzovskiy@mail.ru</span>
            </span>
        
        </footer>
    </div>
</body>
</html>