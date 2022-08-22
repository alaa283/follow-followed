<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Follow_UserController;

use App\Http\Livewire\HomeComponent;


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
    return view('welcome');
});

// Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])
// ->group(function () {Route::get('/dashboard', function () {return view('dashboard');
// })->name('dashboard');});

Route::middleware(['auth:sanctum','verified'])->group(function () 
{Route::get('/dashboard',HomeComponent::class)->name('dashboard');});

// Route::middleware(['auth:sanctum','verified'])
// ->group(function () {Route::get('/dashboard', function () {return view('dashboard');
// })->name('dashboard');});

Route::get('/show_all', [UserController::class, 'show_all'])->name("show_all");

Route::get('/user_account/{id}', [UserController::class, 'user_account'])->name("user_account");

Route::post('/follow', [Follow_UserController::class, 'follow'])->name("follow");
