<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModuleController;
use Illuminate\Support\Facades\Route;

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

Route::get('/example', function () {
    return view('layouts.app-example');
});
Route::get('/', [HomeController::class, 'index']);
Route::get('/modules/{id}', [HomeController::class, 'show']);
