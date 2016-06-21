<?php
require_once 'inspection.php';
require_once 'connectBD.php';

$id = $_POST['id'];


$sql = "DELETE FROM `u516131903_proj`.`Project` WHERE `id` = $id";
$result = $conn->prepare($sql);
$result->bindValue(":id", $id);
echo $result->execute();

$conn->lastInsertId();

?>
