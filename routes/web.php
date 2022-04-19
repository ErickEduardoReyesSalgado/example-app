<?php

use App\Http\Controllers\TodosController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Arr;
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
    return view('welcome');
});

/*
Route::get('/saludos', function () {
    return view('app');
});
*/

Route::get('/tareas', function () {
    return view('todos.index');
});

Route::get('/tareas',[TodosController::class, 'index'])->name('todos');
Route::post('/tareas',[TodosController::class, 'store'])->name('todos');

Route::get('/tareas/{id}',[TodosController::class, 'show'])->name('todos-edit');
Route::patch('/tareas/{id}',[TodosController::class, 'update'])->name('todos-update');
Route::delete('/tareas/{id}',[TodosController::class, 'destroy'])->name('todos-destroy');

Route::resource('/categories', CategoriesController::class);

Route::get('/home', function(){
    return view('home', array('nombre' => 'Erick',
                              'apellidos'=>'Reyes',
                              'edad' => null,
                              'altura' =>null),
                            array('i'),
                            array('j'),
                        );

});

Route::get('/master', function () {
    return view('layouts.contenido');
});
/*
Route::get('/todos', function () {
    return view('app');
});
*/