<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/users/{id}', [\App\Http\Controllers\UserController::class, 'GetItem']);
Route::get('/users', [\App\Http\Controllers\UserController::class, 'GetIndex']);

Route::get('/homes/{id}', [\App\Http\Controllers\HomeController::class, 'GetItem']);
Route::get('/homes', [\App\Http\Controllers\HomeController::class, 'GetIndex']);


Route::get('/', function() {
    return view('root.root');
});

Route::middleware(['auth','notblocked'])->group(function() {
    Route::get('/me', [\App\Http\Controllers\UserController::class,'GetMe']);
    // Route::get('/me', [\App\Http\Controllers\UserController::class, 'GetMyProposals']);

    Route::get('/new', function() {return redirect('/');});

    Route::get('new/home', [\App\Http\Controllers\NewEntryController::class, 'GetNewHome']);
    Route::post('new/home', [\App\Http\Controllers\NewEntryController::class, 'PostNewHome']);
    
    Route::get('new/offers', [\App\Http\Controllers\NewEntryController::class, 'GetNewOffer']);
    Route::post('new/offers', [\App\Http\Controllers\NewEntryController::class, 'PostNewHome']);

    Route::get('/new/proposal/{offer_id}', [\App\Http\Controllers\NewEntryController::class, 'GetNewProposal']);
    Route::post('/new/proposal/{offer_id}', [\App\Http\Controllers\NewEntryController::class, 'PostNewProposal']);

    Route::get('/new/review/{user_id}', [\App\Http\Controllers\NewEntryController::class, 'GetNewReview']);
    Route::post('/new/review/{user_id}', [\App\Http\Controllers\NewEntryController::class, 'PostNewReview']);
    
    Route::post('/new/block/{user_id}', [\App\Http\Controllers\NewEntryController::class, 'PostNewBlock'])->middleware(['IsAdmin']);
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
