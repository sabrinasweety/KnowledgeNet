<?php



use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\UnpaidcourseController;
use App\Http\Controllers\Backend\PaidcourseController;
use App\Http\Controllers\Backend\TeacherController;
use App\Http\Controllers\Backend\StudentController;
use App\Http\Controllers\Backend\BookController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\Frontend\CustomerController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


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
Route::get('/',[FrontendHomeController::class, 'home'])->name('home');
Route::get('/registration',[CustomerController::class,'registration'])->name('customer.registration');
Route::post('/registration/store',[CustomerController::class,'store'])->name('customer.store');
Route::get('/login',[CustomerController::class,'login'])->name('customer.login');
Route::post('/dologin',[CustomerController::class,'dologin'])->name('customer.dologin');
Route::group(['middleware'=>'auth'],function(){
Route::get('/logout',[CustomerController::class,'logout'])->name('customer.logout');});

















Route::group(['prefix'=>'admin'],function(){
Route::get('/login',[UserController::class,'loginForm'])->name('admin.login');
Route::post('/login-form-post',[UserController::class,'loginPost'])->name('admin.login.post');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout',[UserController::class, 'logout'])->name('admin.logout');

Route::get('/', [HomeController::class,'home'])->name('dashboard');
Route::get('/unpaid/list',[UnpaidcourseController::class,'list'])->name('unpaid.list');
Route::get('/unpaid/form',[UnpaidcourseController::class,'createform'])->name('unpaidcourse.form');
Route::post('/unpaid/store',[UnpaidcourseController::class,'store'])->name('unpaid.store');
Route::get('/paid/list',[PaidcourseController::class,'list'])->name('paid.list');
Route::get('/paid/form',[PaidcourseController::class,'createform'])->name('paidcourse.form');
Route::post('/paid/store',[PaidcourseController::class,'store'])->name('paid.store');
Route::get('/teacher/list',[TeacherController::class,'list'])->name('teacher.list');
Route::get('/teacher/delete/{id}',[TeacherController::class,'delete'])->name('teacher.delete');
Route::get('/teacher/edit/{id}',[TeacherController::class,'edit'])->name('teacher.edit');
Route::put('/teacher/update/{id}',[TeacherController::class,'update'])->name('teacher.update');
Route::get('/teacher/form',[TeacherController::class,'createform'])->name('teacher.form');
Route::post('/teacher/store',[TeacherController::class,'store'])->name('teacher.store');
Route::get('/student/list',[StudentController::class,'list'])->name('student.list');
Route::get('/student/form',[StudentController::class,'createform'])->name('student.form');
Route::post('/student/store',[StudentController::class,'store'])->name('student.store');
Route::get('/book/list',[BookController::class,'list'])->name('book.list');
Route::get('/book/form',[BookController::class,'createform'])->name('book.form');
Route::post('/book/store',[BookController::class,'store'])->name('book.store');
Route::get('/users/list',[UserController::class,'list'])->name('users.list');
Route::get('/users/form',[UserController::class,'form'])->name('users.form');
Route::post('/users/store',[UserController::class,'store'])->name('users.store');

});
});