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
    $FIO = trim(stripcslashes(htmlspecialchars($_POST['FIO'])));
    $Vuz = trim(stripcslashes(htmlspecialchars($_POST['Vuz'])));
    $Course = trim(stripcslashes(htmlspecialchars($_POST['Course'])));
    $Phone = trim(stripcslashes(htmlspecialchars($_POST['Phone'])));
    $sql = "INSERT INTO `u516131903_proj`.`Project` (`FIO`, `Vuz`, `Course`, `Phone`) VALUES (:FIO, :Vuz, :Course, :Phone)";
    $result = $dbh->prepare($sql) or die("ERROR: ".mysql_error());
    $result->bindValue(":FIO", $FIO);
    $result->bindValue(":Vuz", $Vuz);
    $result->bindValue(":Course", $Course);
    $result->bindValue(":Phone", $Phone);
    $message = 'Data saved: ' . $result->execute();
    print('Запись добавлена!');
  }else{
  print('Заполните все строки!');
}
?>
