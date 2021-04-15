<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
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

Route::get('/', [ExamController::class,'Index']);
Route::get('/admin/123456IB', [ExamController::class,'getalldata']);
Route::post('/exam-sub', [ExamController::class,'Insertexam'])->name('sub');
Route::get('/delete/{id}', [ExamController::class,'deleteExam'])->name('Examdelete');
Route::get('/exam/{id}', [ExamController::class,'getExambyid'])->name('getExambyid');
