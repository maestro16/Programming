<?php
require_once 'inspection.php';
require_once 'connectBD.php';

$id = $_POST['id'];
$search_id = "SELECT * FROM `u516131903_proj`.`Project` WHERE `id` = ?";
$dba = $dbh->prepare($search_id);
$result = $dba->execute(array($id))or die("ERROR: ".mysql_error());
$row = $dba->fetch(PDO::FETCH_ASSOC);
if(!empty($row['id']))
 {
 try {
    $sql = "DELETE FROM `u516131903_proj`.`Project` WHERE `id` = $id";
    $result = $dbh->query($sql) or die("ERROR: ".mysql_error());
    print("Запись удалена!");
      }
      catch (Exception $e) {
          print '<br>Ошибка:' . $e->getMessage(). '<br>';
      }
    }
else {
  print ('id=' . $id . ' не существет!');
}
?>
