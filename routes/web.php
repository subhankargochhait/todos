<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\todocontroller;

Route::get('/', [todocontroller::class,'index'])->name("todo.home");

Route::get('/create', function () {
    return view('create');
})->name("todo.create");


// Edit todo route
Route::get('/edit/{id}', [todocontroller::class,'edit'])->name("todo.edit");

// update todo data route
Route::post('/update',[todocontroller::class,'updateData'])->name("todo.updateData");

// Create todo route
Route::post('/create',[todocontroller::class,'store'])->name("todo.store");

// Delete todo route
Route::get('/delete/{id}',[todocontroller::class,'delete'])->name("todo.delete");
