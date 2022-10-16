<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataTableEmployeeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('crud', [DataTableEmployeeController::class, 'index'])->name('user');
Route::post('store-company', [DataTableEmployeeController::class, 'store']);
Route::post('edit-company', [DataTableEmployeeController::class, 'edit']);
Route::post('delete-company', [DataTableEmployeeController::class, 'destroy']);
