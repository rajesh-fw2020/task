<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;



// use App\Http\Controllers\taskController;


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

Route::match(['get', 'post'], 'season', [App\Http\Controllers\seasonController::class, 'getSeason']);

Route::match(['get', 'post'], 'calculator', [App\Http\Controllers\calculatorController::class, 'calculateInstruction']);