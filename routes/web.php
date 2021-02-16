<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
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
/*** Praktikum 1 */
// Route::get('/', function () {
//     echo "Selamat Datang";
// });
// Route::get('/about', function () {
//     echo "Nama : Tita Wijayanti, Nim : 1941720053";
// });
// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman Artikel dengan id '.$id;
// });

/***Praktikum 2 */
Route::get('/',  [HomeController::class,'index']);
Route::get('/about',  [AboutController::class,'about']);
Route::get('/articles/{id}',  [ArticleController::class,'articles']);
