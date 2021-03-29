<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

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

Route::resource('/item', \App\Http\Controllers\ItemController::class);
Route::resource('/catalog', \App\Http\Controllers\CatalogController::class);

Route::resource('/ingredient', \App\Http\Controllers\IngredientController::class);
Route::resource('/recipe', \App\Http\Controllers\RecipeController::class);

Route::get('/display/{catalog}', [CatalogController::class, 'display']);
Route::get("/display1/{recipe}", [RecipeController::class, "display1"]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
