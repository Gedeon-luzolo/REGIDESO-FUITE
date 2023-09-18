<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;
use app\Http\Controllers\Ajoutfuite;
use app\Http\Controllers\ajoutindex;
use app\Http\Controllers\PanelController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/Accueil', function () {
    return view('Accueil');
});

Route::get('/Accueil', function () {
    return view('Accueil');
});

Route::get('/Envoie', [App\Http\Controllers\HomeController::class, 'Envoie'])->name('Envoie');
Route::post('/post', [App\Http\Controllers\Ajoutfuite::class, 'store']);

Route::group(['middleware'=>['auth']],function(){
    Route::get('/Robinet', [App\Http\Controllers\HomeController::class, 'Robinet'])->name('Robinet');
    Route::get('/Envoindex', [App\Http\Controllers\HomeController::class, 'Envoindex']);
    Route::post('/post1', [App\Http\Controllers\ajoutindex::class, 'store1']);

});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>['auth','Admin']],function(){

    Route::get('/Panneau', [App\Http\Controllers\Ajoutfuite::class, 'Affichage']);
    Route::get('/Utilisateur', [App\Http\Controllers\PanelController::class, 'Utilisateurs']);
    Route::get('/Listindex', [App\Http\Controllers\PanelController::class, 'Listindex']);
    Route::get('/Utilisateur-edit/{id}', [App\Http\Controllers\PanelController::class, 'Modifier']);
    Route::put('/ UtilisateurUpdate/{id}', [App\Http\Controllers\PanelController::class, 'Update']);
    Route::delete('/delete-utlisateur/{id}', [App\Http\Controllers\PanelController::class, 'Delete']);
    Route::post('/Ajouter', [App\Http\Controllers\PanelController::class, 'Ajouter']);

});

