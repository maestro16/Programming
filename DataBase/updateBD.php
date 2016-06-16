<?php
require_once 'inspection.php';
require_once 'connectBD.php';

$id = $_POST['id'];
$FIO = $_POST['FIO'];
$Vuz = $_POST['Vuz'];
$Course = $_POST['Course'];
$Phone = $_POST['Phone'];

$sql = "UPDATE `u516131903_proj`.`Project` SET `FIO` = '{$FIO}', `Vuz` = '{$Vuz}', `Course` = {$Course}, `Phone` = {$Phone} WHERE `Project`.`id`={$id}";
$result = $conn->prepare($sql);
$result->execute();
?>
