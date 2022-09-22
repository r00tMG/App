<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhaseController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ChantierController;
use App\Http\Controllers\EmployeeController;


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



Route::get('/fanig', function () {
    return view('home');
});

/* Route::get('/fanig', [FanigController::class,'home']);
 */
/* routing employees */
Route::resource('employees', EmployeeController::class);

/* routing chantiers */
Route::resource('chantiers', ChantierController::class);

/* routing managers */
Route::resource('managers', ManagerController::class);

/* rooting phase */
Route::resource('phases', PhaseController::class);

/* rooting photos */
Route::resource('photos', PhotoController::class);

/* routing auth */
/* 
Route::get('/auth/login', [MainController::class,'login'])->name('auth.login');
Route::get('/auth/register', [MainController::class,'register'])->name('auth.register');
Route::post('/auth/store', [MainController::class,'store'])->name('auth.store');
Route::post('/auth/check', [MainController::class,'check'])->name('auth.check'); */

#rooting jestream
/* Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
}); */

Route::get('/', [AuthController::class, 'getLogin'])->name('getLogin');
Route::post('/', [AuthController::class, 'postLogin'])->name('postLogin');
Route::get('admin/logout', [AuthController::class, 'getLogout'])->name('getLogout');

Route::middleware(['auth'])->group(function () {
    Route::get('/template', function () {
        return view('template');
    });
});

/* Route::get('template', [SearchController::class, 'search'])->name('search'); */