<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Register2Controller;
use App\Http\Controllers\UpdateController;
use App\Models\Register;

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

// RegisterController
// /register/step1 にアクセスでregisterアクション
Route::get('/register/step1', [RegisterController::class, 'register']);
// 追加機能
Route::get('/register/step1', [RegisterController::class, 'create']);
Route::post('/register/step1', [RegisterController::class, 'store']);
// Route::post('/register/step1', [RegisterController::class, 'create']);

// /login にアクセスでloginアクション
Route::get('/login', [RegisterController::class, 'login']);

// //weight_logs にアクセスでindexアクション
Route::get('/weight_logs', [RegisterController::class, 'index']);

// Register2Controller
// /register/step2 にアクセスでregister2アクション
Route::get('/register/step2', [Register2Controller::class, 'register2']);
// 追加機能
Route::post('register/step2', [Register2Controller::class, 'create']);

// UpdateController
// /weight_logs/{:weightLogId}/update にアクセスでindexアクション
Route::get('/weight_logs/{:weightLogId}/update', [UpdateController::class, 'index']);