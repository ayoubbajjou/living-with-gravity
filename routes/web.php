<?php

use App\Http\Controllers\BikeController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;
use App\Models\Bike;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Sitemap;

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
Route::get('/generate-sitemap', function() {
        Sitemap::create('https://bike.livingwithgravity.com')
                        ->add(Bike::whereNotNull('default_price')
                        ->pluck('make'))
                        ->writeToFile('sitemap.xml');
})->name('generate-sitemap');
Route::get('/get-brands', [BrandController::class, 'getBrands'])->name('get.brands');
Route::get('/search/budget/{budget}', [SearchController::class, 'searchByBudget'])->name('searchByBudget');
Route::get('/search/displacement', [SearchController::class, 'searchByDisplacement'])->name('searchByDisplacement');
Route::get('/get-brands-limited', [BrandController::class, 'getBrandsLimited'])->name('get.brands-limited');
Route::get('/bike-versions/{id}', [BikeController::class, 'bikeVersions'])->name('get.bike-versions');
Route::post('/search', [SearchController::class, 'search'])->name('search');
Route::get('/all-bikes/{brand}', [BikeController::class, 'allBikes'])->name('allBikes');
Route::post('/get-dealers-pagination', [BikeController::class, 'getDealersPagination'])->name('getDealersPagination');
Route::post('/get-dealers', [BikeController::class, 'getDealers'])->name('getDealers');
Route::get('/get-cities', [CityController::class, 'getCities'])->name('getCities');
Route::post('/get-keys-featured', [BikeController::class, 'getKeys'])->name('getKeys');
Route::get('/get-wp-posts', [PostController::class, 'getWpPosts'])->name('getWpPosts');
Route::get('/get-wp-posts-footer', [PostController::class, 'getWpPostsFooter'])->name('getWpPostsFooter');
Route::get('/{name}', [BrandController::class, 'index'])->name('brand');
Route::get('/{brand}/{series}/{version_name}', [BikeController::class, 'show'])->name('show.bikes');
