<?php
require_once 'inspection.php';
require_once 'connectBD.php';

$id = $_POST['id'];

 try {
    $sql = "DELETE FROM `u516131903_proj`.`Project` WHERE `id` = $id";
    $result = $dbh->prepare($sql) or die("ERROR: ".mysql_error());
    print("Запись удалена!");
    $result->bindValue(":id", $id);
    $result->execute();
      }
      catch (Exception $e) {
          print '<br>Ошибка:' . $e->getMessage(). '<br>';
      }
?>
