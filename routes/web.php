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



use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\UsersController;
/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/home', [StaticPagesController::class, 'home'])->name('home');
Route::get('/help', [StaticPagesController::class, 'help'])->name('help');
Route::get('/about', [StaticPagesController::class, 'about'])->name('about');
Route::get('/signup', [UsersController::class, 'create'])->name('signup');
Route::resource('users',UsersController::class);
//Route::get('login', [SessionsController::class, 'create'])