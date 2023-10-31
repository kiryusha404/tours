<?php
    include("temp/db.php");

    if(empty($_SESSION['id'])){
        header('Location: index');
    }

    include("temp/header.php");
?>



<?php
    include("temp/footer.php");
?>