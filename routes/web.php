<?php

use App\Http\Controllers\EntrepotController;
use App\Http\Controllers\ProduitController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// entrepot:
Route::get('/',[EntrepotController::class,'index'])->name('entrepot');
Route::get('/entrepot',[EntrepotController::class,'index'])->name('entrepot');
Route::get('/entrepot/create',[EntrepotController::class,'create'])->name('entrepot.create');
Route::post('/entrepot/store',[EntrepotController::class,'store'])->name('entrepot.store');
Route::get('/entrepot/{id}/edit', [EntrepotController::class, 'edit'])->name('entrepot.edit');
Route::put('/entrepot/{id}/update', [EntrepotController::class, 'update'])->name('entrepot.update');
Route::delete('/entrepot/{id}/delete', [EntrepotController::class, 'destroy'])->name('entrepot.delete');
Route::get('/entrepot/{id}/show', [EntrepotController::class, 'show'])->name('entrepot.show');

// produit:
Route::get('/produit',[ProduitController::class,'index'])->name('produit');
Route::get('/produit/create',[ProduitController::class,'create'])->name('produit.create');
Route::post('/produit/store',[ProduitController::class,'store'])->name('produit.store');
Route::get('/produit/{id}/edit', [ProduitController::class, 'edit'])->name('produit.edit');
Route::put('/produit/{id}/update', [ProduitController::class, 'update'])->name('produit.update');
Route::delete('/produit/{id}/delete', [ProduitController::class, 'destroy'])->name('produit.delete');
Route::get('/produit/{id}/show', [ProduitController::class, 'show'])->name('produit.show');

