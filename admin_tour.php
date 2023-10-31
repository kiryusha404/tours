<?php
    include("temp/db.php");
    
    if(!empty($_SESSION['admin'] != 1)){
        header('Location: tours');
    }

    include("temp/header.php");
?>

<div class = "admin">

<div class = "form">
    <h3>Добавление турв</h3>
    <form method="POST" >
        <input type="text" required name="name" placeholder="Название"> 
        <input type="text" required name="price" placeholder="Цена тура"> 
        <select name = "route">
            <?php
                $push = 'SELECT * FROM `route`';
                $input = mysqli_query($touring, $push);
                while($row = mysqli_fetch_array($input)){
            ?>
            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
            <?php
                }
            ?>
        </select>
        <button type="submit">Добавить</button>
    </form>
</div>

<?php 
        if(!empty($_POST['name']) && !empty($_POST['price'])){

            $push = 'INSERT INTO `tour` (`id`, `name`, `price`, `route`) VALUES (NULL, "'.$_POST['name'].'", "'.$_POST['price'].'", "'.$_POST['route'].'");';
            $input = mysqli_query($touring, $push);

            echo "<script>window.location.href='admin'</script>";

        }
?>

</div>

<?php
    include("temp/footer.php");
?>
