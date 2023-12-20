<?php

use App\Http\Controllers\AuthenticationController;
use App\Image;
use App\Offer;
use Auth\LoginController;
use Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\OfferController;

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
    return view('home');
});

Route::get('/about', [PageController::class, 'about']);
Route::get('/help', [PageController::class, 'help']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/upload', [PageController::class, 'upload']);
Route::post('/upload', [ImageController::class, 'uploadInfo'])->name('upload'); 
Route::get('/explore', [ImageController::class, 'displayInfo']);
Route::get('/image/{id}', [ImageController::class, 'specificInfo'])->name('image.details');
Route::get('/offer', [OfferController::class, 'offer'])->name('offer');
Route::post('/offer', [OfferController::class, 'store'])->name('offer');
Route::get('/purchaseSuccess', [PageController::class, 'purchaseSuccess'])->name('purchaseSuccess');
// Route::post('/offers/submit', 'OfferController@submit');
// Route::get('/offer', [OfferController::class, 'offer'])->middleware('auth');
// Route::post('/offer', [OfferController::class, 'store'])->name('offer');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
