<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Home',[
        "title" => "Home"
    ]);
});

Route::get('/Home', function () {
    return view('Home',[
        "title" => "Home"
    ]);
});

Route::get('/121', [ArtikelController::class, 'index']);

Route::get('/12many', function () {
    return view('one2many',[
        "title" => "OneToMany"
    ]);
});
