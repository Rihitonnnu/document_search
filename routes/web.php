<?php

use Illuminate\Support\Facades\Route;
use League\CommonMark\Node\Block\Document;
use App\Http\Controllers\Document\DocumentsController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('documents',DocumentsController::class);

require __DIR__.'/auth.php';
