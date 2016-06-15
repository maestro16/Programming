@extends('layouts.app')

@section('content')

    <div class="col-lg-3">
      <h3>Добавление студента</h3>
        <form method="GET" action="/user">
          <input type="text" class="form-control" name="FIO" id="FIO" maxlength=30 size=30 placeholder="ФИО">
          <br>
          <input type="text" class="form-control" name="VUZ" id="VUZ" maxlength=30 size=30 placeholder="Вуз">
          <br>
          <input type="number" class="form-control" name="Course" id="Course" maxlength=1 size=1 placeholder="Курс">
          <br>
          <input type="tel" class="form-control" name="Phone" id="Phone" maxlength=10 size=10 placeholder="Телефон без 8">
          <br>
          <button type="submit" class="btn btn-success">Добавить</button><br>
        </form>
    </div>
@endsection
