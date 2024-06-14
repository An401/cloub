<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ComunidadeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassroomController;


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'admin'])->group(function () {
    
    Route::get('/', [HomeController::class, 'index'])->name('admin/dashboard');
    Route::get('/comunidade', [HomeController::class, 'comunidade'])->name('admin/comunidade');

    Route::get('/admin/teachers', [TeacherController::class, 'index'])->name('teachers.index');
    Route::get('/admin/teachers/create', [TeacherController::class, 'create'])->name('teachers.create');
    Route::post('/admin/teachers/store', [TeacherController::class, 'store'])->name('teachers.store');
    Route::get('/admin/teachers/edit/{id}', [TeacherController::class, 'edit'])->name('teachers.edit');
    Route::put('/admin/teachers/edit/{id}', [TeacherController::class, 'update'])->name('teachers.update');
    Route::get('/admin/teachers/delete/{id}', [TeacherController::class, 'delete'])->name('teachers.destroy');
    
    
    Route::resource('students', TeacherController::class);

    Route::get('/admin/books', [BookController::class, 'index'])->name('books.index');
    Route::get('/admin/books/create', [BookController::class, 'create'])->name('books.create');
    Route::post('/admin/books/store', [BookController::class, 'store'])->name('books.store');
    Route::get('/admin/books/edit/{id}', [BookController::class, 'edit'])->name('books.edit');
    Route::put('/admin/books/edit/{id}', [BookController::class, 'update'])->name('books.update');
    Route::get('/admin/books/delete/{id}', [BookController::class, 'delete'])->name('books.destroy');

    Route::get('/admin/classrooms', [ClassroomController::class, 'index'])->name('classrooms.index');
    Route::get('/admin/classrooms/create', [ClassroomController::class, 'create'])->name('classrooms.create');
    Route::post('/admin/classrooms/store', [ClassroomController::class, 'store'])->name('classrooms.store');
    Route::get('/admin/classrooms/edit/{id}', [ClassroomController::class, 'edit'])->name('classrooms.edit');
    Route::put('/admin/classrooms/edit/{id}', [ClassroomController::class, 'update'])->name('classrooms.update');
    Route::get('/admin/classrooms/delete/{id}', [ClassroomController::class, 'delete'])->name('classrooms.destroy');

});

require __DIR__.'/auth.php';

//Route::get('admin/dashboard', [HomeController::class,'index']);
//Route::get('admin/dashboard', [HomeController::class,'index'])->middleware(['auth', 'admin']);x