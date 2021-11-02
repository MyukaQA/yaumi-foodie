<?php

use App\Models\Menu;
use Illuminate\Support\Facades\Crypt;
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
    $data = Menu::data();

    return view('index',compact('data'));
})->name('menu');

Route::get('/menu/show/{id}', function ($id) {
    $id = Crypt::decrypt($id);
    $menu = Menu::findId($id);

    return view('show',compact('menu'));
})->name('menu.show');

