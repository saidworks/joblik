<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('/',[Controllers\ListingController::class,'index'])->name('listings.index');
Route::get('/new',[Controllers\ListingController::class,'create'])->name('listings.create');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// show listing
Route::get('/{listing}',[Controllers\ListingController::class,'show'])->name('listings.show');
//apply to listing
Route::get('/{listing}/apply',[Controllers\ListingController::class,'apply'])->name('listings.apply');

