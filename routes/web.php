<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactController;
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
// Route::get('/',  [PageController::class,'index']);
// Route::get('/about',  [PageController::class,'about']);
// Route::get('/articles/{id}',  [PageController::class,'articles']);

// Route::get('/',  [HomeController::class,'index']);
// Route::get('/about',  [AboutController::class,'about']);
// Route::get('/articles/{id}',  [ArticleController::class,'articles']);


// Route::prefix('category')->group(function () {
//     Route::get('/{id}', [ProductsController::class,'product']);
//    });

// Route::get('{id}', function($id) {
//     return '<a href="https://www.educastudio.com/'.$id.'">https://www.educastudio.com/'.$id.'</a>';
// });
// Route::get('/news/{id}', function($id) {
//     return '<a href="https://www.educastudio.com/news/'.$id.'">https://www.educastudio.com/news/'.$id.'</a>';
// });

Route::prefix('program')->group(function () {
    Route::get('/{id}', [ProgramController::class,'program']);
});

Route::get('/about-us', function(){
    return '<a href="https://www.educastudio.com/about-us">https://www.educastudio.com/about-us</a>';
});

Route::resource('contact', ContactController::class);
