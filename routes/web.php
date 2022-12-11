<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputerController;
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

Route::get('/', [ComputerController::class, 'index']);
Route::get('/add', [ComputerController::class, 'create']);
Route::get('/edit/{id}', [ComputerController::class, 'edit']);
Route::post('/store', [ComputerController::class, 'store']);
Route::patch('/update/{id}', [ComputerController::class, 'update']);