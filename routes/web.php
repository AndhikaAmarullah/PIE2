<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DuaController;
use App\Http\Controllers\EnamController;
use App\Http\Controllers\SepuluhController;
use App\Http\Controllers\LimaController;
use App\Http\Controllers\SatuController;
use App\Http\Controllers\TigaController;
use App\Http\Controllers\EmpatController;
use App\Http\Controllers\TujuhController;
use App\Http\Controllers\DelapanController;
use App\Http\Controllers\SembilanController;


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


Route::get('/satu', [SatuController::class, 'index']);

Route::get('/dua', [DuaController::class, 'index']);

Route::get('/tiga', [TigaController::class, 'index']);

Route::get('/empat', [EmpatController::class, 'index']);

Route::get('/lima', [LimaController::class, 'index']);

Route::get('/enam', [EnamController::class, 'index']);

Route::get('/tujuh', [TujuhController::class, 'index']);

Route::get('/delapan', [DelapanController::class, 'index']);

Route::get('/sembilan', [SembilanController::class, 'index']);

Route::get('/sepuluh', [SepuluhController::class, 'index']);

Route::get('/index', function () {
    echo ("index utama");
});

Route::get('/about', function () {
    echo ("about utama");
});

Route::get('/about/andhika-amarullah', function () {
    echo ("biodata andhika");
});

Route::get('/about/sahrial-insani', function () {
    echo ("lord bliard");
});

Route::get('/about/julian-randi', function () {
    echo ("legenda humas");
});

Route::get('/skil/skil-julian', function () {
    echo ("meci lampu bliard");
});

Route::get('/skil/skil-sahrial', function () {
    echo ("ngoding tanpa henti");
});

Route::get('/skil/skil-andhika', function () {
    echo ("manjat tower ");
});

Route::get('/devisi/devisi-andhika', function () {
    echo ("humas hura hara");
});

Route::get('/devisi/devisi-sahrial', function () {
    echo ("Bpo ");
});
Route::get('/devisi/devisi-julian', function () {
    echo ("legenda BNN");
});