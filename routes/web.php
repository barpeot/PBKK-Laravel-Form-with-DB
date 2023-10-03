<?php

<<<<<<< HEAD
use App\Http\Controllers\FormController;
=======
use App\Http\Controllers\SomethingController;
>>>>>>> d961848d9376985ccb3a3d90d392f9d0dfdaee12
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

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/form', [FormController::class, 'index']);

Route::post('/form', [FormController::class, 'show']);

Route::get('/result', [FormController::class, 'result']);

Route::post('/result', [FormController::class, 'reset']);
=======
Route::get('/about', function () {
    return view('about');
});

Route::get('/test/{angka}', [SomethingController::class, 'display']);
>>>>>>> d961848d9376985ccb3a3d90d392f9d0dfdaee12
