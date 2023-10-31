<?php
    include("temp/db.php");

    if(empty($_SESSION['id'])){
        header('Location: index');
    }

    include("temp/header.php");
?>

<div class ="top">
    <h4>Туры</h4>
</div>

<div class = "tours">
    <?php
        $push = 'SELECT tour.name, tour.price, count(tour.id) as count, tour.id FROM `orders` join tour on orders.tour = tour.id GROUP BY tour.name, tour.price ORDER BY `count` DESC';
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

<div class ="top">
    <h4>Маршруты</h4>
</div>

<div class = "tours">
    <?php
        $push = 'SELECT route.name, route.length, count(route.id) as count, route.id FROM `orders` join tour on orders.tour = tour.id join route on tour.route = route.id GROUP BY route.name, route.length ORDER BY `count` DESC';
        $input = mysqli_query($touring, $push);
        while($row = mysqli_fetch_array($input)){
    ?>

    <div class = "tour">
        <p><?php echo $row['name']; ?></p>
        <p><?php echo $row['length']; ?> метров</p>
        <p><a href="route?id=<?php echo $row['id']; ?>">Посмотреть</a><p>
    </div>

    <?php
        }
    ?>

</div>
<?php
    include("temp/footer.php");
?>