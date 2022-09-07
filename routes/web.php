<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AccountController;

use App\Models\Transaction;


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


Route::get('/', function(){
    return view('home');
});


Route::get('balance', function(){
    $transactions = Transaction::orderBy('created_at', 'desc')->get();
    return view('balance', ['transactions' => $transactions]);
});


Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::resource('categories', CategoryController::class)->except('show');
Route::resource('accounts', AccountController::class)->except('show');

require __DIR__.'/auth.php';
