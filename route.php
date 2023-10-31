<?php
    include("temp/db.php");

    if(empty($_SESSION['id'])){
        header('Location: index');
    }

    include("temp/header.php");
?>

<div class = "tours">
    <?php
        $push = 'SELECT * FROM `tour` where route = "'.$_GET['id'].'"';
        $input = mysqli_query($touring, $push);
        while($row = mysqli_fetch_array($input)){
    ?>

    <div class = "tour">
        <p><?php echo $row['name']; ?></p>
        <p><?php echo $row['price']; ?> руб.</p>
        <p><a href="tour?id=<?php echo $row['id']; ?>">Посмотреть</a><p>
    </div>

    <?php
        }
    ?>

</div>

<?php
    include("temp/footer.php");
?>