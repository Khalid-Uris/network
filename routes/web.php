<?php

use App\Http\Controllers\BrandController;
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

// Route::get('/', function () {
//     return view('');
// });
// Route::view('layout', 'layout');
// Route::view('brand', 'brand.addBrand');

Route::get('brand', [BrandController::class, 'index'])->name('brand');
Route::post('addBrand', [BrandController::class, 'store'])->name('addBrand');
Route::get('showBrand', [BrandController::class, 'show'])->name('showBrand');
Route::get('brand/{id}', [BrandController::class, 'edit'])->name('editBrand');
Route::post('brand/update/{id}', [BrandController::class, 'update'])->name('updateBrand');
Route::get('brand/delete/{id}', [BrandController::class, 'destroy'])->name('deleteBrand');