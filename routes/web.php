<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\dashboardController;

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
    $subscribed = false;
    return view('welcome', compact('subscribed'));
});
route::post('/', [SubscriptionController::class, 'subscribe']);
route::get('/contact', [ContactController::class, 'index']);
    Route::delete('/dashboard/{contact}', [ContactController::class, 'destroy'])->name('dashboard.destroy');

route::get('/rgpd', [ContactController::class, 'rgpd_show']);
route::post('/contact/send', [ContactController::class, 'saveContact']);
route::post('/reset', [SubscriptionController::class, 'reset']);
// Route::view('/home', 'dashboard')->middleware('auth');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [dashboardController::class, 'show']);
});
