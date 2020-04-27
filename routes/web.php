<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');


/*Route::get('/hola/{nombre?}', function($nombre = "Keren") {
    return "Hola $nombre conocenos: <a href='". route("nosotros") ."'>nosotros</a>";
});


Route::get('/sobre-nosotros', function() {
    return "<h1>Toda la informacion sobre nosotros</h1>";
})->name("nosotros");



Route::get('home/{nombre?}/{apellido?}', function($nombre = "Keren", $apellido = "Medina") {
    //return view("home")->with("nombre", $nombre)->with("apellido", $apellido);

    $posts= ["Post1", "Post2", "Post3", "Post4"];

    return view("home", ["nombre" =>$nombre, "apellido" => $apellido, "posts" => $posts]);
})->name("home");*/



Route::resource('dashboard/post', 'dashboard\PostController');
Route::post('dashboard/post/{post}/image', 'dashboard\PostController@image')->name('post.image');

Route::resource('dashboard/category', 'dashboard\CategoryController');

Route::resource('dashboard/user', 'dashboard\UserController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
