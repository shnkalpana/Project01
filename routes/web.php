<?php

use App\Models\User;
use App\Http\Livewire\Loginform;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    $users = auth()->user();
    return view('index', ['users' => $users]);
});

Route::get('/admin', [AdminController::class, 'user_name']);


Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);
Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('user.destroy');
