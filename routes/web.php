<?php

use App\Models\Item;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/categories', function () {
    return view('categories');
})->name('categories');

Route::middleware(['auth:sanctum', 'verified'])->get('/items', function () {
    return view('items');
})->name('items');

Route::middleware(['auth:sanctum', 'verified'])
    ->resource('category', CategoryController::class);

Route::middleware(['auth:sanctum', 'verified'])
    ->resource('item', Item::class);
