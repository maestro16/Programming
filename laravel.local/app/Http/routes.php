<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\User;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::resource('users', 'UsersController');

Route::get('/', function () {
    return view('welcomeS');
});
//Форма для добавления
Route::get('/users', function () {
    return view('users');
});
//Форма для добавления
Route::get('/author', function () {
    return view('author');
});
// Отображение текущего пользователя
Route::get('/user/{id}', function () {
    //
});
// Добавление нового пользователя
Route::get('/user', function (Request $request) {
    $user = new User;
    $user->FIO = $request->FIO;
    $user->VUZ = $request->VUZ;
    $user->Course = $request->Course;
    $user->Phone = $request->Phone;

    $user->save();

    return redirect('/');
});
// Удаление текущего пользователя
Route::delete('/user/{id}', function () {
    //
});
