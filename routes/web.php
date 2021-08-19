<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;
use App\Http\Controllers\BookController;


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


Route::get('/', [NavController::class, 'home']);

Route::get('books', [NavController::class, 'books']);
Route::get('addBook', [NavController::class, 'addBook']);
Route::post('addBook', [ActionController::class, 'addBook']);
Route::post('deleteBook', [ActionController::class, 'deleteBook']);
Route::get('book/{id}', [NavController::class, 'book']);
Route::post('updateBook', [NavController::class, 'updateBook']);
Route::post('updateOneBook', [ActionController::class, 'updateBook']);