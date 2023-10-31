<?php
    include("temp/db.php");
    
    if(!empty($_SESSION['admin'] != 1)){
        header('Location: tours');
    }

    include("temp/header.php");
?>

<div class = "admin">

<div class = "form">
    <h3>Добавление маршрута</h3>
    <form method="POST" >
        <input type="text" required name="name" placeholder="Название"> 
        <input type="text" required name="length" placeholder="Длина маршрута"> 
        <button type="submit" >Добавить</button>



    </form>
</div>

<?php 
        if(!empty($_POST['name']) && !empty($_POST['length'])){

            $push = 'INSERT INTO `route` (`id`, `name`, `length`) VALUES (NULL, "'.$_POST['name'].'", "'.$_POST['length'].'");';
            $input = mysqli_query($touring, $push);

            echo "<script>window.location.href='admin'</script>";

        }
        ?>

</div>

<?php
    include("temp/footer.php");
?>
