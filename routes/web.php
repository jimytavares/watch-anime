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

Route::group([], function (){
    
    Route::get('/', [ProfileController::class, 'index']);

    Route::get('/teste', [ProfileController::class, 'teste']);

    Route::get('/infoanime/{id}', [ProfileController::class, 'infoanime']);
    Route::get('/listadeanimes', [ProfileController::class, 'listadeanimes']);

    Route::get('/list-ranking', [ProfileController::class, 'list_ranking']);

    Route::get('/plusanimec/{id}', [ProfileController::class, 'plusanimec']);
    Route::get('/decreanimec/{id}', [ProfileController::class, 'decreanimec']);
});


Route::get('/dashboard', [ProfileController::class, 'home'])->middleware(['auth', 'verified'])->name('dashboard');

/*Route::middleware('auth')->group(function () {*/
Route::group(['middleware' => ['auth']], function () {
    
    Route::get('/home', [ProfileController::class, 'home'])->name('home');
    
    Route::get('/apache2', [ProfileController::class, 'apache2'])->name('apache2');
    Route::get('/linuxComandos', [ProfileController::class, 'linuxComandos'])->name('linuxComandos');
    
    Route::get('/createProject', [ProfileController::class, 'createProject'])->name('createProject');
    Route::get('/laravel-migrations', [ProfileController::class, 'laravelMigrations'])->name('laravelMigrations');
    Route::get('/laravel-eloquent', [ProfileController::class, 'laravelEloquent'])->name('laravelEloquent');
    Route::get('/laravel-auth', [ProfileController::class, 'laravelAuth'])->name('laravelAuth');
    
    Route::get('/formassistindo', [ProfileController::class, 'formassistindo'])->name('formassistindo');
        Route::post('/formassistindo', [ProfileController::class, 'assistindoAdd'])->name('assistindoAdd');
        Route::delete('/destroy_assistindo/{id}', [ProfileController::class, 'destroy_assistindo']);
    Route::get('/formassistindo/edit/{id}', [ProfileController::class, 'edit_assistindo']);
    Route::put('/formassistindo/update/{id}', [ProfileController::class, 'update_assistindo']);
    Route::get('/formassistindo/plusanime/{id_anime}/{id_assist}', [ProfileController::class, 'plusanime'])->name('plusanime');
    Route::get('/formassistindo/decreanime/{id_anime}/{id_assist}', [ProfileController::class, 'decreanime'])->name('decreanime');
    Route::get('/formassistindo/addranking/{id}', [ProfileController::class, 'addranking']);
    Route::get('/formassistindo/addcontinua/{id}', [ProfileController::class, 'addcontinua']);
    Route::get('/create_parados/{id}', [ProfileController::class, 'addparados']);
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

Route::group(['middleware' => ['auth', 'admin']], function (){
        
    Route::get('/admin/formanime', [ProfileController::class, 'formanime'])->name('formanime');
        Route::post('/admin/formanime', [ProfileController::class, 'animeAdd'])->name('animeAdd');
});


require __DIR__.'/auth.php';
