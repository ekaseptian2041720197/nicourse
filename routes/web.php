<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LmsController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KursusController;


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

// Home
Route::get('/nicourse', [IndexController::class, 'index']);
Route::get('/notif', [NotifikasiController::class, 'index']);

// Login - Logout
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/registeruser', [UserController::class, 'storeuser']);
Route::get('/login', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('checkRole:admin');

//CRUD Admin
Route::get('/showadmin', [AdminController::class, 'showadmin'])->middleware('checkRole:admin');

Route::get('/addadmin', [AdminController::class, 'addadmin'])->middleware('checkRole:admin');
Route::post('/adminpost', [AdminController::class, 'storeadmin'])->middleware('checkRole:admin');

Route::get('/edit/{id}', [AdminController::class, 'edit'])->middleware('checkRole:admin');
Route::put('/update/{id}', [AdminController::class, 'update'])->middleware('checkRole:admin');

Route::get('/deleteadmin/{id}', [AdminController::class, 'delete'])->middleware('checkRole:admin');

Route::get('/user', function () {
    return view('user.index');
})->middleware('checkRole:user');

// Admin -> User
Route::get('/showuser', [UserController::class, 'showuser'])->middleware('checkRole:admin');
Route::get('/adduser', [UserController::class, 'adduser'])->middleware('checkRole:admin');
Route::get('/edituser/{id}', [UserController::class, 'edituser'])->middleware('checkRole:admin');
Route::put('/updateuser/{id}', [UserController::class, 'updateuser'])->middleware('checkRole:admin');
Route::get('/deleteuser/{id}', [UserController::class, 'delete'])->middleware('checkRole:admin');
Route::get('/verify', [LoginController::class, 'verify'])->middleware('checkRole:admin');
Route::get('/block', [LoginController::class, 'block'])->middleware('checkRole:admin');

// LMS
Route::get('/lms', [LmsController::class, 'index'])->middleware('checkRole:user');
Route::get('/notifedit', [NotifikasiController::class, 'indexedit']);
Route::get('/course', [LmsController::class, 'course']);

//Course
Route::get('/showkategori', [KategoriController::class, 'showkategori'])->middleware('checkRole:admin');

Route::post('/kategoripost', [KategoriController::class, 'storekategori'])->middleware('checkRole:admin');

Route::put('/updatekategori/{id}', [KategoriController::class, 'updatekategori'])->middleware('checkRole:admin');

Route::get('/deletekategori/{id}', [KategoriController::class, 'delete'])->middleware('checkRole:admin');

Route::get('/basic', [KursusController::class, 'basic'])->middleware('checkRole:admin');
Route::post('/basicpost', [KursusController::class, 'storebasic'])->middleware('checkRole:admin');

Route::get('/requirements', [KursusController::class, 'requirements'])->middleware('checkRole:admin');
Route::post('/requirementspost/{id}', [KursusController::class, 'updatekategori'])->middleware('checkRole:admin');

Route::get('/outcomes', [KursusController::class, 'outcomes'])->middleware('checkRole:admin');
Route::get('/pricing', [KursusController::class, 'pricing'])->middleware('checkRole:admin');
Route::get('/media', [KursusController::class, 'media'])->middleware('checkRole:admin');

// Multi Form
Route::get('/index', [KursusController::class, 'index'])->middleware('checkRole:admin');
