<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
//     return view('welcome');
// });

Route::get('/ticket', [HomeController::class, 'index']);
Route::get('/cart', [HomeController::class, 'cart']);
Route::post('/checkout', [HomeController::class, 'store']);
Route::get('/signin', [HomeController::class, 'signin']);
Route::get('/signup', [HomeController::class, 'signup']);
Route::get('/', [HomeController::class, 'home']);
Route::get('/home', [HomeController::class, 'homepage']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::group(['middleware'=>'auth:sanctum'],  function  ()  {
     Route::resource('admin',  AdminController::class);
     });
require __DIR__.'/auth.php';