<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

Route::get('students', [StudentController::class, 'index'])->name('student.listing');
Route::get('students/add', [StudentController::class, 'create'])->name('student.create');
Route::post('students/store', [StudentController::class, 'store'])->name('student.store');
Route::get('students/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::patch('students/update/{id}', [StudentController::class, 'update'])->name('student.update');
Route::delete('students/delete/{id}', [StudentController::class, 'delete'])->name('student.delete');
Route::get('/file-upload', function () {  
    return view('form');  
});  
