<?php
// connect with phpmyadmin

session_start();

$con = mysqli_connect('localhost','root'); // username=root

mysqli_select_db($con,'abc_db'); //abc_db=database name in phpmyadmin


?>

<?php require('connection.php'); ?>