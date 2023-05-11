<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientsController; 
use App\Http\Controllers\AffairesController; 
use App\Http\Controllers\Etapescontroller; 
use App\Http\Controllers\ArchiveController; 






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
Route::get('/affaires/{id}/edit', [AffairesController::class, 'edit'])->name('affaires.edit');
Route::put('/affaires/{affaire}', 'AffairesController@update')->name('affaires.update');
Route::delete('/affaires/{id}', [App\Http\Controllers\AffairesController::class, 'destroy'])->name('affaires.destroy');
Route::resource('/MyClients/Affaires/etapes', Etapescontroller::class);


Route::get('/MyClients/Affaires/etapes/{id}', [Etapescontroller::class, 'index'])->name('etapes.index');
Route::get('/MyClients/Affaires/etapes/add/{id}', [Etapescontroller::class, 'create'] )->name('etapes.create'); 
Route::post('/MyClients/Affaires/etapes/store/{id}', [Etapescontroller::class, 'store'] )->name('etapes.store'); 
Route::get('/MyClients/Affaires/etapes/edit', [Etapescontroller::class, 'edit'] )->name('etapes.edit'); 


Route::resource('/MyClients/Affaires/archives', ArchiveController::class); 

Route::post('/cases/archive/{id}', [AffairesController::class, 'archive'])->name('affaires.archive');

Route::post('/cases/archive/{id}', [AffairesController::class, 'archive'])->name('cases.archive');
Route::get('/etapes/{id}/edit', [EtapesController::class, 'edit'])->name('etapes.edit');



Route::resource('/MyClients', ClientsController::class); 
Route::resource('/MyClients/Affaires/cases', AffairesController::class); 






Route::get('/MyClients/Affaires/createCase', [AffairesController::class, 'create']);
Route::get('/MyClients', [ClientsController::class, 'index'])->name('clients.index');

Route::get('clients/{id}/cases', [AffairesController::class, 'show'])->name('Affaires.cases');






Route::delete('/clients/{id}', [ClientsController::class, 'destroy'])->name('clients.destroy');
Route::get('/MyClients/edit/{id}', [ClientsController::class, 'edit'])->name('clients.edit');
Route::put('/clients/{id}', [ClientsController::class, 'update'])->name('clients.update');





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

