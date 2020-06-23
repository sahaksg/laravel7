<?php

use Illuminate\Http\Client\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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
    // return \Config::get('database.connections.mysql.password');
    // dd (\Config::get('database.connections.mysql.password'));
    // dd (\Config::get('app.name'));
    // dd (env('APP_NAME'));
    // return env('database.connections.mysql.password');
    // return \Config::get('app.name');
    return view('welcome');
    // return View::make('welcome');
    // return "123";
});

Route::get('/test', 'UserController@index');
Route::post('/upload', function(HttpRequest $request){
    // dd($request->all());
    $request->image->store('images', 'public');
    return "File is uploaded!";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
