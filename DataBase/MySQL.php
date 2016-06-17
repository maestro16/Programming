<?php
require_once 'inspection.php';
require_once 'connectBD.php';
?>
<html>
<head>
    <title>База данных</title>
    <meta charset="utf-8">
    <script src="../../js/jquery-2.1.4.min.js"></script>
    <script src="js/MySQL.js"></script>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
	  <script src="js/bootstrap.min.js"></script>
    <link href="css/MySQL.css" rel="stylesheet">
</head>
<body>
  <!-- /.modal -->
  <div id="insert" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Введите данные</h4>
      </div>
      <div class="modal-body">
        <form id="forma">
            <input type="text" class="form-control" name="FIO" maxlength=30 size=30 placeholder="ФИО">
            <br>
            <input type="text" class="form-control" name="Vuz" maxlength=30 size=30 placeholder="Вуз">
            <br>
            <input type="text" class="form-control" name="Course" maxlength=1 size=1 placeholder="Курс">
            <br>
            <input type="text" class="form-control" name="Phone" maxlength=10 size=10 placeholder="Телефон">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
        <button type="button" id="in" class="btn btn-primary">Добавить</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  <!-- /.modal -->
  <!-- /.modal -->
  <div id="update" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Введите данные</h4>
      </div>
      <div class="modal-body">
        <form id="forma2">
            <input type="text" class="form-control" name="id_u" maxlength=3 size=2 placeholder="ID">
             <br>
            <input type="text" class="form-control" name="FIO_u" maxlength=30 size=30 placeholder="ФИО">
            <br>
            <input type="text" class="form-control" name="Vuz_u" maxlength=30 size=30 placeholder="Вуз">
            <br>
            <input type="text" class="form-control" name="Course_u" maxlength=1 size=1 placeholder="Курс">
            <br>
            <input type="text" class="form-control" name="Phone_u" maxlength=10 size=10 placeholder="Телефон">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
        <button type="button" id="up" class="btn btn-primary">Изменить</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  <!-- /.modal -->
  <!-- /.modal -->
  <div id="delete" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Введите ID</h4>
      </div>
      <div class="modal-body">
        <form id="forma3">
            <input type="number" class="form-control" name="id" maxlength=3 size=2 placeholder="ID">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
        <button type="button" id="del" class="btn btn-primary">Удалить</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  <!-- /.modal -->
  <form id="logout" action="logout.php">
    <button class="btn btn-danger">Выход</button>
  </form>
  <div id="menu" class="col-lg-6">
    <div class="btn-group btn-group-justified">
      <div class="btn-group">
        <button type="button" class="btn btn-default" class="btn btn-primary" data-toggle="modal" data-target="#insert">Добавить</button>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-default" class="btn btn-primary" data-toggle="modal" data-target="#update">Изменить</button>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-default" class="btn btn-primary" data-toggle="modal" data-target="#delete">Удалить</button>
      </div>
    </div>
  </div>
  <?php

  $sql = "SELECT * FROM `u516131903_proj`.`Project`";
  $result = $dbh->query($sql);
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
</body>
</html>
