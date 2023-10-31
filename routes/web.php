<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UnpaidcourseController;
use App\Http\Controllers\PaidcourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CustomerController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'home']);
Route::get('/unpaid/list',[UnpaidcourseController::class,'list'])->name('unpaid.list');
Route::get('/unpaid/form',[UnpaidcourseController::class,'createform']);
Route::post('/unpaid/store',[UnpaidcourseController::class,'store'])->name('unpaid.store');
Route::get('/paid/list',[PaidcourseController::class,'list'])->name('paid.list');
Route::get('/paid/form',[PaidcourseController::class,'createform']);
Route::post('/paid/store',[PaidcourseController::class,'store'])->name('paid.store');
Route::get('/teacher/list',[TeacherController::class,'list'])->name('teacher.list');
Route::get('/teacher/form',[TeacherController::class,'createform']);
Route::post('/teacher/store',[TeacherController::class,'store'])->name('teacher.store');
Route::get('/student/list',[StudentController::class,'list'])->name('student.list');
Route::get('/student/form',[StudentController::class,'createform']);
Route::post('/student/store',[StudentController::class,'store'])->name('student.store');
Route::get('/book/list',[BookController::class,'list'])->name('book.list');
Route::get('/book/form',[BookController::class,'createform']);
Route::post('/book/store',[BookController::class,'store'])->name('book.store');
Route::get('/customer/form',[CustomerController::class,'form'])->name('customer.form');

