<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CoursesController;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [IndexController::class,'index']);

Route::get('/epreuve', [ExamsController::class,'index']);

Route::get('/cours', [CoursesController::class,'index']);

Route::get('/detail/{type}/{id}', [DetailController::class,'detail']);



Route::get('/contact', function () {
    return view('contact');
});

Route::get('/apropos', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});
 
Route::get('/signin', function () {
    return view('signin');
});

Route::get('/add-epreuve', function () {
    return view('addEpreuve');
});

Route::get('/add-cours', function () {
    return view('addCours');
});
