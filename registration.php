<?php
    include("temp/db.php");

    if(!empty($_SESSION['id'])){
        header('Location: tours');
    }

    include("temp/header.php");
?>

<div class = "form">
    <h3>Регистрация</h3>
    <form method="POST">
        <input type="text" required name="login" placeholder="Логин"> 
        <input type="password" required name="password" placeholder="Пароль"> 
        <button type="submit" >Зарегистрироваться</button>

        <?php 
        if(!empty($_POST['login']) && !empty($_POST['password'])){

            $push = 'SELECT * FROM users WHERE login="'.$_POST["login"].'"';
            $input = mysqli_query($touring, $push);
            $row = mysqli_fetch_array($input);


                if($row['login'] == ""){

                    $pass = password_hash($_POST["password"], PASSWORD_DEFAULT);

                    $push = 'INSERT INTO `users` (`id`, `login`, `password`) VALUES (NULL, "'.$_POST["login"].'", "'.$pass.'");';
                    $input = mysqli_query($touring, $push);

                    $push = 'SELECT * FROM users WHERE login="'.$_POST["login"].'"';
                    $input = mysqli_query($touring, $push);
                    $row = mysqli_fetch_array($input);

                    $_SESSION['id'] = $row['id']; 
                    $_SESSION['admin'] = $row['is_admin']; 
                   
                   echo "<script>window.location.href='tours'</script>";
                }
                else{
                    echo "<p class='error'>Такой логин уже занят.</p>";
                }
        }
        ?>

    </form>
</div>

<?php
    include("temp/footer.php");
?>
