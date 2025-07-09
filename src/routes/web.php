<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

/*新規会員登録 step1 */
Route::get('/register/step1',[AuthController::class, 'register']);
/*新規会員登録 step2 */
Route::get('/register/step2',[AuthController::class, 'register2']);
/*ログイン画面*/
Route::post('/login',[AuthController::class, 'login']);