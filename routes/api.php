<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/index', function () {
       return view('index');
    })->name('index');

    Route::get('/index', [ArticleController::class, 'index'])->name('index');
    Route::post('/store', [ArticleController::class, 'createArticle'])->name('create_article');
    Route::get('/create', function () { return view('create_article');})->name('articlestore');


});
// Route::post('/login', [AuthController::class,'login'])->name('login');
// Route::post('/register', [AuthController::class,'register'])->name('register');

Route::get('/connexion', function (){ return view('login'); })->name('connexion');
Route::get('/inscription', function (){ return view('register'); })->name('inscription');
// Route::get('/create', function (){ return view('register'); })->name('create');
Route::get(
    uri: 'login',
    action: static fn () =>  \App\Models\User::firstOrFail()->createToken('auth_token')->plainTextToken
)->name('login');


