<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthorController;
use App\Models\Chapter;
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

Route::get('/', function () {
    return view('page.base');
});
Route::get('/home', function () {
    return view('home.index');
})->name('home');

Route::get('/books', [BookController::class, 'index']);
Route::get('/books/create', [BookController::class, 'create']);
Route::post('/books', [BookController::class, 'store']);
Route::get('/books/{id}', [BookController::class, 'show']);
Route::get('/books/{id}/edit', [BookController::class, 'edit']);
Route::put('/books/{book}', [BookController::class, 'update']);
Route::delete('/books/{id}', [BookController::class, 'destroy']);

Route::get('/books/{book}/read', [BookController::class, 'read'])->name('books.read');

Route::get('/chapters', [ChapterController::class, 'index']);
Route::get('/chapters/create', [ChapterController::class, 'create']);
Route::post('/chapters', [ChapterController::class, 'store']);
Route::get('/chapters/{chapter}', [ChapterController::class, 'show']);
Route::get('/chapters/{chapter}/edit', [ChapterController::class, 'edit']);
Route::put('/chapters/{chapter}', [ChapterController::class, 'update']);
Route::delete('/chapters/{chapter}', [ChapterController::class, 'destroy']);


Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::get('/users/{id}/edit', [UserController::class, 'edit']);
Route::put('/users/{user}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);
Route::get('/users', [UserController::class, 'index']);


Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/authors/create', [AuthorController::class, 'create']);
Route::post('/authors', [AuthorController::class, 'store']);
Route::get('/authors/{author}', [AuthorController::class, 'show']);
Route::get('/authors/{author}/edit', [AuthorController::class, 'edit']);
Route::put('/authors/{author}', [AuthorController::class, 'update']);
Route::delete('/authors/{author}', [AuthorController::class, 'destroy']);