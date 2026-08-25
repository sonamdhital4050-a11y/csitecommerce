<?php
require_once 'header.php';
require_once 'connection.php';

if(!isset($_SESSION['auth'])){
    header("Location: login.php");

}

?>

<h1>
    Welcome to the Dashboard </h1>

    <a href="logout.php">Logout</a>

    <?php
    require_once 'footer.php';
    ?>