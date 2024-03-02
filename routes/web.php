<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CostumerController;
use Inertia\Inertia;

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

Route::get('costumers/create',[CostumerController::class,'create']);
Route::get('costumers',[CostumerController::class,'index'])->name('costumers.index');
/* store costumers */
Route::post('costumers',[CostumerController::class,'store']);