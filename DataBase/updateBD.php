<?php
require_once 'inspection.php';
require_once 'connectBD.php';

$id = trim(stripcslashes(htmlspecialchars($_POST['id'])));
$FIO = trim(stripcslashes(htmlspecialchars($_POST['FIO'])));
$Vuz = trim(stripcslashes(htmlspecialchars($_POST['Vuz'])));
$Course = trim(stripcslashes(htmlspecialchars($_POST['Course'])));
$Phone = trim(stripcslashes(htmlspecialchars($_POST['Phone'])));

$sql = "UPDATE `u516131903_proj`.`Project` SET `FIO` = '{$FIO}', `Vuz` = '{$Vuz}', `Course` = {$Course}, `Phone` = {$Phone} WHERE `Project`.`id`={$id}";
$result = $dbh->prepare($sql) or die("ERROR: ".mysql_error());
$result->execute();
?>
