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


// option 2 of crud (without front):

// Route::get('/create/{userID}', function($userID){
//     $user = User::find($userID);
//     $user->countries()->save(new Country(['name'=> 'Israel', 'ISO'=> 'IL']));
//    });

// Route::get('/read', function(){
//     $user = User::findOrFail(1);
//     foreach ($user->countries as $country) {
//         echo $user->countries;
//     }
// });

// Route::get('/update', function(){
//     $user = User::findOrFail(1);
//     if ($user->has('countries')) {
//         foreach ($user->countries as $country) {
//             if ($country->name == 'Israel') {
//                 $country->name = 'Thailand';
//                 $country->save();
//             }
//         }
//     }
// });

// Route::get('/delete', function(){
//     $user = User::findOrFail(1);
//     foreach ($user->countries as $country) {
//         $country->whereId(2)->delete();
//     }
// });

//Attaches a country to a user, and will create another record
// Route::get('/attach', function(){
//     $user = User::findOrFail(2);
//     $user->countries()->attach(2);
// });

