<?php
require_once 'inspection.php';
require_once 'connectBD.php';


$FIO = $_POST['FIO'];
$Vuz = $_POST['Vuz'];
$Course = $_POST['Course'];
$Phone = $_POST['Phone'];

//$sqlstring = "INSERT INTO `Project`.`u516131903_proj` (id, FIO, Vuz, Course, Phone) VALUES(:id, :FIO, :Vuz, :Course, :Phone)";
$sql = "INSERT INTO `u516131903_proj`.`Project` (`FIO`, `Vuz`, `Course`, `Phone`) VALUES (:FIO, :Vuz, :Course, :Phone)";
$result = $conn->prepare($sql);
$result->bindValue(":FIO", $FIO);
$result->bindValue(":Vuz", $Vuz);
$result->bindValue(":Course", $Course);
$result->bindValue(":Phone", $Phone);
$message = 'Data saved: ' . $result->execute();
$conn->lastInsertId();

?>
