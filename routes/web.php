<?php

use App\Http\Controllers\BikeController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])
        ->get('/bikes', [BikeController::class, 'index'])->name('bikes');
Route::middleware(['auth:sanctum', 'verified'])
        ->get('/add-bike', [BikeController::class, 'create'])->name('add.bikes');
Route::middleware(['auth:sanctum', 'verified'])
        ->post('/store-bike', [BikeController::class, 'store'])->name('store.bikes');
Route::get('/posts', [PostController::class, 'index'])->name('posts');

Route::get('/bike/{id}', [BikeController::class, 'show'])->name('show.bikes');
Route::get('/get-brands', [BrandController::class, 'getBrands'])->name('get.brands');
Route::get('/get-brands-limited', [BrandController::class, 'getBrandsLimited'])->name('get.brands-limited');