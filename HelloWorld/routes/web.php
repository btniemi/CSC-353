<?php

use App\Http\Controllers\MyModelController;
use App\Http\Controllers\NewModelController;
use App\Http\Controllers\TalkController;
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
    $students = 4;
    $total = 6;
    $cool = 'cool';

    return view('welcome', [
        'greeting' => 'CSC353 Students',
        'students' => $students,
        'total' => $total,
        'percent'=> $students / $total * 100,
        'names' => ['Tom', 'Sandy', 'Brad', 'Janice'],
        'isCool' => $cool ?? 'not cool',
        ]);
});

Route::get('/new page', function () {
    return "new page";
});

Route::get('/homework page', function () {
    return "this if my page for homework assignment";
});

Route::resource('/mymodel', MyModelController::class);

Route::resource('/newmodel', NewModelController::class);

Route::resource('/talk', TalkController::class);
