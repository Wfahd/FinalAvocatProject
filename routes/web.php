<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientsController; 
use App\Http\Controllers\AffairesController; 




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/user-profile', [UserController::class, 'profile'])->name('user-profile');
Route::get('/user-management', [UserController::class, 'index'])->name('user-management');

Route::resource('/MyClients', ClientsController::class); 
Route::resource('/MyClients/Affaires/cases', AffairesController::class); 

Route::get('/MyClients/Affaires/createCase', [AffairesController::class, 'create']);
Route::get('/MyClients', [ClientsController::class, 'index'])->name('clients.index');
Route::get('/MyClients', [ClientsController::class, 'index'])->name('clients.index');

Route::get('clients/{id}/cases', [AffairesController::class, 'show'])->name('Affaires.cases');




Route::delete('/clients/{id}', [ClientsController::class, 'destroy'])->name('clients.destroy');
Route::get('/MyClients/edit/{id}', [ClientsController::class, 'edit'])->name('clients.edit');
Route::put('/clients/{id}', [ClientsController::class, 'update'])->name('clients.update');





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

