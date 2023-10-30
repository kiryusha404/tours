<?php
    include("temp/db.php");
    
    if(!empty($_SESSION['id'])){
        header('Location: tours');
    }

    include("temp/header.php");
?>
<div class = "form">
    <h3>Авторизация</h3>
    <form method="POST" >
        <input type="text" required name="login" placeholder="Логин"> 
        <input type="password" required name="password" placeholder="Пароль"> 
        <button type="submit" class="">Войти</button>

        <?php 
        if(!empty($_POST['login']) && !empty($_POST['password'])){

            $push = 'SELECT * FROM users WHERE login="'.$_POST["login"].'"';
            $input = mysqli_query($touring, $push);
            $row = mysqli_fetch_array($input);

                if(password_verify($_POST['password'], $row['password'])){

                   $_SESSION['id'] = $row['id']; 
                   
                   echo "<script>window.location.href='tours'</script>";
                }
                else{
                    echo "<p class='error'>Неверный логин или пароль.</p>";
                }
        }
        ?>

    </form>
</div>

<?php
    include("temp/footer.php");
?>
