<?php

use App\Http\Controllers\Authors\AuthorsController;
use App\Http\Controllers\Users\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Books\BooksController;
use App\Models\Books;

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

// Route::get('/users', function(){
//     return view('users/user');
// });
// Route::group(['prefix' => 'users'], function () {
// Route ::get('/index', [UserController::class, 'index']);
// Route ::get('/create', [UserController::class, 'create']);
// Route ::get('{id}/edit', [UserController::class, 'edit']);
// Route ::put('{id}', [UserController::class, 'update']);
Route ::delete('{id}', [UserController::class, 'destroy']);

// });
Route::group(['prefix' => 'books'], function () {
    Route::get('/index', [BooksController::class, 'index']);
    Route::get('/create', [BooksController::class, 'createBook']);
    Route::post('/save-book', [BooksController::class, 'saveBook']);
    Route::get('/{id}/edit-book', [BooksController::class, 'editBook']);
    Route::put('/{id}', [BooksController::class, 'updateBook']);
    Route::delete('{id}', [BooksController::class, 'deleteBook']);
});
Route::group(['prefix' => 'authors'], function () {
    Route::get('/index', [AuthorsController::class, 'index']);
    Route::post('/save-authors', [AuthorsController::class, 'saveAuthors']);
});




