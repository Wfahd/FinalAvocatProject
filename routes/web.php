<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientsController; 
use App\Http\Controllers\AffairesController; 
use App\Http\Controllers\Etapescontroller; 
use App\Http\Controllers\ArchiveController; 
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClienPlanningController;
use App\Http\Controllers\ProfileController;







Route::get('/clien_planning', [ClienPlanningController::class, 'index'])->name('clien_planning.index');
Route::get('/clien_planning/create', [ClienPlanningController::class, 'create'])->name('clien_planning.create');
Route::post('/clien_planning', [ClienPlanningController::class, 'store'])->name('clien_planning.store');
Route::get('/clien_planning/{client}/edit', [ClienPlanningController::class, 'edit'])->name('clien_planning.edit');
Route::put('/clien_planning/{client}', [ClienPlanningController::class, 'update'])->name('clien_planning.update');
Route::delete('/clien_planning/{client}', [ClienPlanningController::class, 'destroy'])->name('clien_planning.destroy');





Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');
Route::patch('/notifications/{notification}', [NotificationController::class, 'markAsRead'])->name('notifications.markAsRead');


Route::get('/pdfs', [PDFController::class, 'showPDFs'])->name('pdfs.index');

Route::get('/generate-pdf/{id}',[PDFController::class, 'savePageAsPDF'] )->name('generate-pdf');

 
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');




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
Route::get('/pdfs/{filename}', function ($filename) {
    $filePath = public_path('pdfs/' . $filename);
    return response()->file($filePath, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="' . $filename . '"',
    ]);
})->name('pdfs.show');



Route::get('/', function () {
    return view('welcome');
});

Route::get('/rtl', function () {
    return view('pages.rtl');
})->name('pages.rtl');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/user-profile', [ProfileController::class, 'profile'])->name('user-profile');
Route::get('/user-management', [UserController::class, 'index'])->name('user-management');
Route::get('/affaires/{id}/edit', [AffairesController::class, 'edit'])->name('affaires.edit');
Route::put('/affaires/{affaire}', [AffairesController::class, 'update'])->name('affaires.update');
Route::delete('/affaires/{id}', [App\Http\Controllers\AffairesController::class, 'destroy'])->name('affaires.destroy');
Route::resource('/MyClients/Affaires/etapes', Etapescontroller::class);


Route::get('/MyClients/Affaires/etapes/{id}', [Etapescontroller::class, 'index'])->name('etapes.index');
Route::get('/MyClients/Affaires/etapes/add/{id}', [Etapescontroller::class, 'create'] )->name('etapes.create'); 
Route::post('/MyClients/Affaires/etapes/store/{id}', [Etapescontroller::class, 'store'] )->name('etapes.store'); 


Route::resource('/MyClients/Affaires/archives', ArchiveController::class); 

Route::post('/cases/archive/{id}', [AffairesController::class, 'archive'])->name('affaires.archive');



Route::get('/MyClients', [ClientsController::class, 'index'])->name('MyClients');
Route::get('/MyClients/create', [ClientsController::class, 'create'])->name('createClient');


Route::resource('/MyClients/Affaires/cases', AffairesController::class); 


Route::get('/affaires/{id}/etapes', 'Etapescontroller@index');




Route::get('/MyClients/Affaires/createCase', [AffairesController::class, 'create']);

Route::get('clients/{id}/cases', [AffairesController::class, 'show'])->name('Affaires.cases');






Route::delete('/clients/{id}', [ClientsController::class, 'destroy'])->name('clients.destroy');
Route::get('/MyClients/edit/{id}', [ClientsController::class, 'edit'])->name('clients.edit');
Route::put('/clients/{id}', [ClientsController::class, 'update'])->name('clients.update');





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

