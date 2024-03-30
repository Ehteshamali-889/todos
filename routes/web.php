<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todoController;

Route::get('/', [todoController::class, 'index'])->name("todo.home");
Route::get('/create', function () {
    return view('createIndex');
})->name("todo.create");
Route::get('/edit/{id}', [todoController::class, 'edit'])->name("todo.edit");


Route::post('/create-Todo',[todoController::class, 'createTodo'])->name("todo.createTodo");
Route::post('/update-Todo',[todoController::class, 'updateTodo'])->name("todo.updateTodo");
Route::get('/delete/{id}',[todoController::class, 'delete'])->name("todo.delete");