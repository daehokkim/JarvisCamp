<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index');
});

// route untuk menampilkan halaman daftar tugas
Route::get('/tasks', [TaskController::class, 'index']);

// route untuk menampilkan detail tugas
Route::get('/detail', [TaskController::class, 'detail'])->name('task.detail');




