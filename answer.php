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
        <a href="about_me.php"><span class="nav">Обо мне</span></a>
        <span class="right">
            <a href="form_of_com.php"><span class="nav">Обратная связь</span></a>
            <a href="form_login.php"><span class="nav">Войти</span></a>
        </span>
        
    </header>
<?php
    if(isset($_POST['name'])){
        $name=$_POST['name'];
        $message=$_POST['message'];
        $type_mess=$_POST['type_mess'];
        if (isset($_POST['radioB'])) {$radioB=$_POST['radioB'];} else {$radioB='';}
    }
?>
<?
    echo '<p>Здравствуйте, '.$_POST['name'].'</p>';
    if ($_POST['type_mess'] == 'предложение'){
        echo '<p> Спасибо за ваше предложние:</p>';
        echo '<textarea>'.$_POST['message'].'</textarea>';
    }else{
        echo '<p>Мы рассмотрим вашу жалобу:</p>';
        echo '<textarea>'.$_POST['message'].'</textarea>';
    }
    if (isset($_FILES['file_f']) & $_FILES['file_f'] != '') echo '<p>Вы приложили следующий файл: '.$_FILES['file_f']['name'].'</p>';

    echo '<p><a href="form_of_com.php?N='.$_POST['name'].'&E='.$_POST['email'].'&R='.$radioB.'">Заполнить снова</a></p>';

?>

