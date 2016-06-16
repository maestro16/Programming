<?php
require_once 'inspection.php';
require_once 'ClassDataBase/connectBD.php';

$sql = "SELECT * FROM `u516131903_proj`.`Project`";
$result = $conn -> query($sql);
print '
<br><br>
<div id="main">
<div class="col-lg-8">
<div class="panel panel-primary">
<div class="panel-heading">База студентов</div>
<table class="table"><tr><th>ID</th><th>ФИО</th><th>ВУЗ</th><th>Курс</th><th>Телефон<th></tr>';
while ($row = $result->fetch(PDO::FETCH_ASSOC)){
    print "<tr>";
    echo "<td> $row[id] </td>";
    echo "<td> $row[FIO] </td>";
    echo "<td> $row[Vuz] </td>";
    echo "<td> $row[Course] </td>";
    echo "<td> $row[Phone] </td>";
    print "</tr>";
}
print "</table>
    </div>
  </div>
</div>";
?>
