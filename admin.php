<?php
    include("temp/db.php");
    
    if(!empty($_SESSION['admin'] != 1)){
        header('Location: tours');
    }

    include("temp/header.php");
?>

<div class = "admin">

    <a href="admin_tour"><h2>Добавить тур</h2></a>
    <a href="admin_route"><h2>Добавить маршрут</h2></a>

</div>

<?php
    include("temp/footer.php");
?>
