<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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

Route::get('/events', [EventController::class, 'index'])->name('events.index');

Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
Route::post('/events', [EventController::class, 'store'])->name('events.store');

Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');

Route::get('/events/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
Route::put('/events/{id}', [EventController::class, 'update'])->name('events.update');

Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('events.destroy');

/* 
Zelf Reflectie:
Ik vond het een erg fijne module. Ik heb veel geleerd, vooral tijdens het maken van de eindopdracht.
Ik vond met laravel werken op het begin een beetje vaag, maar het klikte al erg snel.
Tailwind gebruiken vond ik ook erg fijn en gemakkelijk, maar het maakt de code een beetje onoverzichtelijk.
De uitleg was erg duidelijk en fijn, en de opdrachten waren fijn en duidelijk.
Met het hele bronze, zilver en goud gedoe vond ik erg relaxed werken en geeft je ook meer motivatie om verder te werken.
*/