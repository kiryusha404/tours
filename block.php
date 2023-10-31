<?php
    include("temp/db.php");

    if(empty($_SESSION['id'])){
        header('Location: index');
    }

    $push = 'INSERT INTO `orders` (`id`, `tour`, `user`) VALUES (NULL, "'.$_GET['id'].'", "'.$_SESSION['id'].'");';
    $input = mysqli_query($touring, $push);

    header('Location: tours');

