<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Туристическое агентство</title>
</head>
<body>
    <header>

    </header>
    <div class = "main_nav">
        <?php
            if(empty($_SESSION['id'])){
        ?>
            <a href = "index">Войти</a>
            <a href = "registration">Зарегистрироваться</a>
        <?php
            }
            else{
        ?>
            <a href = "tours">Туры</a>
            <a href = "top">Хиты</a>
            <?php
                if($_SESSION['admin'] == 1){
            ?>
                <a href = "admin">Админ панель</a>
            <?php
            }
            ?>
            <a href = "log_out">Выйти</a>
        <?php
            }
        ?>
    </div>
<div class="content">

    
