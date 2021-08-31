<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;
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
Auth::routes(['register' => false]);


Route::get('/', [WebsiteController::class, 'index'])->name('welcome');
Route::post('/appointment', [WebsiteController::class, 'makeAppointment'])->name('appointment.make');
Route::get('/success', [WebsiteController::class, 'success'])->name('appointment.success');