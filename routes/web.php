<?php

use App\Models\User;
use App\Http\Livewire\Loginform;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BomController;
use App\Http\Controllers\PartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AssembleController;
use App\Http\Controllers\SupplierController;
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

Route::get('/designer', [TasksController::class, 'designer']);

Route::get('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);
//Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('user.destroy');
//Route::get('users/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
//Route::put('users/{id}', [UserController::class, 'update']);
Route::resource('user', UserController::class);

//CRUD routes for projects
Route::resource('/projects', ProjectController::class);

//CRUD routes for subprojects
Route::resource('/subprojects', SubProjectController::class);

//CRUD routes for tasks
Route::resource('/tasks', TasksController::class);

//CRUD routes for suppliers
Route::resource('/suppliers', SupplierController::class);


//CRUD routes for parts
Route::resource('/parts', PartController::class);


//CRUD routes for assembles
Route::resource('/assembles', AssembleController::class);

//CRUD routes for boms
Route::resource('/boms', BomController::class);
