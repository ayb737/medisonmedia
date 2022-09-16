<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\CountryController;
use App\Http\Controllers as C;

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
    if (Auth::check())
    {
        return view('dashboard');
    } else {
        return view('auth/register');
    }
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('countries/create', [C\CountryController::class, 'create']);
Route::post('countries', [C\CountryController::class, 'store']);

Route::get('/country', [C\CountryController::class, 'index']);
require __DIR__.'/auth.php';
