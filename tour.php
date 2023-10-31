<?php
    include("temp/db.php");

    if(empty($_SESSION['id'])){
        header('Location: index');
    }

    include("temp/header.php");

    $id = $_GET['id'];

    $push = 'SELECT tour.name, tour.price, route.name as route, route.length FROM tour JOIN route on tour.route = route.id where tour.id = "'.$id.'"';
    $input = mysqli_query($touring, $push);
    $row = mysqli_fetch_array($input);

?>

<div class = "tours">

    <h2><?php echo $row['name']; ?></h2>
    <p>Цена: <?php echo $row['price']; ?> руб.</p>
    <p>Маршрут: <?php echo $row['route']; ?></p>
    <p>Длина маршрута: <?php echo $row['length']; ?> метров<p>
    <a href="block?id=<?php echo $id; ?>" >Забронировать</a>
</div>

<?php
    include("temp/footer.php");
?>