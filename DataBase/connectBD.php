<?php
$dbloc ="mysql.hostinger.ru";
$dbuser ="u516131903_ilia";
$dbpass ="password";
if ($_SERVER['SERVER_ADDR'] == "::1") {
    $dbloc ="localhost";
    $dbuser ="root";
    $dbpass ="";
};
$dsn = "mysql:host={$dbloc}";
$conn = new PDO($dsn, $dbuser, $dbpass);
$conn-> exec("SET CHARACTER SET utf8");
?>
