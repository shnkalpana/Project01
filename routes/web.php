<?php

use App\Models\User;
use App\Http\Livewire\Loginform;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SubProjectController;

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

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/project_manager', function () {
    return view('project_manager');
});


Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);
Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('user.destroy');


//sub projects crud operations routes
Route::resource('/subprojects', SubProjectController::class);
//Route::get('/subprojects/create', [SubProjectController::class, 'create']);
//Route::get('/subprojects', [SubProjectController::class, 'index']);
// Route::post('subprojects', [SubProjectController::class, 'store']);
// Route::get('subprojects/{id}/edit', [SubProjectController::class, 'edit']);
// Route::put('subprojects/{id}', [SubProjectController::class, 'update']);
// Route::delete('subprojects/{id}', [SubProjectController::class, 'destroy']);
