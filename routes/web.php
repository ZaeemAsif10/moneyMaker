<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [WebController::class, 'index']);
Route::get('/about', [WebController::class, 'About']);
Route::get('/house/rules', [WebController::class, 'houseRules']);
Route::get('/safety', [WebController::class, 'Safety']);
Route::get('/location', [WebController::class, 'Location']);
Route::get('/venue', [WebController::class, 'Venue']);
Route::get('/membership-plans', [WebController::class, 'membershipPlans']);
Route::get('/team', [WebController::class, 'Team']);
Route::get('/contact', [WebController::class, 'Contact']);
Route::post('/contact-mail', [WebController::class, 'ContactMail']);
Route::get('/login', [WebController::class, 'Login']);
