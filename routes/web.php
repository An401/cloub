<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeacherController;

//Route::get('/', function () {
    //return view('welcome');
//});

// Route::get('/', function () {
//     return view('admin/dashboard');
// })->middleware(['auth', 'verified'])->name('admin/dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('admin/dashboard');
    

    Route::get('/admin/teachers', [TeacherController::class, 'index'])->name('teachers.index');
    Route::get('/admin/teachers/create', [TeacherController::class, 'create'])->name('teachers.create');
    Route::post('/admin/teachers/store', [TeacherController::class, 'store'])->name('teachers.store');
    Route::get('/admin/teachers/edit/{id}', [TeacherController::class, 'edit'])->name('teachers.edit');
    Route::put('/admin/teachers/edit/{id}', [TeacherController::class, 'update'])->name('teachers.update');
    Route::get('/admin/teachers/delete/{id}', [TeacherController::class, 'delete'])->name('teachers.destroy');
    
    
    Route::resource('students', TeacherController::class);



});

require __DIR__.'/auth.php';

//Route::get('admin/dashboard', [HomeController::class,'index']);
//Route::get('admin/dashboard', [HomeController::class,'index'])->middleware(['auth', 'admin']);