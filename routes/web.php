<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ProfileController::class, 'index']);


Route::get('/infoanime/{id}', [ProfileController::class, 'infoanime']);
Route::get('/listadeanimes', [ProfileController::class, 'listadeanimes']);

Route::get('/list-ranking', [ProfileController::class, 'list_ranking']);

Route::get('/plusanimec/{id}', [ProfileController::class, 'plusanimec']);
Route::get('/decreanimec/{id}', [ProfileController::class, 'decreanimec']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/teste', [ProfileController::class, 'teste']);
    Route::get('/home', [ProfileController::class, 'home'])->name('home');
    
    Route::get('/formanime', [ProfileController::class, 'formanime'])->name('formanime');
    Route::post('/formanime', [ProfileController::class, 'animeAdd'])->name('animeAdd');

    Route::get('/formassistindo', [ProfileController::class, 'formassistindo'])->name('formassistindo');
    Route::post('/formassistindo', [ProfileController::class, 'assistindoAdd'])->name('assistindoAdd');
    Route::delete('/formassistindo/{id}', [ProfileController::class, 'destroy_assistindo']);
    Route::get('/formassistindo/edit/{id}', [ProfileController::class, 'edit_assistindo']);
    Route::put('/formassistindo/update/{id}', [ProfileController::class, 'update_assistindo']);
    Route::get('/formassistindo/plusanime/{id_anime}/{id_assist}', [ProfileController::class, 'plusanime'])->name('plusanime');
    Route::get('/formassistindo/decreanime/{id_anime}/{id_assist}', [ProfileController::class, 'decreanime'])->name('decreanime');
    Route::get('/formassistindo/addranking/{id}', [ProfileController::class, 'addranking']);
    Route::get('/formassistindo/addcontinua/{id}', [ProfileController::class, 'addcontinua']);
    Route::get('/formassistindo/addparados/{id}', [ProfileController::class, 'addparados']);
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
