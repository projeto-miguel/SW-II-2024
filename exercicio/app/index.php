<?php
    session_start();

    if(!isset($_SESSION['user'])){
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<?php include './shared/head.php' ?>

<body>
    <?php include './shared/header.php' ?>
</body>
</html>