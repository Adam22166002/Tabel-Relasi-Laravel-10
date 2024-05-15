<?php

use App\Http\Controllers\BankController;
use App\Http\Controllers\SessionController;
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

// Route::get('/', function () {
//     return view('sesi.login');
// });

Route::resource('/data', BankController::class);

Route::get('/login', [SessionController::class,'index']);
Route::post('/proses_login', [SessionController::class, 'proses_login']);

Route::get('/pendaftaran', [SessionController::class,'pendaftaran']);
Route::post('/proses_pendaftaran', [SessionController::class, 'proses_pendaftaran']);

Route::get('/logout', [SessionController::class, 'logout']);

Route::get('/reports/users', 'ReportController@generateUserReport')->name('user.report');