@extends('layouts.app')

@section('content')

  <h1>Add user</h1>
    <div>
      <form method="POST" action="/user">
        <input type="text" name="FIO" id="FIO" maxlength=30 size=30 placeholder="ФИО">
        <br><br>
        <input type="text" name="VUZ" id="VUZ" maxlength=30 size=30 placeholder="Вуз">
        <br><br>
        <input type="text" name="Course" id="Course" maxlength=1 size=1 placeholder="Курс">
        <br><br>
        <input type="text" name="Phone" id="Phone" maxlength=10 size=10 placeholder="Телефон">
        <br><br>
        <input type="submit"><br>
      </form>
    </div>

@endsection
