<?php

use Illuminate\Support\Facades\Auth;
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
// for welcome page
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// for dashboard page
Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard')->middleware('verified');
});

// Route::get('/mail', function () {

//     return view(('Email/email'));

// });

// Route::get('/mail', [EmailController::class, 'email']);

Auth::routes([
    'verify' => true,
]);

require __DIR__ . '/auth.php';
