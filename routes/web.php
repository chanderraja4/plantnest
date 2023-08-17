<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PlantsController;
use App\Http\Controllers\SliderController;

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

// Plants Routes
Route::get('plants', [PlantsController::class, 'index'])->name('plants.index');
Route::get('plants/addpage', [PlantsController::class, 'plantaddpage']);
Route::get('plants/add', [PlantsController::class, 'addplant']);
// Slider Routes
Route::get('sliders', [SliderController::class, 'index'])->name('sliders.index');


Route::group(['prefix'=>'admin','midddleware'=>['admin:admin']], function(){
    Route::get('login', [AdminController::class, 'loginForm']);
    Route::post('login', [AdminController::class, 'store'])->name('admin.login');
});



Route::get('/', function(){
    return view('welcome');
});

Route::middleware([
    'auth:sanctum,admin',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('admin/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});


Route::middleware([
    'auth:sanctum,web',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});