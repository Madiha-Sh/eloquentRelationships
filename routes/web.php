<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\RolesController;
use App\User;
use App\Address;

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

// OnetoOne Relationship
// Route::get('/index', [AddressController::class, 'index']);

// Route::get('/show/{id}', [AddressController::class, 'show']);

// Route::get('/create', [AddressController::class, 'create']);

// Route::get('/update/{id}', [AddressController::class, 'update']);

// Route::get('/destroy/{id}', [AddressController::class, 'destroy']);

// ManytoMany Relationship
// Route::get('/create', [RolesController::class, 'create']);

// Route::get('/show/{id}', [RolesController::class, 'show']);

// Route::get('/update/{id}', [RolesController::class, 'update']);

// Route::get('/destroy/{id}', [RolesController::class, 'destroy']);


// // Attaching roles to user
// Route::get('/attach', function() {
//     $user = User::findOrFail(2);
//     $user->roles()->attach(2);
// });

// // Detaching roles from user
// Route::get('/detach', function() {
//     $user = User::findOrFail(1);
//     $user->roles()->detach(2);


//     // // to detach all the roles from a specific user
//     // $user->roles()->detach();
// });


// // Syncing roles with user
// Route::get('/sync', function(){
//     $user = User::findOrFail(2);
//     $user->roles()->sync([3,4]);
// //     $user->roles()->sync([2]);
// });