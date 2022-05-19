<?php

use App\Http\Controllers\BikeController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CompareController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\QaController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\FacebookSocialiteController;
use App\Http\Controllers\GoogleSocialiteController;
use App\Http\Controllers\ReviewController;
use App\Models\Question;
use App\Models\Review;
use App\Models\Bike;
use Laravel\Fortify\Fortify;

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

// Route::get('/login', function () {
//     abort(404);
// });

// TODO
// Route::get('/lwg-9xzS8ddnc9puRethefqjufn3', function () {
//     return Inertia::render('Auth/Login');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'verified'])->get('/dashboard', function () {
    if (auth()->user()->is_admin) {
        return Inertia::render('Dashboard');
    }
    $reviews = Review::where('user_id', auth()->user()->id)->with('bike', 'user')->get();
    $questions = Question::where('user_id', auth()->user()->id)->with('bike', 'user')->get();
    $series = Bike::select('series')->whereNotNull('model_id')->pluck('series');
    $series = array_values(collect($series)->unique()->toArray());
    $bike = Bike::where('id', auth()->user()?->bike_id)->whereNotNull('default_price')
        ->with('prices', 'images')->first();

    return Inertia::render('User/Dashboard', compact('reviews', 'questions', 'series', 'bike'));
})->name('dashboard');

// Route::middleware(['auth', 'verified'])->get('/user/dashboard', function () {
//         return Inertia::render('User/Dashboard');
// })->name('dashboard.user');

Route::middleware(['auth:sanctum', 'verified', 'admin'])
    ->get('/bikes', [BikeController::class, 'index'])->name('bikes');
Route::middleware(['auth:sanctum', 'verified', 'admin'])
    ->get('/questions', [QaController::class, 'adminPanel'])->name('questions');
Route::middleware(['auth:sanctum', 'verified', 'admin'])
    ->get('/reviews', [ReviewController::class, 'adminPanel'])->name('reviews');
Route::middleware(['auth:sanctum', 'verified', 'admin'])
    ->get('/questions/answer/{id}', [QaController::class, 'answerQuestion'])->name('questions.answer');
Route::middleware(['auth:sanctum', 'verified', 'admin'])
    ->post('/store-answer/{id}', [QaController::class, 'storeAnswer'])->name('store.answer');
Route::middleware(['auth:sanctum', 'verified', 'admin'])
    ->get('/add-bike', [BikeController::class, 'create'])->name('add.bikes');
Route::middleware(['auth:sanctum', 'verified', 'admin'])
    ->post('/store-bike', [BikeController::class, 'store'])->name('store.bikes');
Route::get('/posts', [PostController::class, 'index'])->name('posts');
// Compare bikes
Route::get('/compare', [CompareController::class, 'index'])->name('compare');
Route::get('/sitemap.xml', [HomeController::class, 'generateSitemap']);
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
Route::post('/fetch-bike-variant', [BikeController::class, 'fetchBikeVariant']);
Route::post('/get-bike-variant', [BikeController::class, 'getBikeVariant']);
Route::post('/save-user-bike', [BikeController::class, 'saveUserBike']);
Route::post('/popular-bikes', [BikeController::class, 'popularBikes']);

// QA
Route::post('/ask-question', [QaController::class, 'store'])->name('store.qa');
Route::get('/get-questions/{bike_id}', [QaController::class, 'index'])->name('get_questions');
Route::get('/{brand}/{series}/{version_name}/questions', [QaController::class, 'allQuestions'])->name('allQuestions');

// Review
Route::get('/review/{brand}/{series}/{version_name}', [ReviewController::class, 'create'])->name('review.create');
Route::post('/submit-review/{id}', [ReviewController::class, 'store'])->name('review.store');
Route::post('/approve-review', [ReviewController::class, 'approve'])->name('review.approve');
Route::middleware(['auth:sanctum', 'verified', 'admin'])
    ->get('/rt-reviews', [ReviewController::class, 'fetchReviews'])->name('fetch_reviews');
Route::get('/{brand}/{series}/{version_name}/reviews', [ReviewController::class, 'allReviews'])->name('allReviews');
Route::get('/{brand}/{series}/{version_name}/reviews/{slug}', [ReviewController::class, 'review'])->name('review');

//Compare
Route::post('/compare-bikes', [CompareController::class, 'compareBikes'])->name('compare.bikes');

// Google login
Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);

// Facebook login
Route::get('auth/facebook', [FacebookSocialiteController::class, 'redirectToFB']);
Route::get('callback/facebook', [FacebookSocialiteController::class, 'handleCallback']);
