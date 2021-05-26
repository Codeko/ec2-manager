<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MachineSharedUrlController;

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

Route::get('/sharedurl', [MachineSharedUrlController::class, 'index']);
//Route::get('/sharedurlshow', [MachineSharedUrlController::class, 'showSharedUrl']);
Route::get('/{id}', [MachineSharedUrlController::class, 'show']);

