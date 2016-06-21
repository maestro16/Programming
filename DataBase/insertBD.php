<?php
require_once 'inspection.php';
require_once 'connectBD.php';

if(
!empty($_POST['FIO']) &&
!empty($_POST['Vuz']) &&
!empty($_POST['Course']) &&
!empty($_POST['Phone'])
)
 {
  try {
    $FIO = trim(stripcslashes(htmlspecialchars($_POST['FIO'])));
    $Vuz = trim(stripcslashes(htmlspecialchars($_POST['Vuz'])));
    $Course = trim(stripcslashes(htmlspecialchars($_POST['Course'])));
    $Phone = trim(stripcslashes(htmlspecialchars($_POST['Phone'])));
    $sql = "INSERT INTO `u516131903_proj`.`Project` (`FIO`, `Vuz`, `Course`, `Phone`) VALUES (?,?,?,?)";
    $dba = $dbh->prepare($sql) or die("ERROR: ".mysql_error());
    $result = $dba->execute(array($FIO,$Vuz,$Course,$Phone))or die("ERROR: ".mysql_error());
    print('Запись добавлена!');
  }
  catch (Exception $e) {
      echo '<br>Ошибка:' . $e->getMessage(). '<br>';
  }
}
  else{
    print('Заполните все строки!');
  }
?>
